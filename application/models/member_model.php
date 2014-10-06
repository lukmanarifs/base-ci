<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Member_model extends CI_Model{
          
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
		
    function ssp_contest_list($aColumns, $sWhere, $sOrder, $sLimit,$id_user)
    {
        $query = $this->db->query("
			SELECT * FROM (
                SELECT a.*,
				b.nama_lengkap,
				(
				SELECT CONCAT_WS('|',a.id_user,
							(SELECT GROUP_CONCAT(q.genre SEPARATOR ', ') FROM tr_genre p JOIN tm_genre q ON q.id_genre = p.id_genre WHERE id_kontes = a.id_kontes),
							(SELECT COUNT(*) FROM tr_kontes_detil WHERE id_kontes = a.id_kontes),
							DATE_FORMAT(a.tanggal_kontes, '%d/%b/%Y'),
							DATE_FORMAT(a.tanggal_tutup, '%d/%b/%Y')
						)
				) 
				add_data
				FROM tt_kontes a 
				JOIN tm_user b ON b.id_user = a.id_user
				$id_user
            ) A
            $sWhere
            $sOrder
            $sLimit
        ");
        
        return $query;
    }
	
	function ssp_contest_list_total($sIndexColumn,$id_user){
            $query = $this->db->query("
            SELECT $sIndexColumn
            FROM (
                SELECT a.id_kontes
				FROM tt_kontes a 
				JOIN tm_user b ON b.id_user = a.id_user
				$id_user
            ) A
        ");
        
        return $query;
    }
	
	function ssp_followed_contest_list($aColumns, $sWhere, $sOrder, $sLimit,$id_user)
    {
        $query = $this->db->query("
			SELECT * FROM (
                SELECT c.nama_lengkap,b.*, 
				(
				SELECT CONCAT_WS('|',b.id_user,
							(SELECT GROUP_CONCAT(q.genre SEPARATOR ', ') FROM tr_genre p JOIN tm_genre q ON q.id_genre = p.id_genre WHERE id_kontes = b.id_kontes),
							(SELECT COUNT(*) FROM tr_kontes_detil WHERE id_kontes = b.id_kontes),
							DATE_FORMAT(b.tanggal_kontes, '%d/%b/%Y'),DATE_FORMAT(b.tanggal_tutup, '%d %M %Y')
						)
				) 
				add_data
				FROM tr_kontes_detil a 
				JOIN tt_kontes b ON b.id_kontes = a.id_kontes
				JOIN tm_user c ON c.id_user = b.id_user
				WHERE a.id_user ='$id_user'
            ) A
            $sWhere
            $sOrder
            $sLimit
        ");
        
        return $query;
    }
	
	function ssp_followed_contest_list_total($sIndexColumn,$id_user){
            $query = $this->db->query("
            SELECT $sIndexColumn
            FROM (
                SELECT b.id_kontes
				FROM tr_kontes_detil a 
				JOIN tt_kontes b ON b.id_kontes = a.id_kontes
				JOIN tm_user c ON c.id_user = b.id_user
				WHERE a.id_user ='$id_user'
            ) A
        ");
        
        return $query;
    }
	
	function tr_kontes_detil_insert($in){
		$query = $this->db->insert('tr_kontes_detil',$in);
        
        return $query;
	}
	
	 function get_lagu($id_kontes){
		 	$q= $this->db->query("SELECT a.*, b.nama_lengkap 
		 	FROM tr_kontes_detil a 
		 	JOIN tm_user b 
		 	ON a.id_user = b .id_user 
		 	WHERE a.id_kontes = '$id_kontes'");
			
			 foreach ($q->result() as $row) {
                    $data[] = $row;
                }
             return $data;
        }
	   
function set_winner($id){
	   	$q= $this->db->query("UPDATE tr_kontes_detil SET status_winner = 1 WHERE idt_kontes = $id");
			
	   }
}