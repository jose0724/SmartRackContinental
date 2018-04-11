<html>
<head>
	<title>Add Data</title>
</head>

<body>

	<a href="index.php">inicio</a><br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="30%" border="1">
			<tr> 
				<td>TITULO</td> 
				<td><input type="text" name="titulo"></td>
			</tr>
			<tr> 
				<td>SUBTITULO</td>
				<td><input type="text" name="subtitulo"></td>
			</tr>
			<tr> 
				<td>CONTENIDO</td>
				<td><input type="text" name="contenido"></td>
			</tr>
			<tr> 
				<td>CATEGORIA</td>
				<td><input type="text" name="categoria"></td>
			</tr>
			<tr> 
				<td>imagen</td>
				<td><input type="text" name="imagen"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table> 

<?php

include_once("config.php");

if(isset($_POST['Submit'])) {

	$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);
	$subtitulo = mysqli_real_escape_string($mysqli, $_POST['subtitulo']);
	$contenido = mysqli_real_escape_string($mysqli, $_POST['contenido']);
	$categoria = mysqli_real_escape_string($mysqli, $_POST['categoria']);
	$imagen = mysqli_real_escape_string($mysqli, $_POST['imagen']);
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

		$result = mysqli_query($mysqli, "INSERT INTO `blog`(`titulo`, `subtitulo`, `contenido`, `categoria`,`imagen`) VALUES('$titulo','$subtitulo','$contenido','$categoria','$imagen')");
		

		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}

?>


</body>
</html>
