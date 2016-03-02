<!-- http://192.168.33.105/tutorial/php/process-get.php?username=12345&password=qwerty&profile_picture=Harry+Osmar+Sitohang-large.jpg&gender=female&married_status=on&ok=OK -->
<form name="login" action="http://192.168.33.105/tutorial/php/process-get.php" method="GET">
	<p>
		<input type="text" name="username">
	</p>	
	<p>
		<input type="password" name="password">
	</p>
	<p>
		<input type="file" name="profile_picture">
	</p>
	<p>
		<select name="gender">
			<option value="male">Laki-laki</option>
			<option value="female">Perempuan</option>
		</select>
	</p>
	<p>
		<input type="checkbox" name="married_status">YES</input>
		Apakah Anda sudah menikah ?
	</p>
	<p>
		<input type="submit" name="ok" value="OK">
		<input type="reset" name="reset" value="RESET">
	</p>
</form>