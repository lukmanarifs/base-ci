<?php
class Registrasi extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
		$this->load->model('project_model');
		$this->load->model('registrasi_model');
		//error_reporting(0);
    }
    
    function index(){
        
		$data['rows'] = $this->get_all();
		$data['main_view'] = 'registrasi_view.php';
        $this->load->view('include/template.php',$data);
    }
	
	function get_all()
    {
        
        // $orderById   = 'id_user';
        // $sortingType = 'DESC';
        // $dbName      = 'tm_user';
        // $data        = $this->project_model->get_all_data($orderById, $sortingType, $dbName);
        
        // return $data;
    }
	
	function insert_data(){
		
        $data = array(
	    'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password')),
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'alamat_email' => $this->input->post('alamat_email'),
        'alamat' => $this->input->post('alamat'),
        'kota' => $this->input->post('kota'),
        'negara' => $this->input->post('negara'),
        'no_hp' => $this->input->post('no_hp'),
        'path_poto' => $this->input->post('path_poto')
        );
        
        $table = 'tm_user';
        if($this->project_model->insert_data($table,$data)){
			$status = 'success';
			$msg = 'Congratulations, You have registered to LaguMurni, please check your email to verified!';
		}
		else{
			$status = 'error';
			$msg = 'Fatal error!';
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	
	function update_data(){
       
          $data=array(
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat_email' => $this->input->post('alamat_email'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'negara' => $this->input->post('negara'),
			'no_hp' => $this->input->post('no_hp'),
			'path_poto' => $this->input->post('path_poto') 
          );
          
          $tb_name = 'tm_user';
          $id_param = 'id_user';
          $param_val = $data['id_user'];
          
          $q = $this->project_model->update_data($id_param,$param_val,$tb_name,$data);     
          echo $q;
	}
	
	 function delete_data(){
       
		 
         $id=$this->uri->segment(3);
         $tb_name = 'tm_user';
         $id_param = 'id_user';
         $param_val = $id;
         $this->project_model->delete_data($id_param,$param_val,$tb_name);
         
         $this->index();
		 
     }
	
	
	function get_data_id(){
		
		if (isset($_POST['id'])) {
          $x = $this->input->post('id');    
          $db_name = 'tm_user';
          $id_param = 'id_user';
          $param_value = $x;
          
          $data = $this->project_model->get_data_update($db_name, $id_param, $param_value);
          
          echo json_encode($data);
       }
		
	}
	
	 function table(){
     	
          // $data['rows'] = $this->get_all();
          // $this->load->view('table_kriteria' , $data);
		   
     }
	
	
       
}


?>