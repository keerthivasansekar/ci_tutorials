<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CI Tutorials - Edit News</title>
</head>
<body>
	<a href="<?php echo base_url() ?>">Home</a><a href="<?php echo base_url('site/about') ?>">About</a><a href="<?php echo base_url('site/services') ?>">Services</a><a href="<?php echo base_url('news') ?>">News</a><br>

	<h2>Edit news</h2>

	<form action="<?php echo base_url('news/edit/').$news['id'] ?>" method="post">
		<label>Title: </label>
		<input type="text" name="title" value="<?php if(set_value('title') != null){ echo set_value('title'); } elseif($news['title'] != null){ echo $news['title']; } else{ echo $this->input->post('title'); } ?>"><br>
		<div><?php echo form_error('title'); ?></div>
		<label>Content: </label>
		<textarea name="content"><?php if(set_value('title') != null){ echo set_value('content'); }elseif($news['content'] != null){ echo $news['content']; } else{ echo $this->input->post('content'); } ?></textarea><br>
		<div><?php echo form_error('content'); ?></div>
		<button type="submit">Update News</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>