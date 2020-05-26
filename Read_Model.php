<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Read_Model extends CI_Model
{
public function getdata()
{
$query=$this->db->select('name,email,mobile,dob,pin,id')
		->get('users');
		 return $query->result();
}

public function getuserdetail($uid)
{
		$ret=$this->db->select('name,email,mobile,dob,pin,id',)
		              ->where('id',$uid)
		              ->get('users');
		        return $ret->row();
}
}