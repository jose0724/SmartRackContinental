<?php

include_once("config.php");

	


?>

<html>
<head>	
	<title>PORTAL ADMINISTRADOR</title>
	<style>
body {
    font-family: "Lato", sans-serif;
    <?php
    echo "background-image: url(".$fondo.".jpg) right;";
    ?>
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


	

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href=""><img src="icono.Png" width="100px" height="100px"> HOME</a>
  <form action="index.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>USER</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="iniciar"></td>
			</tr>
		</table> 
<?php

if(isset($_POST['Submit'])) {

	$user = mysqli_real_escape_string($mysqli, $_POST['user']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);

	$result = mysqli_query($mysqli, "SELECT * FROM USER");
	while($res = mysqli_fetch_array($result)){
	$p=$res['password'];
	$u=$res["user"]
	}




	if(empty($user) || empty($password)) {
				
		if(empty($user)) {
			echo "<font color='red'>user field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		echo " USUARIO O CONTRASEÑA INCORRECTOS";
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else {

			if ($u=$user && $p=$password) {

			print "<a href=/proyectofinal/Admin/BLOG/index.php?>Adminitrar blogs</a><p>";
			print "<a href=/proyectofinal/Admin/EVENTOS/index.php>Adminitrar eventos</a><p>";
			print "<a href=/proyectofinal/Admin/USUARIOS/index.php>Adminitrar sesiones</a><p>";
				
			}
			
		}
	}


?>

</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="icono.gif" width="30px" height="30px"> Menu</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>


 


</body>
</html>
