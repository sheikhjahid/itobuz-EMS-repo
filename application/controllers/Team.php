<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

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
	}//end of function
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
		$data['row']=$this->user_model->showData(1,'team');
		$this->load->view("team_table",$data);

	}//end of function


	public function insertTeam()
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

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$post=$this->input->post();
			unset($post['insert_Team_Data']);
			$query=$this->user_model->insertData('team',$post);
			if($query==1)
			{
				$this->session->set_flashdata('insert_msg','USER TEAM INSERTED SUCCESSFULLY ');
				redirect('team/showTeam',$data);
				die();
			}
		}

		$this->load->view('insertTeam',$data);
	}//end of function

	
	public function viewSpecificTeam($id)
	{

		if(!$this->session->userdata('user_details'))
		{

			$this->session->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();

		}//end of if

		$status=1;
		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;

		$data['row']=$this->user_model->viewData($id,$status,'team');
		$this->load->view('viewTeam',$data);

	}//end of function

	public function updateTeam($id)
	{

		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();
		}//end of if
		$status=1;
		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;
        $data['row']=$this->user_model->viewData($id,$status,'team');
        $this->load->view('updateTeam',$data);
        if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$post=$this->input->post();
			unset($post['updateData']);
			$query=$this->user_model->updateData($id,$post,'team');
			if($query==1)
			{
				$this->session->set_flashdata('update_msg','USER TEAM UPDATED SUCCESSFULLY ');
				redirect('team/showTeam',$data);
				die();
			}
		}

	}//end of function

 	

 	public function delete($id)
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

 		$post=$this->input->post();
 		$post['status']=0;
 		unset($post['delete_Team_Data']);
 		$query=$this->user_model->updateData($id,$post,'team');
 		if($query==1)
 		{

 			$this->session->set_flashdata('delete_msg','User Team Deleted Successfully ');
 			redirect('team/showTeam');
 			die();

 		}

 	}//end of function

}//end of class
?>
