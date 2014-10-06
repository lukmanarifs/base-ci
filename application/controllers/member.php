<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		$this->logged_in = TRUE;
        if(!$this->session->userdata('logged_in'))
        {
            redirect('home');
        }
        $this->load->model('project_model');
        // $this->load->model('webadmin_model');
        $this->load->model('member_model');
		error_reporting(0);
    }
    
	public function index()
	{
	   
	}
	
	function contest_list(){
		$data = array(
            'main_content' => 'lagumurni/content/contest_list',
            'option_value' => $this->get_select_value('id_genre','ASC','tm_genre'),
            'id_user' => $this->session->userdata('id_user')
        );
        
		$this->load->view('lagumurni/template',$data);
	}
	
	function my_contest(){
		$data = array(
            'main_content' => 'lagumurni/content/my_contest',
            'option_value' => $this->get_select_value('id_genre','ASC','tm_genre'),
            'id_user' => $this->session->userdata('id_user')
        );
        
		$this->load->view('lagumurni/template',$data);
	}
	
	function my_followed_contest(){
		$data = array(
            'main_content' => 'lagumurni/content/my_followed_contest',
            'option_value' => $this->get_select_value('id_genre','ASC','tm_genre'),
            'id_user' => $this->session->userdata('id_user')
        );
        
		$this->load->view('lagumurni/template',$data);
	}
	
	function get_select_value($param1,$param2,$param3)
    {
        $order_by_id   = $param1;
        $sorting_type = $param2;
        $table_name     = $param3;
        $data        = $this->project_model->get_data_select($order_by_id, $sorting_type, $table_name);
        
        return $data;  
	}
	
	function ssp_contest_list(){
		$id_user = $this->uri->segment(3);
		if($id_user == ""){
			$id_user = "";
		}
		else{
			$id_user = "WHERE a.id_user = '$id_user'";
		}
        $aColumns = array('id_kontes', 'nama_kontes' ,'deskripsi_kontes', 'hadiah', 'nama_lengkap','add_data');
        
        $sIndexColumn = "id_kontes";
        
        // paging
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ){
            $sLimit = "LIMIT ".mysql_real_escape_string( $_GET['iDisplayStart'] ).", ".
                mysql_real_escape_string( $_GET['iDisplayLength'] );
        }
        $numbering = mysql_real_escape_string( $_GET['iDisplayStart'] );
        $page = 1;
        
        // ordering
        if ( isset( $_GET['iSortCol_0'] ) ){
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ){
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ){
                    $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
                        ".mysql_real_escape_string( $_GET['sSortDir_'.$i] ) .", ";
                }
            }
            
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" ){
                $sOrder = "";
            }
        }

        // filtering
        $sWhere = "";
        if ( $_GET['sSearch'] != "" ){
            $sWhere = "WHERE (";
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        
        // individual column filtering
        for ( $i=0 ; $i<count($aColumns) ; $i++ ){
            if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ){
                if ( $sWhere == "" ){
                    $sWhere = "WHERE ";
                }
                else{
                    $sWhere .= " AND ";
                }
                $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string($_GET['sSearch_'.$i])."%' ";
            }
        }
        
        $rResult = $this->member_model->ssp_contest_list($aColumns, $sWhere, $sOrder, $sLimit,$id_user);
        
        $iFilteredTotal = 10;
        
        $rResultTotal = $this->member_model->ssp_contest_list_total($sIndexColumn,$id_user);
        $iTotal = $rResultTotal->num_rows();
        $iFilteredTotal = $iTotal;
        
        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );
        
        foreach ($rResult->result_array() as $aRow){
            $row = array();
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                if ( $aColumns[$i] == "version" ){
                    /* Special output formatting for 'version' column */
                    $row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
                }
                else if ( $aColumns[$i] != ' ' ){
                    /* General output */
                    if($i < 1)
                        $row[] = $numbering+$page.'|'.$aRow[ $aColumns[$i] ];
                    else
                        $row[] = $aRow[ $aColumns[$i] ];
                }
            }
            $page++;
            $output['aaData'][] = $row;
        }
        
        echo json_encode( $output );
    }
	
	function ssp_followed_contest_list(){
		$id_user = $this->uri->segment(3);
		
		$aColumns = array('id_kontes', 'nama_kontes' ,'deskripsi_kontes', 'hadiah', 'nama_lengkap','add_data');
        
        $sIndexColumn = "id_kontes";
        
        // paging
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ){
            $sLimit = "LIMIT ".mysql_real_escape_string( $_GET['iDisplayStart'] ).", ".
                mysql_real_escape_string( $_GET['iDisplayLength'] );
        }
        $numbering = mysql_real_escape_string( $_GET['iDisplayStart'] );
        $page = 1;
        
        // ordering
        if ( isset( $_GET['iSortCol_0'] ) ){
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ){
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ){
                    $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
                        ".mysql_real_escape_string( $_GET['sSortDir_'.$i] ) .", ";
                }
            }
            
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" ){
                $sOrder = "";
            }
        }

        // filtering
        $sWhere = "";
        if ( $_GET['sSearch'] != "" ){
            $sWhere = "WHERE (";
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        
        // individual column filtering
        for ( $i=0 ; $i<count($aColumns) ; $i++ ){
            if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ){
                if ( $sWhere == "" ){
                    $sWhere = "WHERE ";
                }
                else{
                    $sWhere .= " AND ";
                }
                $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string($_GET['sSearch_'.$i])."%' ";
            }
        }
        
        $rResult = $this->member_model->ssp_followed_contest_list($aColumns, $sWhere, $sOrder, $sLimit,$id_user);
        
        $iFilteredTotal = 10;
        
        $rResultTotal = $this->member_model->ssp_followed_contest_list_total($sIndexColumn,$id_user);
        $iTotal = $rResultTotal->num_rows();
        $iFilteredTotal = $iTotal;
        
        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );
        
        foreach ($rResult->result_array() as $aRow){
            $row = array();
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                if ( $aColumns[$i] == "version" ){
                    /* Special output formatting for 'version' column */
                    $row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
                }
                else if ( $aColumns[$i] != ' ' ){
                    /* General output */
                    if($i < 1)
                        $row[] = $numbering+$page.'|'.$aRow[ $aColumns[$i] ];
                    else
                        $row[] = $aRow[ $aColumns[$i] ];
                }
            }
            $page++;
            $output['aaData'][] = $row;
        }
        
        echo json_encode( $output );
    }
	
	function follow_contest(){
		$this->load->library('upload');
		$form_data = str_replace("%5B%5D","[]",$this->input->post('formdata'));
		parse_str($form_data, $post);
		
		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'mp3';
		$config['max_size']	= '5000';
		$config['file_name'] = time().'.mp3';
		
		$this->upload->initialize($config);
		$data = $this->upload->data();
		$file_name = 'uploads/'.$data['file_name'];
		if(!$this->upload->do_upload('photo_path')){
			$status = 'error';
			$msg = $this->upload->display_errors('', '');
		}else{
		 $in = array(
				 'id_kontes' => $post['id_kontes'],
				 'id_user' => $this->session->userdata('id_user'),
				 'path_musik' => $file_name
			 );
		 if($this->member_model->tr_kontes_detil_insert($in)){
			$status = 'success';
            $msg = 'Upload success.';
		 }
		 else{
			 $status = 'error';
             $msg = 'Fatal Error!';
		 }
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	
	function edit_follow_contest(){
		// $this->load->library('upload');
		// $form_data = str_replace("%5B%5D","[]",$this->input->post('formdata'));
		// parse_str($form_data, $post);
		
		// $config['upload_path'] = 'uploads';
		// $config['allowed_types'] = 'mp3';
		// $config['max_size']	= '5000';
		// $config['file_name'] = time().'.mp3';
		
		// $this->upload->initialize($config);
		// $data = $this->upload->data();
		// $file_name = 'uploads/'.$data['file_name'];
		// if(!$this->upload->do_upload('photo_path')){
			// $status = 'error';
			// $msg = $this->upload->display_errors('', '');
		// }else{
		 // $in = array(
				 // 'id_kontes' => $post['id_kontes'],
				 // 'id_user' => $this->session->userdata('id_user'),
				 // 'path_musik' => $file_name
			 // );
		 // if($this->member_model->tr_kontes_detil_insert($in)){
			// $status = 'success';
            // $msg = 'Upload success.';
		 // }
		 // else{
			 // $status = 'error';
             // $msg = 'Fatal Error!';
		 // }
		// }
		// echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	
	function list_lagu(){
		$id_kontes = $this->uri->segment(3);
		$data['rows']= $this->member_model->get_lagu($id_kontes);
        $data['main_content'] = 'lagumurni/content/list_lagu_view';
        $this->load->view('lagumurni/template', $data);
	}

	function set_winner(){
		if (isset($_POST['id'])) {
				
			$id = $this->input->post('id'); 
			$q  = $this->member_model->set_winner($id);    
			
		}}
}