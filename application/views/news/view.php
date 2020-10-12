<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CI Tutorials - HOME</title>
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
	<div>
		<h2><?php echo $news['title'] ?></h2>
		<p><?php echo $news['content'] ?></p>		
	</div>
</body>
</html>