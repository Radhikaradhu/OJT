<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('new');
	}
	public function viewprofile()
	{
		
		$this->load->view('viewprofile');
	}
	public function courseview()
	{
		
		$this->load->view('courseview');
	}
	public function reg()
	{
		
		$this->load->view('reg');
	}
public function regaction()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","fname",'required');
		$this->form_validation->set_rules("lname","lname",'required');
		$this->form_validation->set_rules("uname","uname",'required');
		$this->form_validation->set_rules("mobile","mobile",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post('password');
			$encpass=$this->mainmodel->encpaswd($pass);
			$a=array("fname"=>$this->input->post("fname"),
					 "lname"=>$this->input->post("lname"),
					 "uname"=>$this->input->post("uname"),
					 "mobile"=>$this->input->post("mobile"),
			         "email"=>$this->input->post("email"),
					 "password"=>$encpass);
					 $this->mainmodel->regaction($a);
					 redirect(base_url().'main/reg');

		}
	
	}
public function aprv()
	      {
		$this->load->model('mainmodel');
	    $data['n']=$this->mainmodel->aprv();
		$this->load->view('aprv',$data);
	   }
// 	  
public function approval()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->approved($id);
	redirect('main/aprv','refresh');
}
public function reject()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->rejected($id);
	redirect('main/aprv','refresh');
}
public function login()
	{
		
$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->login();
		$this->load->view('login',$data);
}
public function fo()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$email=$this->input->post("email");
			$pas=$this->input->post("password");
			$rslt=$this->mainmodel->selectpass($email,$pas);
			if($rslt)
			{
				$id=$this->mainmodel->getuserid($email);
				$user=$this->mainmodel->getuser($id);
				$this->load->library(array('session'));
				$this->session->set->userdata(array('id'=>(int)$user->id,'status'=>$user->status));
				if($_SESSION['status']=='1')
				{
					redirect(base_url().'main/reg');
				}
				else
				{
					echo "waiting for approval ";
				}
		    }
			else
			{
				echo"invalid user";
			}
	   }
		else
		{
			
		redirect('main/login','refresh');
		}
				}
			}


	
				
			
	
