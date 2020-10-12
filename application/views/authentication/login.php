<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div>
		<a href="<?php echo base_url() ?>">Home</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('site/about') ?>">About</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('site/services') ?>">Services</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('news') ?>">News</a>&nbsp;&nbsp;
	</div>
	<div>
		<p>
			<?php
				if ($this->session->flashdata('login_error') !== NULL) {
					echo $this->session->flashdata('login_error');
				}
			?>			
		</p>
		<form action="<?php echo base_url('authentication') ?>" method="post">
			<label>Email: </label>
			<input type="text" name="email" placeholder="Enter your Email" value="<?php echo set_value('email') ?>"><br>
			<small><?php echo form_error('email') ?></small>
			<label>Password: </label>
			<input type="password" name="passwrd" placeholder="Enter your password"><br>
			<small><?php echo form_error('passwrd') ?></small>
			<button type="submit">Login</button>			
		</form>
	</div>
</body>
</html>