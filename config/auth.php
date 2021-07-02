<?php

include 'connect.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek = "SELECT * FROM em_user WHERE username = '$username' AND password = '$password'";
	$hasilcek = mysqli_query($conn,$cek);
	$data = mysqli_fetch_array($hasilcek);
	if ($data['username'] == $username AND $password == $password) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status_log'] = 1;
		header("location:../index.php");
	}
	else{
		echo "<script>alert('Username atau Password Salah');history.go(-1);</script>";
	}
}

if(isset($_GET['logout'])){
	session_start();
	session_destroy();
	header("location:../index.php");
}


