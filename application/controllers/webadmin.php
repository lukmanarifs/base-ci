<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webadmin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in'))
        {
            redirect('home');
        }
        $this->load->model('project_model');
        $this->load->model('webadmin_model');
    }
    
	public function index()
	{
	    $data = array(
            'main_content' => 'webadmin/includes/content',
            'current' => 'Home'
        );
        
            $this->load->view('webadmin/template',$data);
        
	}
	// User List
	function users_list(){
		$data = array(
            'main_content' => 'webadmin/content/users_list_view',
			'table' => 'webadmin/content/table_users_list_view',
			'rows' => $this->get_all('id_user','DESC','tm_user'),
            'current' => 'User List'
        );
		$this->load->view('webadmin/template',$data);
	}
	
	function edit_userdata(){
		$data = array(
            'main_content' => 'webadmin/content/edit_userdata_view',
			'id_user' => $this->uri->segment(3),
			'current' => 'Edit User Data'
        );
		$this->load->view('webadmin/template',$data);
	}
	
	function update_user(){
		$in = array(
			'id_user' => $this->input->post('id_user'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat_email' => $this->input->post('alamat_email'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'negara' => $this->input->post('negara'),
			'no_hp' => $this->input->post('no_hp'),
			'user_status' => $this->input->post('status')
        );
		if($this->webadmin_model->tm_user_update($in)){
            $status = 'success';
            $msg = 'Data have been updated!';
        }
        else{
            $status = 'error';
            $msg = 'Fatal Error!';
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	
	// Genre List
	function genre_list(){
		$data = array(
            'main_content' => 'webadmin/content/genre_list_view',
			'table' => 'webadmin/content/table_genre_list_view',
			'rows' => $this->get_all('id_genre','DESC','tm_genre'),
			'current' => 'Genre List'
        );
		$this->load->view('webadmin/template',$data);
	}
	
	// Get All Data
	function get_all($param1,$param2,$param3)
    {
        
        $orderById   = $param1;
        $sortingType = $param1;
        $dbName      = $param3;
        $data        = $this->project_model->get_all_data($orderById, $sortingType, $dbName);
        
        return $data;
    }
	
	function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */