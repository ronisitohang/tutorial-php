<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$koneksi=mysql_connect('localhost','root','');
?>

<?php if(!$koneksi):  ?>
<?php echo 'koneksi gagal'.mysql_error(); ?>
<?php else:?>
<?php echo 'koneksi berhasil'; ?>
<?php endif; ?>



