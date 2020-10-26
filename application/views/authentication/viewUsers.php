<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CI Tutorials - Users</title>
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
		<a href="<?php echo base_url('authentication/viewusers') ?>">Users</a>&nbsp;&nbsp;
	</div>
	<div style="text-align: right;">
		<a href="<?php echo base_url('authentication/logout') ?>">Logout</a>&nbsp;&nbsp;
	</div>
	<h2>All Users</h2>
	<a href="<?php echo base_url('authentication/adduser/') ?>">Add New Users</a>
	<table>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Actions</th>
		</tr>
		<?php foreach($all_users as $user): ?>
		<tr>
			<td><?php echo $user['id'] ?></td>
			<td><?php echo $user['name'] ?></td>
			<td><?php echo $user['email'] ?></td>
			<td>
				<a href="<?php echo base_url('authentication/edit/').$user['id'] ?>">Edit</a>
				<a href="<?php echo base_url('authentication/delete/').$user['id'] ?>">Delete</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>