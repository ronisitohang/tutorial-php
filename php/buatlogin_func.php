<?php
$email=$_GET['email'];
$password=$_GET['password'];
?>


<?php
if(($email=="qwerty@gmail.com") && ($password=='123123')): ?>
	Selamat anda berhasil masuk
	<table>
		<tr>
			<th>Email</th>
			<td>
				<?php if(true):?>
				<b>Benar</b>
				<?php else: ?>
				<b>Salah</b>
				<?php endif; ?>
				<?php echo $_GET['email']; ?>	
			</td>
		</tr>
		<tr>
			<th>Password</th>
			<td><?php echo $_GET['password'];?></td>
		</tr>
	</table>
<?php else:?>
	Email atau Password salah
<?php endif; ?>

