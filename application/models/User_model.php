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
		return $result[0];
    }//end of function

}//end of class
?>