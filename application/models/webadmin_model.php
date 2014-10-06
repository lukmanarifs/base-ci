<?php
Class Webadmin_model extends CI_Model{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
		
	function tm_user_select_by_id($id_user){
		$query = $this->db->query("
			SELECT * FROM tm_user a WHERE a.id_user = ?
        ", array($id_user));
        
        return $query;
	}
	
	function tm_user_update($in){
        $query = $this->db->update('tm_user',$in,array('id_user' => $in['id_user']));
        
        return $query;
    }
}