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
	
	public function data()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->view();
		$this->load->view('data',$data);
}
	public function update()
{
	$a=array("name"=>$this->input->post("name"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"age"=>$this->input->post("age"),
		"email"=>$this->input->post("email"));
	$this->load->model('mainmodel');
	$id=$this->uri->segment(3);
	
}




		
	
	

	
				}
			
	
