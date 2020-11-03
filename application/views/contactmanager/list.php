<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Manager - List</title>
</head>
<body>

<a href="<?php echo base_url('contactmanager/add'); ?>"><button>Add New Contact</button></a>

<table style="border-width: 2px; border-style: solid;">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Actions</th>
	</tr>
	<?php foreach($contacts as $contact): ?>
	<tr>
		<td><?php echo $contact['full_name'] ?></td>
		<td><?php echo $contact['email'] ?></td>
		<td><?php echo $contact['mobile'] ?></td>
		<td>
			<a href="<?php echo base_url('contactmanager/view/').$contact['id']; ?>"><button>View</button></a>
			<a href="<?php echo base_url(); ?>"><button>Edit</button></a>
			<a href="<?php echo base_url(); ?>"><button>Delete</button></a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

</body>
</html>