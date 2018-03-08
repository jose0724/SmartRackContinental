<?php

include_once("config.php");


$id = mysqli_real_escape_string($mysqli, $_GET['id']);
$id = $_GET['id'];
echo $id;

$resultevento = mysqli_query($mysqli, "SELECT * FROM eventos where nombre='$id'");



if (isset($resultevento)) {
while($res = mysqli_fetch_array($resultevento)) {
  $fondo=$res['fondo'];
  $logo=$res['logo'];
  $menu=$res['menu'];
  echo $fondo;
}
}else{
  $resultevento = mysqli_query($mysqli, "SELECT * FROM eventos where g1='1'");
  while($res = mysqli_fetch_array($resultevento)) {
  $fondo=$res['fondo'];
  $logo=$res['logo'];
  $menu=$res['menu'];

  echo $fondo;
}


}




$result = mysqli_query($mysqli, "SELECT * FROM Blog where categoria='$id'");

?>
<html>
<head>
    <style type="text/css">
    
    body {
    font-family: "Lato", sans-serif;
    <?php
    echo "background-image: url(/proyectofinal/imgs/".$fondo.".jpg);";
    ?>
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
  background-color:rgba(40,40,40,0.5);   
  width: 50%; 
  border-collapse: collapse; 
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

	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/proyectofinal/index.php"><img src="/proyectofinal/imgs/icono.gif" width="100px" height="100px"></a>
  <a href="/proyectofinal/contacto.php">Contacto</a>
  <a href="/proyectofinal/nosotros.php">Nosotros</a>
  <a><strong> Categorias : </strong></a>
  <a href="/proyectofinal/categoriapag.php?id=futuro"><img class="cat" src="/proyectofinal/imgs/futuro.png">Futuro</a>
  <a href="/proyectofinal/categoriapag.php?id=ciencia"><img class="cat" src="/proyectofinal/imgs/ciencia.png">Ciencia</a>
  <a href="/proyectofinal/categoriapag.php?id=militar"><img class="cat" src="/proyectofinal/imgs/militar.png">Militar</a>
  <a href="/proyectofinal/categoriapag.php?id=social"><img class="cat" src="/proyectofinal/imgs/social.png">social</a>
  <a href="/proyectofinal/categoriapag.php?id=industria"><img class="cat" src="/proyectofinal/imgs/industria.png">Industria</a>
  <a href="/proyectofinal/categoriapag.php?id=politica"><img class="cat" src="/proyectofinal/imgs/politica.png">Politica</a>
  <a href="/proyectofinal/categoriapag.php?id=transporte"><img class="cat" src="/proyectofinal/imgs/transporte.png">Transporte</a>
  <a href="/proyectofinal/categoriapag.php?id=habitad"><img class="cat" src="/proyectofinal/imgs/habitad.png">habitad</a>
  <a href="/proyectofinal/categoriapag.php?id=economia"><img class="cat" src="/proyectofinal/imgs/economia.png">Economia</a>
  <a href="/proyectofinal/categoriapag.php?id=Cultura"><img class="cat" src="/proyectofinal/imgs/cultura.png">Cultura</a>



</div>



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
<?php echo  "<span style=font-size:30px;cursor:pointer onclick=openNav()><img src=/proyectofinal/imgs/".$logo.".jpg width=50px height=50px> Menu</span> ";
?>

<center>

<div class="menu">
  <h1> <?php
    echo "<img src=/proyectofinal/imgs/".$menu.".png width=200px height=30px position=center >";
    ?> </h1>
</div>

</center>
<center>


<?php 
  
  while($res = mysqli_fetch_array($result)) {
    echo "<table><tr>";
    echo "<p>";
    echo "<center><td><a href=/proyectofinal/pag.php?id=".$res['id']."> ".$res['titulo']."<p><img src=/proyectofinal/imgs/".$res["imagen"].".png width=100px height=100px position=center ><hr></td></tr><tr></a></center>";
    echo "<p>";
    echo "<td> ".$res["subtitulo"]." </td></tr><tr>"; 
    echo "<p>";
    echo "<td><img src=/proyectofinal/imgs/".$res["categoria"].".png width=40px height=40px > </td>";
    echo "</tr><tr><td></td>";
    echo "<P></tr></table> <p><div></div><p><br>  ";

  }

  ?>

</center>

</body>
</html>