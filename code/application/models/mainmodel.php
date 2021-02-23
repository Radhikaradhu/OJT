<?php

 class mainmodel extends CI_model
 {
 	
 	public function regist($a)
 	{
 		$this->db->insert("register",$a);
 	}
 	public function enpswrd($pas)
 	{
 		return password_hash($pas, PASSWORD_BCRYPT);
 	}
 	public function view()
 	{
 		$this->db->select('*');
 		$qry=$this->db->get("register");
 		return $qry;
 	}
 	public function singledata($id)
 	{
 		$this->db->select('*');
 		$this->db->where("id",$id);
 		$qry=$this->db->get("register");
 		return $qry;
 	}
 	public function singleselect()
 	{
 		$qry=$this->db->get("register");
 		return $qry;
 	}
 	public function updatedetails($a,$id)
 	{
 		$this->db->select('*');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("register",$a);
 		return $qry;
 	}
 	public function deletedetails($id)
 	{
 		
 		$this->db->where("id",$id);
 		$this->db->delete("register");
 		
 	}
 
 public function viewdata()
 	{
 		$this->db->select('*');
 		$qry=$this->db->get("register");
 		return $qry;
 	}
 	public function approved($id)
 	{
 	
        $this->db->set('status','1');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("register");
 		return $qry;
 	}
 	public function rejected($id)
 	{
 		$this->db->set('status','2');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("register");
 		return $qry;
 		
 	}
 	public function formview()
 	{

 	}
 	public function selectpass($pas,$email)
 	{
 		$this->db->select('password');
 		$this->db->from("register");
 		$this->db->where("email",$email);
 		$qry=$this->db->get()->row('password');
 		return $this->verifypass($pas,$qry);
 	}
 	public function verifypass($pas,$qry)
{
	return password_verify($pas,$qry);

 	}
 	public function getuserid($email)
 	{
 		$this->db->select('id');
 		$this->db->from("register");
 		$this->db->where("email",$email);
 		return $this->db->get()->row('id');
 	}
 	public function getuser($id)
 	{
 		$this->db->select('*');
 		$this->db->from("register");
 		$this->db->where("id",$id);
 		return $this->db->get()->row();
 		

 	}
 	public function regview($a,$b)
 	{
 		$this->db->insert("log",$b);
 		$loginid=$this->db->insert_id();
 		$a['loginid']=$loginid;
 		$this->db->insert("login",$a);
 	}
 		public function enpswrds($pass)
 	{
 		return password_hash($pass, PASSWORD_BCRYPT);
 	}


 	public function views()
 	{
 		$this->db->select('*');
 		$qry=$this->db->join('log','log.id=login.loginid','inner');
 		$n=$this->db->get("login");
 		return $n;

 	}
 	public function approved1($loginid)
 	{
 	
        $this->db->set('status','1');
 		$qry=$this->db->where("id",$loginid);
 		$qry=$this->db->update("log");
 		return $qry;
 	}
 	public function rejected1($loginid)
 	{
 		$this->db->set('status','2');
 		$qry=$this->db->where("id",$loginid);
 		$qry=$this->db->update("log");
 		return $qry;
 		
 	}
 	public function teacherview($a,$b)
 	{
 		$this->db->insert("log",$b);
 		$loginid=$this->db->insert_id();
 		$a['loginid']=$loginid;
 		$this->db->insert("teacherslogin",$a);
 	}
 		public function enpswrdsd($pass)
 	{
 		return password_hash($pass, PASSWORD_BCRYPT);
 	}


 	public function viewed()
 	{
 		$this->db->select('*');
 		$qry=$this->db->join('log','log.id=teacherslogin.loginid','inner');
 		$n=$this->db->get("teacherslogin");
 		return $n;

 	}
 	public function studlog()
 	{

 	}
 	public function selectpassed($email,$pass)
 	{
 		$this->db->select('password');
 		$this->db->from("log");
 		$this->db->where("email",$email);
 		//echo"$pass";exit;
 		$qry=$this->db->get()->row('password');
 		return $this->verifypass($pass,$qry);
 	}
 	public function verifypassed($pass,$qry)
{
	return password_verify($pass,$qry);

 	}
 	public function getuseridd($email)
 	{
 		$this->db->select('id');
 		$this->db->from("log");
 		$this->db->where("email",$email);
 		return $this->db->get()->row('id');
 	}
 	public function getusers($id)
 	{
 		$this->db->select('*');
 		$this->db->from("log");
 		$this->db->where("id",$id);
 		return $this->db->get()->row();
 		

 	}
public function updates($id)
 	{
 		$this->db->select('*');
 		$n=$this->db->join('log','login.loginid=log.id','inner');
 		$n=$this->db->where('login.loginid',$id);
 		$n=$this->db->get("login");
 		return $n;

 	}
 	public function updatesdetalis($a,$b,$id)
 	{
 		$this->db->select('*');
 		$n=$this->db->where("loginid",$id);
 		$n=$this->db->join('log','login.loginid=log.loginid','inner');
 		$n=$this->db->update("login",$a);
 		$n=$this->db->where("id",$id);
 		$n=$this->db->update("log",$b);

 	}
public function noti($a)
 	{
 		$this->db->insert("notifications",$a);
 	}
 	public function notiview()
 	{

 	}
 	public function notviewed()
 	{
 		$this->db->select('*');
 		$n=$this->db->join('teacherslogin','teacherslogin.loginid=notifications.loginid','inner');
 		$n=$this->db->get("notifications");
 		return $n;
 	}
 	public function notidelete()
 	{
 		$this->db->select('*');
 		$n=$this->db->get("notifications");
 		return $n;
 	}
 	public function deletedetail($id)
 	{
 		
 		$this->db->where("id",$id);
 		$this->db->delete("notifications");


}
 		
 	
 	
}