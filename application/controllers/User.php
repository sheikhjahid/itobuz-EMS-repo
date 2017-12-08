<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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

	public function login()
	{
		if(!$this->session->set_userdata('user_details'))
		{

		    $this->load->view("login");
		
		}
		else
		{
			redirect('user/authentication');
		}

		
	}

	public function dashboard()
	{
		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error',"USERNAME AND PASSWORD DO NO MATCH");
			redirect('login');
			die();
		}

		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;
     	$this->load->view("dashboard",$data);
	
	}

	public function authentication()
	{
		$post_arr=$this->input->post();

		$username=$post_arr['username'];
		$password=md5($post_arr['password']);

		$user_details=$this->user_model->checkUser($username,$password);
		
		if(count($user_details))
		{
			$args['id']=$user_details->id;
			$args['fullname']=$user_details->fullname;
			$this->session->set_userdata('user_details',$args);

			redirect('user/dashboard');
			die();

		}
		else
		{
			$this->session->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();

		}

		//redirect('user/dashboard');
	}

	public function logout()
	{
		$this->session->sess_destroy('user_details');
		redirect('login');
		
	}

	public function showTeam()
	{

		if(!$this->session->userdata('user_details'))
		{

			$this->session->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();

		}//end of if

		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;
		$data['row']=$this->user_model->showTeamData();
		$this->load->view("team_table",$data);

	}//end of function

	


}//end of model class
