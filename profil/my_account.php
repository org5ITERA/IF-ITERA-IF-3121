<?php

session_start();
include("functions/functions.php");


if (!isset($_SESSION['username'])) {
  echo "<script>window.open('index.php','_self')</script>";
}
else {
  echo "";
}

?>
<!DOCTYPE html>
<head><title> Questions & Answer </title>
	 <link rel="stylesheet" href="css/stylesAcc.css">

</head>
	<body>

    <div class="content_wrapper">
			<div id="kotakkecil">
			<a href="home.php">Questions & Answers</a>
			</div>

    <div id="sidebar">
      <div id="sidebar_title">
        Akun Saya:
      </div>
      <ul id="sb">
				<?php
				$username = $_SESSION['username'];

				$get_info = "select * from user where username='$username'";

				$run_info = mysqli_query($db, $get_info);

				$row_info = mysqli_fetch_array($run_info);


				$nama = $row_info['nama'];
        $lastlogin = $row_info['lastlogin'];

        $phpdate = strtotime( $lastlogin );
        $mysqldate = date( 'd-m-Y H:i:s', $phpdate );
				echo "<br><p style='text-align:center;color:#FFF'>Nama: <b>$nama</b><br>Last Login:<br> $mysqldate </p>";


				?>

        <a href="#">Pertanyaanku</a> <br>
        <a href="#">Jawabanku</a> <br>
        <a href="#">Pengaturan Akun </a><br>
        <a href="logout.php">Logout</a>
      </ul>

    </div>
    <div id="content_area">
      a
    </div>
    <div id="footer">

		<h3 style="text-align:center; padding-top:30px;">&copy; 2017 by <a href="http://github.com/org5ITERA">org5ITERA</a></h3>

		</div>
</div>
	</body>

</html>
