<?php
class Homes_model extends CI_Model{ 

	public function get_pu($pu_id = NULL)
	{
		//Get polling unit with polling unit id as parameter if available
		if($pu_id)
		{
			$this->db->where('uniqueid',$pu_id);
		}
		$query = $this->db->get('polling_unit');
	        return $query->result_array();
	}

	public function get_pu_result($pu_id)
		{
			//Get polling unit result
			$this->db->where('polling_unit_uniqueid',$pu_id);
			$query = $this->db->get('announced_pu_results');
		        return $query->result_array();
		}

	public function get_lga($lga_id = NULL)
	{
		//Get LGA by id(if available)
		if($lga_id)
		{
			$this->db->where('uniqueid',$lga_id);
		}
		$query = $this->db->get('lga');
	        return $query->result_array();
	}

	public function get_lga_pu($lga_id)
	{
		//Get LGA polling units
		$this->db->where('lga_id',$lga_id);
		$query = $this->db->get('polling_unit');
	        return $query->result_array();
	}

	public function get_lga_pu_total($pu_id)
	{
		//Get lga polling unit total score
		$this->db->select_sum('party_score');
		$this->db->where('polling_unit_uniqueid',$pu_id);
		$query = $this->db->get('announced_pu_results');
	        return $query->result_array();
	}
	
}
?>