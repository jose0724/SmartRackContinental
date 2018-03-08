<?php
$id = $_GET['id'];

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM eventos WHERE id=$id");

while($res = mysqli_fetch_array($result)) { 				

		$nombre=$res['nombre'];
		$fondo=$res['fondo'];
		$logo=$res['logo'];
		$asset=$res['asset'];
	

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
				<td>nombre</td>
				<td><input type="text" name="nombre" value= <?php echo $nombre;?> ></td>
			</tr>
			<tr> 
				<td>fondo</td>
				<td><input type="text" name="fondo" value= <?php echo $fondo?> ></td>
			</tr>
			<tr> 
				<td>logo</td>
				<td><input type="text" name="logo" value= <?php echo $logo?> ></td>
			</tr>
			<tr> 
				<td>asset</td>
				<td><input type="text" name="asset" value= <?php echo $asset?> ></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="edit"></td>
			</tr>
		</table> 

<?php

}
include_once("config.php");

if(isset($_POST['Submit'])) {

	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$fondo = mysqli_real_escape_string($mysqli, $_POST['fondo']);
	$logo = mysqli_real_escape_string($mysqli, $_POST['logo']);
	$asset = mysqli_real_escape_string($mysqli, $_POST['asset']);

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
			if(empty($asset)) {
			echo "<font color='red'>asset field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 

		$result = mysqli_query($mysqli, "UPDATE eventos SET nombre='$nombre',fondo='$fondo',logo='$logo' WHERE id=$id");
		

		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}

?>


</body>
</html>


