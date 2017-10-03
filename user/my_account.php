<?php

session_start();
include("functions/functions.php");

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
        <p style='color:#FFF'>Nama: <b>$c_name</b><br>Last Login:<br> $mysqldate </p>
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
