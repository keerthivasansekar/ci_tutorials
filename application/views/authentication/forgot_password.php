<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
	<div>
		<a href="<?php echo base_url() ?>">Home</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('site/about') ?>">About</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('site/services') ?>">Services</a>&nbsp;&nbsp;
		<a href="<?php echo base_url('news') ?>">News</a>&nbsp;&nbsp;
	</div>
	<div>
		<h3>Reset Password</h3><br>
		<p>
			<?php
				if ($this->session->flashdata('login_error') !== NULL) {
					echo $this->session->flashdata('login_error');
				}
			?>			
		</p>
		<form action="<?php echo base_url('authentication/forgotpassword') ?>" method="post">
			<label>Email: </label>
			<input type="text" name="email" placeholder="Enter your Email" value="<?php echo set_value('email') ?>"><br>
			<small><?php echo form_error('email') ?></small>
			<button type="submit">Reset Password</button>			
		</form>
	</div>
</body>
</html>