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
		$data['row']=$this->user_model->showData(1,'role');
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


		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$post=$this->input->post();
			unset($post['insert_Role_Data']);
			$query=$this->user_model->insertData('role',$post);
			if($query==1)
			{
				$this->session->set_flashdata('insert_msg','USER ROLE INSERTED SUCCESSFULLY ');
				redirect('role/showRole',$data);
				die();
			}
		}
		$this->load->view('insertRole',$data);

	}//end of function 

	
	public function viewSpecificRole($id)
	{

		if(!$this->session->userdata('user_details'))
		{
			$this->session->set_flashdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
			redirect('login');
			die();
		}//end  of if
	
		$userdata=$this->session->userdata('user_details');
		$data=array();
		$data=$userdata;
		$status=1;

		$data['row']=$this->user_model->viewData($id,$status,'role');
		$this->load->view('viewRole',$data);

	}//end of function

	public function updateRole($id)
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
		$status=1;
		$data['row']=$this->user_model->viewData($id,$status,'role');
        $this->load->view('updateRole',$data);
        if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$post=$this->input->post();
			unset($post['updateData']);
			$query=$this->user_model->updateData($id,$post,'role');
			if($query==1)
			{
				$this->session->set_flashdata('update_msg','USER ROLE UPDATED SUCCESSFULLY ');
				redirect('role/showRole',$data);
				die();
			}//end of if
		}//end of if
		
	}//end of function


	public function deleteRole($id)
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
		unset($post['delete_Role_Data']);
		$query=$this->user_model->updateData($id,$post,'role');
		if($query==1)
		{

			$this->session->set_flashdata('delete_msg','User Role Deleted Successfully');
			redirect('role/showRole');
			die();

		}//end of if

	}//end of function

}//end of class
?>