<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'koneksidb.php';
?>

<?php $db=mysql_select_db('pengguna'); ?>

<?php if(!$db):  ?>
<?php echo '<br>Gagal memilih database'.mysql_error(); ?>
<?php else:?>
<?php echo '<br>berhasil memilih database'; ?>
<?php endif; ?>

<?php mysql_close($koneksi);  ?>



