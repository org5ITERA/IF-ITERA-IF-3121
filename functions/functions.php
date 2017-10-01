<?php  
$db = mysqli_connect("localhost", "root","","Tugas-Besar");

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
			echo "<script> window.open('main.php','_self') </script>";
		}
		
	}
}
function register(){
	if (isset($_POST['register'])){
		global $db;

		$username = $_POST['username'];
		$Email = $_POST['Email'];
		$TanggalLahir = $_POST['TanggalLahir'];
		$jk = $_POST['jk'];
		$Password = $_POST['Password'];

		$check_acc = "select username from User where username = '$username'";
		$run_cek_username= mysqli_num_rows($db, $check_acc);
		$cek=mysqli_num_rows($run_cek_username);
		if ($cek==1) {
			echo "<script> alert ('Username anda sudah terdaftar, coba lagi')</script>";
			exit();
		}

			$insert_c = "insert into User (username,password, TanggalLahir, Email, jk) values ('$username','$Password','$TanggalLahir','$Email','$jk')";

			$run_register = mysqli_query($db, $insert_c);
			echo "<script> alert ('Anda berhasil terdaftar ')</script>";
			echo "<script> window.open('login.php','_self') </script>";
		}

	

}



	?>
