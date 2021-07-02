<?php

include 'connect.php';

if (isset($_POST['add_user'])) {
	$nama_user = htmlspecialchars($_POST['nama_user']);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "INSERT INTO em_user(name,username,password)VALUES('$nama_user','$username','$password')";
	if (mysqli_query($conn, $sql)) {
       echo "
          <script>
            alert('Data sudah terdaftar, silahkan login!');
            document.location.href = '../index.php';
          </script>
        ";
    }else{
        echo "
          <script>
           alert('data failed to add');
          </script>
         ";
    }
}