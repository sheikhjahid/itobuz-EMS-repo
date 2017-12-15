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

    public function showData($status=1,$table='')
    {
    	if($table!='')
    	{
    		$this->db->select('*');
    		$this->db->where('status',$status);
	    	$query=$this->db->get($table);
    		return  $query->result();
    	}
    	else
    	{
    		return;
    	}
    }//end of function

    public function insertData($table='',$post)
    {
    	$query=$this->db->insert($table,$post);
    	return $query;
    }//end of function

    

    public function viewData($id,$status=1,$table='')
    {

    	if($table!='')
    	{
    		$this->db->select('*');
    		$this->db->where('id',$id);
    		$this->db->where('status',$status);
    		$query=$this->db->get($table);
    		return $query->result();	
    	}
    	else
    	{
    		return;
    	}
    	
    }//end of function
    public function updateData($id,$field,$table)
    {
    	$this->db->where('id',$id);
    	$query=$this->db->update($table,$field);
    	return $query;
    }//end of function



  public function view_Role_Data($id)
  {

  	$this->db->select('*');
  	$this->db->where('id',$id);
  	$query=$this->db->get('role');
  	return $query->result();

  }//end of function

  public function update_Role_Data($id,$field)
  {

  	$this->db->where('id',$id);
  	$query=$this->db->update('role',$field);
  	return $query;

  }//end of function

  public function delete_Role_Data($id,$post)
  {

  	$this->db->where('id',$id);
  	$query=$this->db->delete('role');
  	return $query;

  }//end of function

  public function delete_Team_Data($id,$post)
  {
  	$this->db->where('id',$id);
  	$query=$this->db->delete('team');
  	return $query;
  }

  public function get_Data($table)
  {
      $this->db->select('*');
      $query = $this->db->get($table);
      if ($query->num_rows() >= 1)
      {
        return $query->result();
      }//end of if
  }//end of function

  public function showInnerData()
  {

    $this->db->select('*');
    $this->db->from('users'); // from Table1
    $this->db->join('team','users.id = team.id','INNER'); // Join team-table with user-table based on the foreign key
    $this->db->join('role','users.id = role.id','INNER'); // Join role table with user-table based on the foreign key
    //$this->db->where('team.',2); // Set Filter
    $query = $this->db->get();
    return $query->result();
  }//end of function

      public function showUserData($status=1)
      {
          
          $this->db->select('users.*,role.name as role_name,team.name as team_name');
          $this->db->join('team', 'team.id = users.team_id');
          $this->db->join('role', 'role.id = users.role_id');

          if($status!='')
          {
            $this->db->where('users.status',$status);            
          }
          $query=$this->db->get('users');
          return  $query->result();
      }//end of function


}//end of class
?>