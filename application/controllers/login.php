<?php
class Login extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
		$this->load->model('project_model');
		$this->load->model('login_model');
		//error_reporting(0);
    }
    
   public function index()
	{
	    // if(isset($this->error_massage)){
	        // $data['error_massage'] = $this->error_massage;
	    // }
        // else {
            // $data['error_massage'] = '';
        // }
		// $data['logged_in'] = TRUE;
		// if(!$this->session->userdata('logged_in'))
        // {
            // $data['logged_in'] = FALSE;
        // }
		// $this->load->view('welcome_message',$data);
	}
	
	function login_check()
    {
        $query = $this->login_model->login_check($this->input->post('username'),$this->input->post('password'));
        
        if($query->num_rows() > 0)
        {
            $row = $query->row();
			$data = array(
				'username' => $this->input->post('username'),
				'id_user' => $row->id_user,
				'logged_in' => TRUE
			);  
			$this->session->set_userdata($data);
			$status = 'success';
			$msg = $row->role_id;
        }
        else
        {
            $status = 'error';
			$msg = "Username & password doesn't match";
        }
		echo json_encode(array('status' => $status, 'msg' => $msg));
    }   
	
	function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}


?>