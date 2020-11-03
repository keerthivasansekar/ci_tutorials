<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Manager - Add Contact</title>
</head>
<body>
<p><?php echo $this->session->flashdata('message'); ?></p>
<form action="<?php echo base_url('contactmanager/add') ?>" method="post" enctype="multipart/form-data">
	<div>
		<label>Full name</label>
		<input type="text" name="full_name">
		<span><?php echo form_error('full_name') ?></span>
	</div>
	<div>
		<label>Email</label>
		<input type="email" name="email">
		<span><?php echo form_error('email') ?></span>
	</div>
	<div>
		<label>Mobile</label>
		<input type="text" name="mobile">
		<span><?php echo form_error('mobile') ?></span>
	</div>
	<div>
		<label>Profile Pic</label>
		<input type="file" name="profile_pic">
	</div>
	<div>
		<button type="submit">Add Contact</button>
	</div>
</form>
</body>
</html>