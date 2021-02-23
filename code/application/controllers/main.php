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
	public function index1()
	{
		
		$this->load->view('new');
	}
	public function reg()
	{
		
		$this->load->view('register');
	}

	public function regist()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("pass","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pas=$this->input->post("pass");
			$enpass=$this->mainmodel->enpswrd($pas);
		$a=array("name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"gender"=>$this->input->post("gender"),
				"age"=>$this->input->post("age"),
				"email"=>$this->input->post("email"),
				"password"=>$enpass);
		$this->mainmodel->regist($a);

        redirect(base_url().'main/reg');

}

	}
	public function dataview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->view();
		$this->load->view('dataview',$data);
}
public function updatedetails()
{
	$a=array("name"=>$this->input->post("name"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"email"=>$this->input->post("email"));
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$data['user_data']=$this->mainmodel->singledata($id);
	                  $this->mainmodel->singleselect();
	                  $this->load->view('dataview',$data);
	                  if($this->input->post("update"))
	                  {
	                  	$this->mainmodel->updatedetails($a,$this->input->post("id"));
	                  	redirect('main/dataview','refresh');
	                   }

}
public function deletedetails()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->deletedetails($id);
	redirect('main/dataview','refresh');


}

public function viewdata()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewdata();
		$this->load->view('viewdata',$data);


}
public function approval()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->approved($id);
	redirect('main/viewdata','refresh');
}
public function reject()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->rejected($id);
	redirect('main/viewdata','refresh');
}
public function formview()
	{
		
$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->formview();
		$this->load->view('formview',$data);
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
					redirect(base_url().'main/action');
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
				}else
				{
			
					redirect('main/log','refresh');
				}
				}
   public function regview()
 	{
 		$this->load->view('regview');
 	}
 	public function regviews()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("firstname","firstname",'required');
		$this->form_validation->set_rules("lastname","lastname",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("phnno","phnno",'required');
		$this->form_validation->set_rules("dob","dob",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("highereducation","highereducation",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$enpas=$this->mainmodel->enpswrds($pass);
		$a=array("firstname"=>$this->input->post("firstname"),
			"lastname"=>$this->input->post("lastname"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"pincode"=>$this->input->post("pincode"),
				"phonenumber"=>$this->input->post("phnno"),
				"dob"=>$this->input->post("dob"),
				"gender"=>$this->input->post("gender"),
				"highereducation"=>$this->input->post("highereducation"));
				$b=array("email"=>$this->input->post("email"),
				"password"=>$enpas,
				"usertype"=>'1');
		$this->mainmodel->regview($a,$b);
		redirect(base_url().'main/regview');

				
}
}
public function formdata()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->views();
		$this->load->view('formdata',$data);			
}
public function approvals()
{
	$this->load->model('mainmodel');
	$loginid=$this->uri->segment(3);
	$this->mainmodel->approved1($loginid);
	redirect('main/formdata','refresh');
}
public function rejects()
{
	$this->load->model('mainmodel');
	$loginid=$this->uri->segment(3);
	$this->mainmodel->rejected1($loginid);
	redirect('main/formdata','refresh');
}
public function teacherview()
 	{
 		$this->load->view('teacherview');
 	}
 	public function teacherviews()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("phonenumber","phnno",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("subject","subject",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$pass=$this->input->post("password");
			$enpas=$this->mainmodel->enpswrdsd($pass);
		$a=array("name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"pincode"=>$this->input->post("pincode"),
				"phonenumber"=>$this->input->post("phonenumber"),
				"gender"=>$this->input->post("gender"),
				"age"=>$this->input->post("age"),
				"subject"=>$this->input->post("subject"));
				$b=array("email"=>$this->input->post("email"),
				"password"=>$enpas,
				"status"=>'1',
				"usertype"=>'0');
		$this->mainmodel->teacherview($a,$b);
		redirect(base_url().'main/teacherview');

				
}
}
public function teachersdata()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewed();
		$this->load->view('teachersdata',$data);			
}
public function studlog()
 	{
 		$this->load->view('studlog');
 	}

public function log_student()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("email","email",'required');
$this->form_validation->set_rules("password","password",'required');
if($this->form_validation->run())
{

$this->load->model('mainmodel');
$email=$this->input->post("email");
$pass=$this->input->post("password");
$rslt=$this->mainmodel->selectpassed($email,$pass);
//echo"$rslt";exit;
if($rslt)
{
$id=$this->mainmodel->getuseridd($email);
$user=$this->mainmodel->getusers($id);
$this->load->library(array('session'));
$this->session->set_userdata(array('id'=>$user->id,'status'=>$user->status,'usertype'=>$user->usertype));
if($_SESSION['status']=='1'&& $_SESSION['usertype']=='0')
{
redirect(base_url().'main/vlt');

}
elseif($_SESSION['status']=='1'&& $_SESSION['usertype']=='1')
{
redirect(base_url().'main/vls');

}
else{
echo "waiting for approval";
}
}
else{
echo "invalid user";
}
}
else
{
redirect('main/studlog','refresh');
}

}
public function pro()
 	{
 		$this->load->view('ttlog');
 	}
public function ttlog()
	{
		
		$this->load->model('mainmodel');
		$id=$this->session->id;
		//echo"$id";exit;
		$data['user_data']=$this->mainmodel->updates($id);
		$this->load->view('ttlog',$data);
	}
public function updates()
{
	$a=array("firstname"=>$this->input->post("firstname"),
		"lastname"=>$this->input->post("lastname"),
		"address"=>$this->input->post("address"),
		"district"=>$this->input->post("district"),
		"pincode"=>$this->input->post("pincode"),
		"phonenumber"=>$this->input->post("phnno"),
		"dob"=>$this->input->post("dob"),
		"gender"=>$this->input->post("gender"),
		"highereducation"=>$this->input->post("highereducation"));
	$b=array("email"=>$this->input->post("email"));
	$this->load->model('mainmodel');
	//$id=$this->uri->segment(3);
	//$data['user_data']=$this->mainmodel->singledata($id);
	                 // $this->mainmodel->singleselect();
	                  //$this->load->view('ttlog',$data);
	                  if($this->input->post("updates"))
	                  {
	                  	$id=$this->session->id;
	                  	$this->mainmodel->updatesdetalis($a,$b,$id);
	                  	redirect('main/ttlog','refresh');
	                   }

}
public function notification()
 	{
 		$this->load->view("notification");
 	}
 	public function noti()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules("notification","notification",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$id=$this->session->id;
		$a=array("notification"=>$this->input->post("notification"),
				"currentdate"=>date('y-m-d'),
				"loginid"=>$id);
				
		$this->mainmodel->noti($a);

        redirect(base_url().'main/notification');
    }
}
public function notis()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->notviewed();
		$this->load->view('notiview',$data);			
}

	public function notidelete()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->notidelete();
		$this->load->view('notidelete',$data);			
}
public function deletedetail()
{
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	$this->mainmodel->deletedetail($id);
	redirect('main/notidelete','refresh');

}
public function index()
	{
		
		$this->load->view('index');
}
public function vls()	{
		
		$this->load->view('vls');
}
public function vlt()
	{
		
		$this->load->view('vlt');
}
public function teachersview()
	{
		
		$this->load->view('teachersview');
}
	}