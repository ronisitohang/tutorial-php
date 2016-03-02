<?php 
	include 'faktorial_func.php';
?>
<table>
	<tr>
		<th>n</th>
		<td><?php echo $_GET['n']; ?></td>
	</tr>

	<tr>
		<td>
			<?php 

				$i=1;
				$n= $_GET['n'];
				
				while ($i<=$n){
					$k=1;
					while ($k<=$i){
						echo '*' ;
						$k++;
					}
					$i++;
					echo '<br>';
				}	
			?>
			<?php 

				$i=1;
				$n= $_GET['n'];
				
				while ($i<=$n){
					$k=$i;
					while ($k<=$n){
						echo '*' ;
						$k++;
					}
					$i++;
					echo '<br>';
				}	
			?>
		</td>
	</tr>

</table>