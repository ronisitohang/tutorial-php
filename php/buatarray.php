<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$i=1;
?>

<?php while($i<=1000): ?>
	<p font style="font-size:<?php echo $i; ?>px"><?php echo $i; ?></p>
	<?php $i++; ?>
<?php endwhile; ?>


