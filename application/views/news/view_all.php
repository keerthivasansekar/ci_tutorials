<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CI Tutorials - News</title>
	<style type="text/css">
		table {
		  border-collapse: collapse;
		}
		
		table, th, td {
		  border: 1px solid black;
		}
	</style>
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
	<h2>All News</h2>
	<a href="<?php echo base_url('news/add/') ?>">Add News</a>
	<table>
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