<?php
$db = mysqli_connect("localhost", "root","1234567890","Tugas-Besar");

function login(){

	if (isset($_POST['login'])){

		global $db;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from User where username='$username' AND password='$password'";
		$run_sql=mysqli_query($db,$sql);
		$cek_user= mysqli_num_rows($run_sql);
		if ($cek_user==0) {
			echo "<script> alert('Username atau password SALAH') </script>";
		} else {
			$_SESSION['username']=$username;
			echo "<script> window.open('my_account.php','_self') </script>";
		}

	}
}

function update(){

}
