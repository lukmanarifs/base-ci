<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    // Login Module
    function login_check($username, $password)
    {
        $password = md5($password);
        $query = $this->db->query("
            SELECT *
            FROM tm_user
            WHERE username = ? 
            AND password = ?
	    ", array($username, $password));
	    
		return $query;
    }
}