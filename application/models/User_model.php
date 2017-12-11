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
    }//end of function

    public function insert_Team_data($post)
    {
    	$query=$this->db->insert('team',$post);

    	return $query;
    }//end of function

    public function showRoleData()
    {

    	$this->db->select('*');
    	$query=$this->db->get('role');
    	return $query->result();

    }//end of  function

    public function insert_Role_Data($post)
    {

    	$query=$this->db->insert('role',$post);

    	return $query;
    }//end of function

    public function viewTeam($id)
    {

    	$this->db->select('*');
    	$this->db->where('id',$id);
    	$query=$this->db->get('team');
    	return $query->result();

    }//end of function

    public function update_Team_Data($id,$field)
    {
    	$this->db->where('id',$id);
    	$query=$this->db->update('team',$field);
    	return $query;

    }//end of function

}//end of class
?>