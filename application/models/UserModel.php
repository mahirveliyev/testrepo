<?php

/**
* 
*/
class UserModel extends CI_Model
{
	

	public function insert($user_data){
		$this->db->insert('user',$user_data);
	}	

	public function check_email($email){
		return $this->db->where('email',$email)->get('user')->result_array();
	}

	public function loginCheck($user_email,$user_password){
		return $this->db->where('email',$user_email)->where('password',md5($user_password))->get('user')->result_array();
	}

    public function insertAdd($insertData)
    {
        $this->db->insert("devices",$insertData);
	}

}

?>