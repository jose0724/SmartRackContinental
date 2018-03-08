<html>
<head>
	<title>Add Data</title>
</head>

<body>

	<a href="index.php">inicio</a><br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="30%" border="1">
			<tr> 
				<td>nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>fondo</td>
				<td><input type="text" name="fondo"></td>
			</tr>
			<tr> 
				<td>logo</td>
				<td><input type="text" name="logo"></td>
			</tr>
			<tr> 
				<td>menu</td>
				<td><input type="text" name="menu"></td>
			</tr>
			<tr> 
				<td>g1</td>
				<td><input type="text" name="g1"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>

		</table> 



<?php

include_once("config.php");

if(isset($_POST['Submit'])) {

	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$fondo = mysqli_real_escape_string($mysqli, $_POST['fondo']);
	$logo = mysqli_real_escape_string($mysqli, $_POST['logo']);
	$menu = mysqli_real_escape_string($mysqli, $_POST['menu']);
	$g1 = mysqli_real_escape_string($mysqli, $_POST['g1']);

	if(empty($nombre) || empty($fondo) || empty($logo)) {
				
		if(empty($nombre)) {
			echo "<font color='red'>nombre field is empty.</font><br/>";
		}
		
		if(empty($fondo)) {
			echo "<font color='red'>fondo field is empty.</font><br/>";
		}
		
		if(empty($logo)) {
			echo "<font color='red'>logo field is empty.</font><br/>";
		}
			if(empty($menu)) {
			echo "<font color='red'>menu  field is empty.</font><br/>";
		}
		if(empty($g1)) {
			echo "<font color='red'>menu field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 

		

		$result = mysqli_query($mysqli, "INSERT INTO `eventos`(`nombre`, `fondo`, `logo`, `menu`, `g1`) VALUES('$nombre','$fondo','$logo','$menu', '$g1')");
		echo $nombre, $fondo, $logo, $menu, $g1 ;

		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}

?>


</body>
</html>
