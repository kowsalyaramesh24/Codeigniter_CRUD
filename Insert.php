<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Insert extends CI_Controller
{

public function index()
{

$this->form_validation->set_rules('fname','name','required|alpha');
$this->form_validation->set_rules('email','email','required|valid_email');
$this->form_validation->set_rules('mno','mobilemo','required|numeric|exact_length[10]');
$this->form_validation->set_rules('date','dob','required|date');
$this->form_validation->set_rules('pinc','pin','required|numeric|exact_length[6]');

if($this->form_validation->run())
{
$fname=$this->input->post('fname');
$email=$this->input->post('email');
$mno=$this->input->post('mno');
$date=$this->input->post('date');
$pinc=$this->input->post('pinc');

$this->load->model('Insert_Model');
$this->Insert_Model->insertdata($fname,$email,$mno,$date,$pinc);
$this->load->view('insert');
}
else
{
$this->load->view('insert');
}
}

// For data updation
public function updatedetails(){
$this->form_validation->set_rules('fname','name','required|alpha');
$this->form_validation->set_rules('email','email','required|valid_email');
$this->form_validation->set_rules('mno','mobilemo','required|numeric|exact_length[10]');
$this->form_validation->set_rules('date','dob','required|mixed');
$this->form_validation->set_rules('pinc','pin','required|numeric|exact_length[6]');

if($this->form_validation->run())
{
$fname=$this->input->post('fname');
$email=$this->input->post('email');
$mno=$this->input->post('mno');
$date=$this->input->post('date');
$pinc=$this->input->post('pinc');
$usid=$this->input->post('userid');
$this->load->model('Insert_Model');
$this->Insert_Model->updatedetails($fname,$email,$mno,$date,$pinc,$usid);
} else {
$this->session->set_flashdata('error', 'Somthing went worng. Try again with valid details !!');
		redirect('read');
}
}

}