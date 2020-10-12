<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CI Tutorials - Add News</title>
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

	<h2>Add news</h2>

	<form action="<?php echo base_url('news/add') ?>" method="post">
		<label>Title: </label>
		<input type="text" name="title" value="<?php echo set_value('title') ?>"><br>
		<div><?php echo form_error('title'); ?></div>
		<label>Content: </label>
		<textarea name="content"><?php echo set_value('content') ?></textarea><br>
		<div><?php echo form_error('content'); ?></div>
		<button type="submit">Add News</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>