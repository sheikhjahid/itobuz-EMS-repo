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

						public function delete_User_Data($id,$post)
						{

								$this->db->where('id',$id);
								$query=$this->db->delete('users');
								return $query;

						}//end of function

							public function showProfileData($id,$status=1)
						{

										
										$this->db->select('users.*,role.name as role_name,team.name as team_name');
										$this->db->join('team', 'team.id = users.team_id');
										$this->db->join('role', 'role.id = users.role_id');

										if($status!='')
										{
												$this->db->where('users.id',$id);
												$this->db->where('users.status',$status);            
										}
										$query=$this->db->get('users');
										return  $query->result();
						}//end of function

						public function search()
						{
								$keyword=$this->input->post('keyword');
								$this->db->select('users.*,user-image.image_path');
								$this->db->join('user-image','users.id = user-image.user_id');
								$this->db->where ('user-image.status',1);
								$this->db->group_start();
										$this->db->like('users.fullname',$keyword);
										$this->db->or_like('users.phone',$keyword);
										$this->db->or_like('users.email',$keyword);
								$this->db->group_end();
								$this->db->order_by('users.id');
								$query=$this->db->get('users');

								// echo $this->db->last_query();
								return $query->result();
						}//end of function

						public function insertPicture($field)
						{
								$query=$this->db->insert('user-image',$field);
								return $query;								
						}//end of function

						public function showPicture($user_id)
						{
								$this->db->select('image_path');
								$this->db->where('user-image.user_id',$user_id);
								$this->db->order_by('user-image.id', 'DESC');
								$this->db->limit(1);
								$query=$this->db->get('user-image');
								$result=$query->result();
								return $result[0];
						}//end of function
					 public function updateImage($id,$field)
					 {
									$this->db->where('user_id',$id);
									$query=$this->db->update('user-image',$field);
									return $query;
						}//end of function

				
						

}//end of class
?>