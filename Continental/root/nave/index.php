<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM Blog ORDER BY idMagazine DESC");
?>

<html>
<head>	
	<title>PORTAL ADMINISTRADOR DE BLOG : <p></title>

	<link rel="stylesheet" type="text/css" media="all" href="styleblogetab.css" />

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
  


<img src="" height="" w>


	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Imagen : </td>
		<td>Titulo : </td>
		<td>Sutitulo : </td>
		<td>Contenido : </td>
		<td>Categoria:</td>

		<td>update</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td><img src=/proyectofinal/imgs/".$res['imagen'].".png width=70px height=70px ></td>";
		echo "<td>".$res['titulo']."</td>";
		echo "<td>".$res["subtitulo"]."</td>"; 
		echo "<td>".$res["contenido"]."</td>";
		echo "<td><img src=/proyectofinal/imgs/".$res["categoria"].".png width=40px height=40px ></td>";

		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

	}
	?>
	</table>


	<p>
	</p>
	<br>

	<script type="text/javascript">
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
