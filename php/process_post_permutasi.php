<?php 
	include 'faktorial_func.php';
?>
<table>
	<tr>
		<th>n</th>
		<td><?php echo $_POST['n']; ?></td>
	</tr>
	<tr>
		<th>k</th>
		<td><?php echo $_POST['k']; ?></td>
	</tr>
	<tr>
		<th>hasil</th>
		<td>
			<?php 
				echo permutasi($_GET['n'], $_GET['k']);
			?>
		</td>
	</tr>

</table>