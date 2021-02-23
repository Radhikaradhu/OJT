<?php

 class mainmodel extends CI_model
 {
 	
 	public function regaction($a)

	{
	
		$this->db->insert("regs",$a);
	}
	
	public function encpaswd($pass)

	{
		
		return password_hash($pass,PASSWORD_BCRYPT);
	
	}

public function aprv()
	{
		$this->db->select('*');
		$qry=$this->db->get("regs");
		return $qry;
	}
	
       public function approved($id)
 	{
 	
        $this->db->set('status','1');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("regs");
 		return $qry;
 	}
 	public function rejected($id)
 	{
 		$this->db->set('status','2');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("regs");
 		return $qry;
 		
 	}
 	public function formview()
 	{

 	}
 	public function selectpass($pas,$email)
 	{
 		$this->db->select('password');
 		$this->db->from("regs");
 		$this->db->where("email",$email);
 		$qry=$this->db->get()->row('password');
 		return $this->verifypass($pas,$qry);
 	}
 	public function login()
 	{

 	}
 	public function verifypass($pas,$qry)
{
	return password_verify($pas,$qry);

 	}
 	public function getuserid($email)
 	{
 		$this->db->select('id');
 		$this->db->from("regs");
 		$this->db->where("email",$email);
 		return $this->db->get()->row('id');
 	}
 	public function getuser($id)
 	{
 		$this->db->select('*');
 		$this->db->from("regs");
 		$this->db->where("id",$id);
 		return $this->db->get()->row();
 		

 	}
 }
      
 ?> 	}
