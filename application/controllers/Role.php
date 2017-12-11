<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

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

	public function __construct()
	{
		// die('hiii');

		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{

	  $this->load->view("welcome_message");
	}
      
    public function showRole()
	{
		if(!$this->session->userdata('user_details'))
		{

			$this->session->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();

		}

		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;
		$data['row']=$this->user_model->showRoleData();
		$this->load->view('showRole',$data);

	}//end of function

	public function insertRole()
	{

		if(!$this->session->userdata('user_details'))
		{

			$this->sesiion->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();

		}
		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;
		$this->load->view('insertRole',$data);

	}//end of function 

	public function insert_action_Role()
	{

		if(!$this->session->userdata('user_details'))
		{

			$this->session->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();

		}

		$post=$this->input->post();
		unset($post['insert_Role_Data']);

		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;

		$query=$this->user_model->insert_Role_Data($post);
		if($query==1)
		{

			$this->session->set_flashdata('insert_msg','USER ROLE INSERTED SUCCESSFULLY ');
			redirect('role/showRole',$data);
			die();

		}


	}//end of function

}//end of class
?>