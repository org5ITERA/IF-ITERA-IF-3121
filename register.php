<?php 
include("functions/functions.php");
?>
<!DOCTYPE html>
<head><title> Daftar Akun </title>
	 <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" type="text/css" href="js/jeasyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="js/jeasyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="js/jeasyui/demo.css">
    <script type="text/javascript" src="js/jeasyui/jquery.min.js"></script>
    <script type="text/javascript" src="js/jeasyui/jquery.easyui.min.js"></script>

              
              </head>
	<body>
		<div class="kotakkecil">
		Questions & Answers
		</div>
		<img src="img/11.png">
		  <div id="Akun">
        <h3>Buat Akun</h3>
        <fieldset>
            <form action="" method="post">

                <input type="text" name="username" placeholder="Nama Lengkap">
                <input type="text" name="Email" placeholder="Email">
                        <div style="margin-bottom:20px; margin-top: 20px;">

            <input class="easyui-datebox" label="Tanggal Lahir:" name="TanggalLahir" labelPosition="top" style="width:50%;">
        </div>
                <h4>Jenis Kelamin </h4>
                <form method="post" action="#">
                <input type="radio" name="jk" value="Laki"/>Laki-laki<br/>
                <input type="radio" name="jk" value="Perempuan"/>Perempuan<br/>
                <input type="Password" name="Password" placeholder="Password">
                <input type="submit" name="submit" value="Daftar" >
            </form>
        </fieldset>
    </div>
                <input type="submit" name="register" value="register" >
            </form>
        </fieldset>
    </div>
    <?php
    register();
     ?>
	</body>

</html>
