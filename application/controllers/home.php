<?php
class Home extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
		$this->load->model('project_model');
		// error_reporting(0);
    }
    
    function index(){
		$data['logged_in'] = TRUE;
		$data['option_value'] = $this->get_select_value('id_genre','ASC','tm_genre');
		if(!$this->session->userdata('logged_in'))
        {
            $data['logged_in'] = FALSE;
        }
		$this->load->view('lagumurni/content/home',$data);
    }
	
	function get_all()
    {
        $orderById   = 'id_genre';
        $sortingType = 'DESC';
        $dbName      = 'tm_genre';
        $data        = $this->project_model->get_all_data($orderById, $sortingType, $dbName);
        
        return $data;
    }
	
	function insert_data(){
		
		$first_letter  = date('Ymd');
		$id_user = $this->session->userdata('id_user');
		
		$id_name = 'id_kontes';
		$table_name = 'tt_kontes';
		$digit_count = 2;
		$id = $this->project_model->make_id($first_letter, $id_name, $table_name, $digit_count);
		
		
		$data = array(
        'id_kontes' => $id,
        'id_user'=> $id_user,
        'nama_kontes' => $this->input->post('nama_kontes'),
        'deskripsi_kontes' => $this->input->post('area'),
        'tanggal_kontes' => $this->input->post('tanggal_mulai'),
        'tanggal_tutup' => $this->input->post('tanggal_selesai'),
		'mata_uang' => $this->input->post('mata_uang'),
		'hadiah' => $this->input->post('hadiah')
        );
        
        $table = 'tt_kontes';
        $this->project_model->insert_data($table,$data);
		
		//--------------code for insert tr_genre
		$genre = $this->input->post('genre');
		$array_length = count($genre);
		
		for ($i=0;$i<$array_length;$i++){
			
			$data2 = array(
	        'id_kontes' => $id,
	        'id_genre' => $genre[$i]
	        );

        	$table2 = 'tr_genre';
			$this->project_model->insert_data($table2,$data2);
		}
		
    }
	
	function update_data(){
       
          $data=array(
            'id_genre' => $this->input->post('id_genre'),
	        'genre' => $this->input->post('genre'),
	        'deskripsi' => $this->input->post('deskripsi')  
          );
          
          $tb_name = 'tm_genre';
          $id_param = 'id_genre';
          $param_val = $data['id_genre'];
          
          $q = $this->project_model->update_data($id_param,$param_val,$tb_name,$data);     
          echo $q;
	}
	
	 function delete_data(){
       
         $id=$this->uri->segment(3);
         $tb_name = 'tm_genre';
         $id_param = 'id_genre';
         $param_val = $id;
         $this->project_model->delete_data($id_param,$param_val,$tb_name);
         
         $this->index();
     }
	
	
	function get_data_id(){
		
		if (isset($_POST['id'])) {
          $x = $this->input->post('id');    
          $db_name = 'tm_genre';
          $id_param = 'id_genre';
          $param_value = $x;
          
          $data = $this->project_model->get_data_update($db_name, $id_param, $param_value);
          
          echo json_encode($data);
       }
	}
	
	 function table(){
     	
          $data['rows'] = $this->get_all();
          $this->load->view('table_genre' , $data);
     }
	 
	 function get_default_pic(){
			
		$table_name = 'tm_genre';
		$id_name = 'id_genre';
		$id_value = 'G001';
		$the_data = 'path';
		$data = $this->project_model->get_one_data($table_name, $id_name, $id_value, $the_data);
		
		return $data;
	}
	 
	 function get_select_value($param1,$param2,$param3)
    {
        $order_by_id   = $param1;
        $sorting_type = $param2;
        $table_name     = $param3;
        $data        = $this->project_model->get_data_select($order_by_id, $sorting_type, $table_name);
        
        return $data;  
	}
	
	function list_kontes_by_genre(){
		$data['id_genre'] = $this->input->post('id_genre');
        $this->load->view('lagumurni/content/list_kontes_by_genre',$data);
	}
	
	function get_data_id_kontes(){
		
		if (isset($_POST['id'])) {
          $x = $this->input->post('id');    
          $db_name = 'tt_kontes';
          $id_param = 'id_kontes';
          $param_value = $x;
          
          $data = $this->project_model->get_data_update($db_name, $id_param, $param_value);
          
          echo json_encode($data);
       }
	}
	
}


?>