<?php
$id = $_GET['id'];

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM blog WHERE id=$id");

while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['titulo']."</td>";
		echo "<td>".$res['subtitulo']."</td>";
		echo "<td>".$res['contenido']."</td>";
		echo "<td>".$res['categoria']."</td>";
		

		$titulo=$res['titulo'];
		$subtitulo=$res['subtitulo'];
		$contenido=$res['contenido'];
		$categoria=$res['categoria'];
	

?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>

	<a href="index.php">inicio</a><br/><br/>

	<form action="edit.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>TITULO</td>
				<td><input type="text" name="titulo" value= <?php echo $titulo;?> ></td>
			</tr>
			<tr> 
				<td>SUBTITULO</td>
				<td><input type="text" name="subtitulo" value= <?php echo $subtitulo?> ></td>
			</tr>
			<tr> 
				<td>CONTENIDO</td>
				<td><input type="text" name="contenido" value= <?php echo $contenido?> ></td>
			</tr>
			<tr> 
				<td>CATEGORIA</td>
				<td><input type="text" name="categoria" value= <?php echo $categoria?> ></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table> 

<?php

}
include_once("config.php");

if(isset($_POST['Submit'])) {

	$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);
	$subtitulo = mysqli_real_escape_string($mysqli, $_POST['subtitulo']);
	$contenido = mysqli_real_escape_string($mysqli, $_POST['contenido']);
	$categoria = mysqli_real_escape_string($mysqli, $_POST['categoria']);

	if(empty($titulo) || empty($subtitulo) || empty($contenido)) {
				
		if(empty($titulo)) {
			echo "<font color='red'>titulo field is empty.</font><br/>";
		}
		
		if(empty($subtitulo)) {
			echo "<font color='red'>subtitulo field is empty.</font><br/>";
		}
		
		if(empty($contenido)) {
			echo "<font color='red'>contenido field is empty.</font><br/>";
		}
			if(empty($categoria)) {
			echo "<font color='red'>categoria field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 

		$result = mysqli_query($mysqli, "UPDATE blog SET titulo='$titulo',subtitulo='$subtitulo',contenido='$contenido' WHERE id=$id");
		

		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}

?>


</body>
</html>


