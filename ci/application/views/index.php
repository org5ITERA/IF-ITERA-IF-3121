 
</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
}
?>
 
Selamat Datang <?php echo $username; ;?>
<a href="logout.php">Logout</a>;
?>
</body>
</html>