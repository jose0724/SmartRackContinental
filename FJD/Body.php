<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM Blog ORDER BY id DESC");
$salida= 0;



?>


<html>
<head>
  <meta charset="utf-8">
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
	background-color:rgba(80,40,120,0.4); 	
  width: 40%; 
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


</head>
<body background="1.jpg">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/proyectofinal/index.php"><img src="/proyectofinal/imgs/icono.gif" width="100px" height="100px"></a>
  <a href="/proyectofinal/Index.php">Inicio</a>
  <a href="/proyectofinal/buscador.php">Buscador</a>
  <a><strong> Naves : </strong></a>
  <a href="/proyectofinal/categoriapag.php?id=futuro"><img class="cat" src="/proyectofinal/imgs/futuro.png">Nave 1</a>
  <a href="/proyectofinal/categoriapag.php?id=ciencia"><img class="cat" src="/proyectofinal/imgs/ciencia.png">Nave 2</a>
  <a href="/proyectofinal/categoriapag.php?id=militar"><img class="cat" src="/proyectofinal/imgs/militar.png">Nave 3</a>
  <a href="/proyectofinal/categoriapag.php?id=social"><img class="cat" src="/proyectofinal/imgs/social.png">Nave 4</a>
  <a href="/proyectofinal/categoriapag.php?id=industria"><img class="cat" src="/proyectofinal/imgs/industria.png">Industria</a>
  <a href="/proyectofinal/categoriapag.php?id=politica"><img class="cat" src="/proyectofinal/imgs/politica.png">Politica</a>
  <a href="/proyectofinal/categoriapag.php?id=transporte"><img class="cat" src="/proyectofinal/imgs/transporte.png">Transporte</a>
  <a href="/proyectofinal/categoriapag.php?id=habitad"><img class="cat" src="/proyectofinal/imgs/habitad.png">habitad</a>
  <a href="/proyectofinal/categoriapag.php?id=economia"><img class="cat" src="/proyectofinal/imgs/economia.png">Economia</a>
  <a href="/proyectofinal/categoriapag.php?id=Cultura"><img class="cat" src="/proyectofinal/imgs/cultura.png">Cultura</a>

</div>

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

<div>
FJD
<P>
Personaliza tu placer.<P>
Activa tus sentidos.
<P>
Recuerdo.<P>
Podemos replicar tu gusto favorito, recuerda a ese amigo.<P>
<P>
Extasís<P>
Replicamos cada detalle para una mayor sensacion de realidad y placer.<P>
<P>
Amor platonico<P>
Te gustaria sentir a tu mayor idolo.<P>
Nosotros podemos conseguirlo, con total discreción claro esta.<P>
<P>
Total Garantía de total discreción.<P>
Los envios y el manejo de los articulos, asi como tus datos personales, tus pagos. son totalmente seguros y discretos al momento de comprar con nosotros.<P>
<P>
 " Nadie Tiene por que enterarse 😏 o sí "<P>
<P>
 Recuerda el placer es tuyo y de nadie mas, no dejes que te lo quite nadie.<P>
 <P>
</div>
	
	
	<a href="#top"><p align=center><strong>Ir al cielo</strong></a></p>
</center>
</body>
</html> 