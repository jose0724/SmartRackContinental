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
	<img src="asset\banner.png" width=500 height=150>
	<p>
  	<a href=""><img src="asset\Conti.jpg" width="100px" height="100px"></a>
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
				<td><input type="pin" name="DragCode"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table></center> 
<?php
if(isset($_POST['Submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['user']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$pin = mysqli_real_escape_string($mysqli, $_POST['pin']);
	//$result = mysqli_query($mysqli, "SELECT * FROM USER");
	//while($res = mysqli_fetch_array($result)){
	//$p=$res['password'];
	//$u=$res["user"];
	//$pas md5($p);
	//$use md5($u);
	//}
	//$users md5($user);
	//	$passwords md5($password);
	//if ($users==$use && $pas==$passwords && $pin='26481') {
	if ($user=='hola' && $password=='123' && $pin=='123') 
	{
			echo "entraste";
			}		
	}
?>
</body>
</html>

