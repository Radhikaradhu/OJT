<?php

 class mainmodel extends CI_model
 {
 	
 public function view()
 	{
 		$this->db->select('*');
 		$qry=$this->db->get("register");
 		return $qry;
 	}	
 	public function update($a,$id)
 	{
 		$this->db->select('*');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("register",$a);
 		return $qry;
 	}
 ?>