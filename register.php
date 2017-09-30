<?php 
include("functions/functions.php");
?>
<!DOCTYPE html>
<head><title> Daftar Akun </title>
	 <link rel="stylesheet" href="css/style.css">
</head>
	<body>
		  <div id="Akun">
        <h3>Buat Akun</h3>
        <fieldset>
            <form action="" method="post">

                <input type="text" name="username" placeholder="Nama Lengkap">
                <input type="text" name="Email" placeholder="Email">
                <input type="text" name="TanggalLahir" placeholder="Tanggal Lahir">
                <h4>Jenis Kelamin </h4>
                <form method="post" action="#">
                <input type="radio" name="jk" value="Laki"/>Laki-laki<br/>
                <input type="radio" name="jk" value="Perempuan"/>Perempuan<br/>
                <input type="Password" name="Password" placeholder="Password">
                <input type="submit" name="register" value="register" >
            </form>
        </fieldset>
    </div>
    <?php
    register();
     ?>
	</body>

</html>
