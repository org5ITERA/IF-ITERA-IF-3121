<!DOCTYPE html>
<head><title> Daftar Akun </title>
	 <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" type="text/css" href="js/jeasyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="js/jeasyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="js/jeasyui/demo.css">
    <script type="text/javascript" src="js/jeasyui/jquery.min.js"></script>
    <script type="text/javascript" src="js/jeasyui/jquery.easyui.min.js"></script>
</head>
	<body>
		  <div id="Akun">
        <h3>Buat Akun</h3>
        <fieldset>
            <form action="">
                <input type="text" name="username" placeholder="Nama Lengkap">
                <input type="text" name="Email/Telepon" placeholder="Email/Telepon">
                <input type="text" name="Tanggal Lahir" placeholder="Tanggal Lahir">
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
	</body>

</html>
