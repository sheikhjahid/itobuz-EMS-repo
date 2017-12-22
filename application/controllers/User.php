<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
            $this->load->view("login-new");
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
            $args['role_id']=$user_details->role_id;
            $args['team_id']=$user_details->team_id;
            $args['fullname']=$user_details->fullname;
            if($this->user_model->showPicture($user_details->id))
            {
                $args['user_image']=$this->user_model->showPicture($user_details->id);
            }
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

        
        
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $post=$this->input->post();
            $password=substr(strtolower(str_replace(' ','',$post['fullname'])),0,4);
            $password=$password.'@$#'.rand(0,1000);
            $post['password']=md5($password);


            unset($post['insert_Team_Data']);
            $query=$this->user_model->insertData('users',$post);
            if($query==1)
            {
                
                $this->session->set_flashdata('insert_msg','USER REGISTERED SUCCESSFULLY');
                $config = Array(        
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'jahid@itobuz.com',
                    'smtp_pass' => 'jahid@123',
                    'smtp_timeout' => '4',
                    'mailtype'  => 'html', 
                    'charset'   => 'iso-8859-1'
                );

                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");

                          

                    $message="<html><body><span>This is your password to access in to the portal: {$password}</span></body></html>";

                    $this->email->from('jahid@itobuz.com','Your account has been created!!');
                    $this->email->to($this->input->post['email']);
                    $this->email->Subject('PASSWORD CREATION CONFIRMATION');
                    $this->email->message($message);

                      if($this->email->send())
                      {
                        $this->session->set_flashdata('insert_msg',"USER REGISTERED SUCCESSFULLY, Password has been emailed to the user");

                      }//end of if

                      else
                      {
                        $this->session->set_flashdata('insert_msg',"USER REGISTERED SUCCESSFULLY, !!Email was not sent to the user!! Password : ".$password);
                      }//end of else

                    redirect('user/showUserData',$data);
                    die();
            
            }//end of  inner if
        }//end of outer if
        $data['team_list']=$this->user_model->get_Data('team'); 
        $data['role_list']=$this->user_model->get_Data('role'); 
        $this->load->view('register',$data);


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
        
        $data['row']=$this->user_model->showUserData(1,'users');
        $this->load->view('showUser',$data);

    }//end of function

    public function viewUserData($id)
    {

        if(!$this->session->userdata('user_details'))
        {

            $this->session->set_flashhdata('login_error','USERNAME AND PASSWORD DO NOT MATCH');
            redirect('login');
            die();

        }//end  of if

        $status=1;
        $userdata=$this->session->userdata('user_details');
        $data=array();
        $data=$userdata;

        $data['data']=$this->user_model->viewData($id,$status,'users');
        $this->load->view('viewUser',$data);

    }//end of  function

    public function updateUserData($id)
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
        $data['role_list']=$this->user_model->get_Data('role');
        $data['team_list']=$this->user_model->get_Data('team');
        $data['data']=$this->user_model->viewData($id,$status,'users');
        $this->load->view('updateUser',$data);
        
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $post=$this->input->post();
            unset($post['updateData']);
            $query=$this->user_model->updateData($id,$post,'users');
            if($query==1)
            {
                $this->session->set_flashdata('update_msg','USER DETAILS UPDATED SUCCESSFULLY ');
                redirect('user/dashboard',$data);
                die();
            }//end of inner if
        }//end of outer  if
        
        
     }//end of  function

     public function deleteUser($id)
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

        $post=$this->input->post();
        $post['status']=0;
        unset($post['delete_User_Data']);
        $query=$this->user_model->updateData($id,$post,'users');
        if($query==1)
        {

            $this->session->set_flashdata('delete_msg','User Data Deleted Successfully');
            redirect('user/showUserData');
            die();          

        }//end of if

     }//end of function

     public function profile($id)
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
        
        //$data['row']=$this->user_model->showUserData(1,'users');
        //$data['row1']=$this->user_model->viewData($id,$status,'users');
        if($this->user_model->showPicture($id))
        {
            $args['user_image']=$this->user_model->showPicture($id);
        }//end of if

        $data['row']=$this->user_model->showProfileData($id,1,'users');

        $this->load->view('viewProfile',$data);

     }//end of function
    
   public function showSearch()
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
   
   $id=$userdata['id'];
   $data['row']=$this->user_model->search();
   $this->load->view('showSearch',$data);
   
   }//end of function

   public function UploadPage()
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
    $data['imgpath']=$this->user_model->showPicture($userdata['id']);

    // echo '<pre>';
    // print_r($data['imgpath']);
    // die();

    $this->load->view('viewUpload',$data);
}

    public function doUpload()
   { 
    
    if(!$this->session->userdata('user_details'))
    {
        $this->session->set_flashdata('login_error','USERNAMME AND PASSWORD DO NOT MATCH');
        redirect('login');
        die();
    }

    $userdata=$this->session->userdata('user_details');
    $data=array();
    $data=$userdata;

         $config['upload_path']   = './public/pics/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         $config['max_size']      = '100'; 
         $config['max_width']     = '1024'; 
         $config['max_height']    = '768';  
         $config['file_name']     = $userdata['fullname'].'_profile';  
         $this->load->library('upload', $config);
            
        if ( ! $this->upload->do_upload('userfile')) 
        {
            $this->session->set_flashdata('upload_error',$this->upload->display_errors());            
            redirect('user/UploadError', $data); 
            die();
        }           
        else 
        {
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                $data['upload_data']= $this->upload->data(); 
                $zfile = $data['upload_data']['full_path']; 
                $field['user_id']=$userdata['id'];
                $field['image_path']=basename($zfile);
                chmod($zfile,0777);
                
                if($this->user_model->showPicture($userdata['id']))
                {
                    $update['status']=0;
                    $this->user_model->updateImage($userdata['id'],$update);
                }//end of if
                $data['imgpath']=$this->user_model->insertData('user-image',$field);                
            
            }//end of if                     
            $this->session->set_flashdata('upload_msg','PICTURE UPLOADED SUCCESSFULLY'); 
            redirect('user/UploadPage'); 
            die();

        }//end of else

   }//end of function
   
   public function UploadError()
   {
    
    $this->load->view('UploadError');

   }


}//end of controller class
