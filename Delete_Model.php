<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delete_Model extends CI_Model 
{
public function deleterow($uid)
{
$sql_query=$this->db->where('id', $uid)
                ->delete('users');
           if($sql_query){
$this->session->set_flashdata('success', 'Record deleted successfully');
		redirect('read');
}
else
{
		$this->session->set_flashdata('error', 'SomEthing went worng. Error!!');
		redirect('read');
}
}
}