<?php
include_once("config.php");
?>
<html>
<head>	
	<title>Login</title>
	<style>
body {
    font-family: "Lato", sans-serif;
    background-color: FFFFFF;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgba(41,41,41,0.3);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    overflow: scroll;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sidenav a:hover {
    color: #f1f1f1;
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 20px;
    font-size: 30px;
    margin-left: 40px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 10px;}
  .sidenav a {font-size: 13px;}
}
img.cat{
  width: 30px; height: 30px;
}
.menu{
	position: absolute;
	left: 50%;
	border: 10px;
}

</style>
</head>
<body>
<center>
	<img src="http://localhost/Continental/root/asset/banner.png" width=500 height=150>
	<p>
  	<a href=""><img src="http://localhost/Continental/root/asset/Conti.jpg" width="100px" height="100px"></a>
  	<form action="index.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>👤User</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr> 
				<td>🔐Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>🔢Pin</td>
				<td><input type="pin" name="pin"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table></center> 
<?php
if(isset($_POST['Submit'])) {

	$p="0";
	$u="0";
	$user = "0";
	$password = "0";
	$pin = "0";

	$user = mysqli_real_escape_string($mysqli, $_POST['user']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$pin = mysqli_real_escape_string($mysqli, $_POST['pin']);

	echo $pin;
	echo $user;
	echo $password;

	$result = mysqli_query($mysqli, "SELECT * FROM users WHERE user = '$user'");
		
		while($res = mysqli_fetch_array($result)) {
			$p=$res['password'];
			$u=$res['user'];
			$id=$res['id'];
		}

	if ( $user==$u && $p==$password && $pin='1234') {
			header("Location: http://localhost/Continental/root/ContinetalTijera.php?user=".$id."");		
	}else{
		print 'vuelve a intentarlo';
	}
}
?>
</body>
</html>