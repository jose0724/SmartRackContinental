<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<html>
<head>	
	<title>PORTAL ADMINISTRADOR</title>
		<style type="text/css">
		
		table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
	</style>
</head>

<body>
	

	<table>
	<tr> 
	<td><a href=http://localhost/proyectofinal/Admin/BLOG/index.php>Adminitrar blogs</a>;</td>
	<td><a href=http://localhost/proyectofinal/Admin/EVENTOS/index.php>Adminitrar eventos</a>;</td>
	<td><a href=http://localhost/proyectofinal/Admin/USUARIOS/index.php>Adminitrar sesiones</a>;</td>
	<td><a href="add.php">AGREGAR UN NUEVO BLOG</a>;
	</tr>
</table>

<a href="add.php">AGREGAR UN NUEVO USUARIO </a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>user</td>
		<td>Password</td>
		<td>Nombre</td>
		<td>Correo</td>
		<td>update</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['user']."</td>";
		echo "<td>".$res['Password']."</td>";
		echo "<td>".$res['Nombre']."</td>";
		echo "<td>".$res['Correo']."</td>";

		echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>

	<p>
</body>
</html>
