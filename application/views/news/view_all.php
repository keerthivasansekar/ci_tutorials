<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CI Tutorials - News</title>
</head>
<body>
	<a href="<?php echo base_url() ?>">Home</a><a href="<?php echo base_url('site/about') ?>">About</a><a href="<?php echo base_url('site/services') ?>">Services</a><a href="<?php echo base_url('news') ?>">News</a><br>
	<h2>All News</h2>
	<a href="<?php echo base_url('news/add/') ?>">Add News</a>
	<table style="border-style: solid; border-width: 2px">
		<tr>
			<th>id</th>
			<th>Title</th>
			<th>Created on</th>
			<th>Actions</th>
		</tr>
		<?php foreach($all_news as $news): ?>
		<tr>
			<td><?php echo $news['id'] ?></td>
			<td><?php echo $news['title'] ?></td>
			<td><?php echo $news['created_on'] ?></td>
			<td>
				<a href="<?php echo base_url('news/view/').$news['slug'] ?>">View</a>
				<a href="<?php echo base_url('news/edit/').$news['id'] ?>">Edit</a>
				<a href="<?php echo base_url('news/delete/').$news['id'] ?>">Delete</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>