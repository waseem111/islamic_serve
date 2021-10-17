<?php

class Registrationmodel extends CI_Model
{
	public function registerUser($data)
	{
		$insert = $this->db->insert('users', $data);
		if($insert)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	public function registration($data)
	{
		$insert = $this->db->insert('users', $data);
		if($insert)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
}