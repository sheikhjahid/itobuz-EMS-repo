<?php

class user_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
        // Your own constructor code
	}

	public function checkUser($username,$password)
	{
		$this->db->select("*");
		$this->db->where("email",$username);
		$this->db->where("password",$password);
		$query=$this->db->get('users');
		$result=$query->result();
		$status='failed';
		if(count($result))
		{
			$status='success';
		}
		$this->logUser($username,$status);
		return $result[0];
    }//end of function

    private function logUser($email,$status)
    {
    	$arr['user_email']=$email;
    	$arr['status']=$status;
    	$this->db->insert('user-login',$arr);
    }//end of function

    public function showTeamData()
    {
    	$this->db->select('*');
    	//$this->db->where_not_in($id);
    	$query=$this->db->get('team');
    	return  $query->result();
    }

}//end of class
?>