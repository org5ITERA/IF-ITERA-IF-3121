<?php
$db = mysqli_connect("localhost", "root","Lolipop28;","Tugas-Besar");

function login(){

	function getIPAddr()
  {
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
          $ip=$_SERVER['REMOTE_ADDR'];
      }
      return $ip;
  }

	if (isset($_POST['login'])){

		global $db;
		$get_ip = getIPAddr();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from user where username='$username' AND password='$password'";
		$run_sql=mysqli_query($db,$sql);
		$cek_user= mysqli_num_rows($run_sql);
		if ($cek_user==0) {
			echo "<script> alert('Username atau password SALAH') </script>";
		} else {

			$update_ip = "update user set ip_add='$get_ip',lastlogin=NOW() where username='$username'";
			$run_update = mysqli_query($db, $update_ip);

			$_SESSION['username']=$username;

			echo "<script> window.open('main.php','_self') </script>";
		}

	}
}
function register(){
	if (isset($_POST['register'])){
		global $db;

		$username = $_POST['username'];
		$Email = $_POST['email'];
		$TanggalLahir = $_POST['tanggallahir'];
		$jk = $_POST['jk'];
		$Password = $_POST['password'];
		$nama = $_POST['nama'];
		$cek_user = "select username from user where username = '$username'";
		$run_cek_user= mysqli_query($db, $cek_user);
		$cek=mysqli_num_rows($run_cek_user);
		if ($cek==1) {
			echo "<script> alert ('Username anda sudah terdaftar, coba lagi')</script>";
			exit();
		}

			$insert_c = "insert into user (username,password,nama,TanggalLahir, Email, jk) values ('$username','$Password','$nama','$TanggalLahir','$Email','$jk')";

			$run_register = mysqli_query($db, $insert_c);
			echo "<script> alert ('Anda berhasil terdaftar ')</script>";
			echo "<script> window.open('login.php','_self') </script>";
		}
}

function question(){
	if(isset($_POST['KIRIM'])){

		global $db;

		$username = $_SESSION['username'];
		$sql= "select * from user where username='$username'";
		$run_sql = mysqli_query($db,$sql);
		$info = mysqli_fetch_array($run_sql);
		$id = $info['id'];


		$judul = mysql_escape_string($_POST['judul']);
		$pertanyaan = mysql_real_escape_string($_POST['pert_txt']);
		echo "<script> alert('$judul') </script>";
		$query = ("insert into question (id_user,judul,question,waktu) VALUES ('$id','$judul','$pertanyaan',NOW());");
		$run = mysqli_query($db,$query);

		echo "<script> alert('PERTANYAAN BERHASIL TERKIRIM') </script>";
	}
}

function answer(){
	if(isset($_POST['JAWAB'])){
		global $db;

		$username = $_SESSION['username'];
		$sql= "select * from user where username='$username'";
		$run_sql = mysqli_query($db,$sql);
		$info = mysqli_fetch_array($run_sql);
		$id = $info['id'];

	}
}

?>
