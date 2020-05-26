<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Insert_Model extends CI_Model
{
public function insertdata($fname,$email,$mno,$date,$pinc)
{
$data=array(
			'name'=>$fname,
			'email'=>$email,
			'mobile'=>$mno,
			'dob'=>$date,
			'pin'=>$pinc
		);
$sql_query=$this->db->insert('users',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Registration successful');
		redirect('read');
}
else
{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('read');
}
}

public function updatedetails($fname,$email,$mno,$date,$pinc,$usid){
$data=array(
			'name'=>$fname,
			'email'=>$email,
			'mobile'=>$mno,
			'dob'=>$date,
			'pin'=>$pinc
		);
$sql_query=$this->db->where('id', $usid)
                ->update('users', $data);
if($sql_query)
{
$this->session->set_flashdata('success', 'Record updated successful');
		redirect('read');
}
else
{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('read');
}
}
}