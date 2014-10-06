<?php
Class Project_model extends CI_Model{
          
      function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }
		
       function get_all_data($orderById, $sortingType,$dbName){
		 	$this->db->order_by($orderById, $sortingType);
            $q = $this->db->get($dbName);
            foreach ($q->result() as $row) {
                    $data[] = $row;
                }
                return $data;
        }
	   function insert_data($insert_db, $data) 
        {   
            $this->db->db_select();	
            $this->db->insert($insert_db, $data);
            
            if ($this->db->trans_status() === FALSE)
            {
                $data = "gagal";
            }else{
                $data = "sukses";
            }
            return $data;
            
        }   
		
		 function get_data_update($db_name, $id_param, $param_value){
        
            $q= $this->db->get_where($db_name, array($id_param=> $param_value));
            //return $q->result();
            //if($q->num_rows() > 0) {
                foreach ($q->result() as $row) {
                    $data[] = $row;
                }
                return $data;
        }
		
		 function get_data_update2($param_value){
        
            $q= $this->db->query("SELECT id_genre, genre, deskripsi FROM tm_genre WHERE id_genre = '$param_value' ");
            //return $q->result();
            //if($q->num_rows() > 0) {
                foreach ($q->result() as $row) {
                    $data[] = $row;
                }
                return $data;
        } 
		 
		  function update_data($id_param, $param_val, $update_db ,$data){
            $this->db->where($id_param, $param_val);
            $this->db->update($update_db, $data);
            
            if ($this->db->trans_status() === FALSE)
            {
                $data = "gagal";
            }else{
                $data = "sukses";
            }
            return $data;
        }
		  
		  function delete_data($id_param, $param_val, $delete_db){
            
            $this->db->where($id_param, $param_val);
            $this->db->delete($delete_db);
            
            if ($this->db->trans_status() === FALSE)
            {
                $data = "gagal";
            }else{
                $data = "sukses";
            }
            echo $data;
        }   
		  
		  function get_generated_id($first_letter, $id_name, $table_name, $digit_count){
		  	
			$q = $this->db->query("select concat ('$first_letter', lpad(ifnull(max(substring($id_name, $digit_count))+1,1),$digit_count, '0')) as $id_name from $table_name");
		 	 foreach ($q->result() as $row) {
                    $data[] = $row;
                }
             return $data;
		  }
		   
		  function save_photo($id_name, $id_value, $fp, $table_name){
		  	
			$this->db->query("UPDATE $table_name SET path = '$fp' WHERE $id_name= '$id_value'");
		}
		  
		  function get_one_data($table_name, $id_name, $id_value, $the_data){
		  	
		  	$query = $this->db->get_where($table_name, array($id_name => $id_value));
			if ($query->num_rows() > 0)
			{
			   $row = $query->row(); 
			
			   $row->$the_data;
			 
			}
			return $row->$the_data;
		}
		  
		   function get_data_select($order_by_id, $sorting_type, $table_name){
                
                $this->db->order_by($order_by_id, $sorting_type);
                $data = $this->db->get($table_name); 
                return $data;
        } 
        
		function make_id($first_letter, $id_name, $table_name, $digit_count){
			
				$query = $this->db->query("SELECT * FROM $table_name WHERE $id_name like '%$first_letter%'");
				$r=$query->num_rows();
				if ($r==0){
					return $id = $first_letter.'01';
				}
				else {
					$query2 = $this->db->query("SELECT MAX($id_name)+1 as id FROM $table_name WHERE $id_name like '%$first_letter%'");
		 	 		$ret = $query2->row();
					return $ret->id;
					
				}
				
				
			
		}
		
		function tt_kontes_select_by_id_genre($id_genre){
			if($id_genre == "all"){
				$filter = "";
				$group = "GROUP BY a.id_kontes";
			}
			else{
				$filter = "WHERE b.id_genre = ?";
				$group = "";
			}
			$query = $this->db->query("
				SELECT a.*,b.id_genre,b.id_kontes,c.genre FROM tt_kontes a
				JOIN tr_genre b ON b.id_kontes = a.id_kontes
				JOIN tm_genre c ON c.id_genre = b.id_genre
				$filter $group
			", array($id_genre));
        
        return $query;
		}
    
}