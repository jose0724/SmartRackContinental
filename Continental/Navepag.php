<?php

include_once("config.php");


$id = mysqli_real_escape_string($mysqli, $_GET['id']);
$id = $_GET['id'];


$user = 6; 


//$result1 = mysqli_query($mysqli, "SELECT * FROM area where idNave='$id'");
//while($res = mysqli_fetch_array($result1)) {
//$u=$res['idNave'];

//if($user==$u || $user=='6'){

  

//}else{

  echo "No Tienes acceso";
 // break;
//}
//}





?>
<html>
<head>
    <style type="text/css">
    
    body {
    font-family: "Lato", sans-serif;
    height: 100%; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


@media only screen and (max-device-width: 1024px) {
    body {
        background-attachment: scroll;
    }
} 

table {
  text-align: center;
  background-color:rgba(200,200,200,0.7);   
  width: 80%; 
 overflow-x: auto;
  border: blue 5px solid;

}
.tt {
  text-align: center;
  background-color:rgba(200,200,200,0.6);   
  width: 100%; 
 overflow-x: auto;
}
.tt table{
    text-align: center;
  background-color:rgba(200,200,200,0.5);   
  width: 100%; 
 overflow-x: auto;
  border: blue 5px solid;
}

  </style>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>

<link rel="stylesheet" type="text/css" media="all" href="style.css" />
  <title></title>



<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<body background="1.jpg">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/Continental/index.php"><img src="/Continental/imgs/logo.png" width="100px" height="100px"></a>
    <a href="/Continental/ContinetalTijera.php">Index</a>
    <a><strong> Categorias : </strong></a>
    <a href="/Continental/pag.php?id=1"><img class="cat" src="/Continental/imgs/logo.png" width="50px" height="50px">Nave 1</a>
    <a href="/Continental/pag.php?id=2"><img class="cat" src="/Continental/imgs/logo.png" width="50px" height="50px">Nave 2</a>
    <a href="/Continental/pag.php?id=3"><img class="cat" src="/Continental/imgs/logo.png" width="50px" height="50px">Nave 3</a>
    <a href="/Continental/pag.php?id=4"><img class="cat" src="/Continental/imgs/logo.png" width="50px" height="50px">Nave 4</a>
    <a href="/Continental/pag.php?id=5"><img class="cat" src="/Continental/imgs/logo.png" width="50px" height="50px">Nave 5</a>

</div>

<?php echo  "<span style=font-size:30px;cursor:pointer onclick=openNav()><img src=/Continental/imgs/logo.png width=50px height=50px> Menu</span> ";
?>



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<link rel="stylesheet" type="text/css" media="all" href="style.css" />
</head>
<body>

<center>

<div class="menu">
  <h1> <?php  
    echo "<img src=/Continental/imgs/logo.png width=20px height=20px position=center >";
    ?> </h1>
</div>

</center>
<center> 


<table width='80%' border=0>

  <tr bgcolor='#CCCCCC'>
    <td>Magazine number : </td>
    <td>Area Id : </td>
    <td>Serial : </td>
    <td>Fifo : </td>
    <td>Car :</td>
    <td>Level:</td>
    <td>Idstatus :</td>
    <td>Mantemiento :</td>
    <td>Family:</td>
    <td>More info :</td>
  </tr>
  <?php 
  $result = mysqli_query($mysqli, "SELECT * FROM Magazine where idArea='$id'");
  
  while($res = mysqli_fetch_array($result)) {     
    echo "<td>".$res['IdMagazine']."</td>";
    echo "<td>".$res['idArea']."</td>";
    echo "<td>".$res["beacomSerial"]."</td>"; 
    echo "<td>".$res["idfifo"]."</td>";
    echo "<td>".$res["idcar"]."</td>";
    echo "<td>".$res["level"]."</td>";
    echo "<td>".$res["idstatus"]."</td>";
    echo "<td>".$res["mant"]."</td>";
    echo "<td>".$res["idfamily"]."</td>";
    echo "<td><a href=\"rack.php?id=$res[IdMagazine]\">info</a></td>";

  }
  ?>
  </table>

</center>


  

</table>
</div>


</body>
</html>