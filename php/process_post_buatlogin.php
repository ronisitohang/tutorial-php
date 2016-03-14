<?php 
session_start();

include 'koneksidb.php';

if(empty($_POST['email']) || empty($_POST['password'])){
	header('location:form-post-buatlogin.php?error_message=email atau password tidak boleh kosong');
}else{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = mysql_query("SELECT * FROM `login` WHERE `email` = '$email' AND `pass` = '$password'");
	$hasil = mysql_fetch_array($query, MYSQL_ASSOC);
	if(!$hasil){
		// include 'login/gagal.php';
		header("location:form-post-buatlogin.php?error_message=email atau password Anda salah&email=$email");
	}else{
		$_SESSION['login'] = true;
		$_SESSION['id'] = $hasil['id'];
		header("location:login/sukses.php");
		// include 'login/sukses.php';
	}
}

