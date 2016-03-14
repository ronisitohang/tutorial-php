<?php 
	session_start();
	include '../koneksidb.php';
?>
<?php if(!empty($_SESSION['login'])): ?>
	<?php
		$id = $_SESSION['id'];
		$query = mysql_query("SELECT * FROM `login` WHERE `id` = '$id'");
		$hasil = mysql_fetch_array($query, MYSQL_ASSOC);
	?>
	<table>
		<?php foreach ($hasil as $key => $value): ?>
			<tr>
				<td><?php echo  $key; ?></td>
				<td><?php echo  $value; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<a href="logout.php">logout</a>
<?php else: ?>
	<?php header("location:../form-post-buatlogin.php?error_message=Anda harus login terlebih dahulu"); ?>
<?php endif; ?>