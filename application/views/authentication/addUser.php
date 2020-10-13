<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<div>
		<a href="<?php echo base_url() ?>">Home</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('site/about') ?>">About</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('site/services') ?>">Services</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('news') ?>">News</a>&nbsp;&nbsp;
	</div>
	<div style="text-align: right;">
		<a href="<?php echo base_url('authentication/logout') ?>">Logout</a>&nbsp;&nbsp;
	</div>
	<h3>Add User</h3>
	<div>
		<form action="<?php echo base_url('authentication/adduser') ?>" method="post">
			<label>Name: </label>
			<input type="text" name="name" value="<?php echo set_value('name') ?>"><br>
			<small><?php echo form_error('name') ?></small>
			<label>Email: </label>
			<input type="email" name="email" value="<?php echo set_value('email') ?>"><br>
			<small><?php echo form_error('email') ?></small>
			<label>Password: </label>
			<input type="password" name="passwrd" value=""><br>
			<small><?php echo form_error('passwrd') ?></small>
			<label>Confirm Password: </label>
			<input type="password" name="conf_passwrd" value=""><br>
			<small><?php echo form_error('conf_passwrd') ?></small>
			<button type="submit">Add User</button>
		</form>
	</div>
</body>
</html>