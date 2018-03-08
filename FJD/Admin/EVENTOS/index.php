<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM eventos ORDER BY id DESC");
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
	
<a href="add.php">AGREGAR UN NUEVO EVENTO</a><br/><br/>

<table>
	<tr> 
	<td><a href=http://localhost/proyectofinal/Admin/BLOG/index.php>Adminitrar blogs</a>;</td>
	<td><a href=http://localhost/proyectofinal/Admin/EVENTOS/index.php>Adminitrar eventos</a>;</td>
	<td><a href=http://localhost/proyectofinal/Admin/USUARIOS/index.php>Adminitrar sesiones</a>;</td>
	<td><a href="add.php">AGREGAR UN NUEVO BLOG</a>;
	</tr>
</table>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Evento : </td>
		<td>Fondo : </td>
		<td>logo : </td>
		<td>menu : </td>
		<td>g1</td>
		<td>update</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td><img src=/proyectofinal/imgs/".$res["fondo"].".jpg width=100px height=100px></td>"; 
		echo "<td><img src=/proyectofinal/imgs/".$res["logo"].".jpg width=70px height=70px></td>";
		echo "<td><img src=/proyectofinal/imgs/".$res["menu"].".png width=100px height=50px></td>";
		echo "<td>".$res["g1"]."></td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

	}
	?>
	</table>
	<p>
</body>
</html>
