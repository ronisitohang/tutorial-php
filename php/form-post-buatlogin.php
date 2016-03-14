<?php 
  session_start();
  if(!empty($_SESSION['login'])){
    header('location:login/sukses.php');
  }
?>

<?php if(!empty($_GET['error_message'])): ?>
  <p style="color:red"><?php echo $_GET['error_message']; ?></p>
<?php endif; ?>

<form name="login" action="./process_post_buatlogin.php" method="POST">
<table style="width:10%">
  <tr>
    <td>Email:</td>
    <td>
      <?php if(!empty($_GET['email'])): ?>
        <input type="email" name="email" value="<?php echo $_GET['email']; ?>">
      <?php else: ?>
        <input type="email" name="email">
      <?php endif; ?>
    </td> 
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="password"></td> 
    
  </tr>
</table>
<p>
  <table>
    <tr>
      <td><input type="submit" name="ok" value="OK"></td>
      <td><input type="reset" name="reset" value="RESET"></td>
    </tr>
  </table>
</p>
</form>