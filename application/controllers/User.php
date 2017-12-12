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
		
	}//end of function


	public function register()
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

        $data['team_list']=$this->user_model->get_Data('team'); 
        $data['role_list']=$this->user_model->get_Data('role'); 
		$this->load->view('register',$data);
		
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$post=$this->input->post();
			//unset($post['insert_Team_Data']);

			$query=$this->user_model->insertData('users',$post);
			if($query==1)
			{
				$this->session->set_flashdata('insert_msg','USER REGISTERED SUCCESSFULLY');
				redirect('user/showUserData',$data);
				die();
			}//end of  inner if
		}//end of outer if

		$password=md5($this->input->post('fullname'));
		 $from_email = "your@example.com"; 
         $to_email = $this->input->post('email'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Password for log-in'); 
         $this->email->message('Your password has been created for logging into your account'); 
   
         //Send mail 
         if($this->email->send())
         {
         	$this->session->set_flashdata("email_sent","Email sent successfully.");	
         } 
          
         else
         {

         	$this->session->set_flashdata("email_sent","Error in sending Email.");	
         } 
          
         //$this->load->view('email_form'); 


	}//end of function

	public function showUserData()
	{

		if(!$this->session->userdata('user_details'))
		{

			$this->session->set_flashhdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();

		}//end of if

		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;
		$data['row']=$this->user_model->showData(1,'users');
		$this->load->view('showUser',$data);

	}//end of function

	

}//end of model class
