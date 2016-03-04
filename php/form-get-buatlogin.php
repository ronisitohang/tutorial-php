<!-- http://192.168.33.105/tutorial/php/process-get.php?username=12345&password=qwerty&profile_picture=Harry+Osmar+Sitohang-large.jpg&gender=female&married_status=on&ok=OK -->
<form name="login" action="./process_get_buatlogin.php" method="GET">

<table style="width:10%">
  <tr>
    <td>Nama:</td>
    <td><input type="email" name="email"></p></td> 
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