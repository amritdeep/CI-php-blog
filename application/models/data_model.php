<?php
class Data_model extends CI_Model{

	// QUERY WITH SQL
	/*
	function getAll(){
		$query = $this->db->query("SELECT * FROM data");

		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	*/	

	// QUERY WITH ACTIVE RECORD
	function getAll(){
		$query = $this->db->get('data');

		if($query->num_rows > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
				# code...
			}
			return $data;
		}
	}

	/*
	// SPECIFIC QUYER
	function getAll(){
		$this->db->SELECT('title', 'content');
		$query = $this->db->get('data');

		if($query->num_rows > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}

	}
	

	function getAll(){
		$sql = "SELECT title, content, author FROM data WHERE id = ? AND author = ?";
		$query = $this->db->query($sql, array(3, 'suraj'));

		if($query->num_rows > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	

	function getAll(){
		$this->db->select('title', 'content');
		$this->db->from('data');
		$this->db->where('id', 2);

		$query = $this->db->get();

		if($query->num_rows > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	*/

}

?>