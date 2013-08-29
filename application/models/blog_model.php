<?php
class Blog_model extends CI_Model {

	function getAll(){
		$query = $this->db->get('test');

		if($query->num_row() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
			return $data;

		}
	}
}

?>