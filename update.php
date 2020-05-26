<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css')?>">
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Update Record |  CRUD Operations using CodeIgniter</h3>
<hr />
</div>
</div>
<!--- Success Message --->
<?php if ($this->session->flashdata('success')) { ?>
<p style="font-size: 18px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
<?php }?>
<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="font-size: 18px; color:red"><?php	echo $this->session->flashdata('error'); ?></p>
 <?php } ?>
<?php echo form_open('Insert/updatedetails',['name'=>'insertdata','autocomplete'=>'off']);?>
<?php echo form_hidden('userid',$row->id);?>

<div class="row">
<div class="col-md-8"><b>Name</b>
<?php echo form_input(['name'=>'fname','class'=>'form-control','value'=>set_value('fname',$row->name)]);?>
<?php echo form_error('fname',"<div style='color:red'>","</div>");?>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Email id</b>
<?php echo form_input(['name'=>'email','class'=>'form-control','value'=>set_value('email',$row->email)]);?>
<?php echo form_error('email',"<div style='color:red'>","</div>");?>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Mobile no</b>
<?php echo form_input(['name'=>'mno','class'=>'form-control','value'=>set_value('mno',$row->mobile)]);?>
<?php echo form_error('mno',"<div style='color:red'>","</div>");?>
</div>		
</div>
<div class="row">
<div class="col-md-8"><b>Date Of Birth</b>
<?php echo form_input(['name'=>'date','class'=>'form-control','placeholder'=>'yyyy-mm-dd','value'=>set_value('date',$row->dob)]);?>
<?php echo form_error('date',"<div style='color:red'>","</div>");?>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Pin Code</b>
<?php echo form_input(['name'=>'pinc','class'=>'form-control','value'=>set_value('pinc',$row->pin)]);?>
<?php echo form_error('pinc',"<div style='color:red'>","</div>");?>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<?php echo form_submit(['name'=>'insert','class'=>'btn btn-success','value'=>'Update']);?>
</div>
</div>
<?php echo form_close();?>
</div>
</div>

</body>
</html>