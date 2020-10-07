<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CI Tutorials - HOME</title>
</head>
<body>
	<a href="<?php echo base_url() ?>">Home</a><a href="<?php echo base_url('site/about') ?>">About</a><a href="<?php echo base_url('site/services') ?>">Services</a><a href="<?php echo base_url('news') ?>">News</a><br>
	<h2><?php echo $news['title'] ?></h2>
	<p><?php echo $news['content'] ?></p>
</body>
</html>