<?php
$id = $_GET['id'];

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($res = mysqli_fetch_array($result)) { 		
		

		$user=$res['user'];
		$Password=$res['Password'];
		$Nombre=$res['Nombre'];
		$Correo=$res['Correo'];
	

?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>

	<a href="index.php">inicio</a><br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>user</td>
				<td><input type="text" name="user" value= <?php echo $user;?> ></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="Password" value= <?php echo $Password?> ></td>
			</tr>
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="Nombre" value= <?php echo $Nombre?> ></td>
			</tr>
			<tr> 
				<td>Correo</td>
				<td><input type="text" name="Correo" value= <?php echo $Correo?> ></td>
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

	$user = mysqli_real_escape_string($mysqli, $_POST['user']);
	$Password = mysqli_real_escape_string($mysqli, $_POST['Password']);
	$Nombre = mysqli_real_escape_string($mysqli, $_POST['Nombre']);
	$Correo = mysqli_real_escape_string($mysqli, $_POST['Correo']);

	if(empty($user) || empty($Password) || empty($Nombre)) {
				
		if(empty($user)) {
			echo "<font color='red'>user field is empty.</font><br/>";
		}
		
		if(empty($Password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		if(empty($Nombre)) {
			echo "<font color='red'>Nombre field is empty.</font><br/>";
		}
			if(empty($Correo)) {
			echo "<font color='red'>Correo field is empty.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 

		$result = mysqli_query($mysqli, "UPDATE blog SET user='$user',Password='$Password',Nombre='$Nombre' WHERE id=$id");
		

		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}

?>


</body>
</html>


