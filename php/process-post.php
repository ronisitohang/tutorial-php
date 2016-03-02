<?php //var_dump($_FILES); ?>

<table>
	<tr>
		<th>Username</th>
		<td><?php echo $_POST['username']; ?></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><?php echo $_POST['password']; ?></td>
	</tr>
	<tr>
		<th>Foto</th>
		<td>
			<?php move_uploaded_file($_FILES['profile_picture']['tmp_name'], './images/profile_picture.jpg'); ?>
			<img src="<?php echo './images/profile_picture.jpg'; ?>">
		</td>
	</tr>
	<tr>
		<th>Jenis Kelamin</th>
		<td><?php echo $_POST['gender']; ?></td>
	</tr>
	<tr>
		<th>Status Menikan</th>
		<td><?php echo $_POST['married_status']; ?></td>
	</tr>
</table>