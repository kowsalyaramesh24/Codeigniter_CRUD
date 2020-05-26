<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css')?>">
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">
<h3>CRUD Operations using CodeIgniter</h3> <hr />
<!--- Success Message --->
<?php if ($this->session->flashdata('success')) { ?>
<p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
<?php }?>
<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
 <?php } ?>
<a href="<?php echo site_url('insert'); ?>">
<button class="btn btn-primary"> Insert Record</button></a>
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Mobile No</th>
<th>Date Of Birth</th>
<th>Pin Code</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$cnt=1;
foreach($result as $row)
{
?>
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row->name);?></td>
    <td><?php echo htmlentities($row->email);?></td>
    <td><?php echo htmlentities($row->mobile);?></td>
    <td><?php echo htmlentities($row->dob);?></td>
    <td><?php echo htmlentities($row->pin);?></td>
    <td>


<a href="<?php echo site_url('Read/getdetails/'.$row->id) ?>" class = "btn btn-warning">Edit</a>

</td>
<td>

<a href="<?php echo site_url('Delete/index/'.$row->id) ?>" class = "btn btn-danger">Delete</a>
</td>
</tr>
<?php
// for serial number increment
$cnt++;
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

</body>
</html>