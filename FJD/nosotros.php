<?php

include_once("config.php");
  
$result = mysqli_query($mysqli, "SELECT * FROM Blog order by rand()");
$salida= 0;


  $resultevento = mysqli_query($mysqli, "SELECT * FROM eventos where g1='1'");
  while($res = mysqli_fetch_array($resultevento)) {
  $fondo=$res['fondo'];
  $logo=$res['logo'];
  $menu=$res['menu'];
}


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
  background-color:rgba(80,40,120,0.4);   
  width: 50%; 
  border-collapse: collapse; 
   overflow-x: auto;
}
.tt table{
    text-align: center;
  background-color:rgba(40,40,40,0.5);   
  width: 100%; 
 overflow-x: auto;
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

<?php echo  "<span style=font-size:30px;cursor:pointer onclick=openNav()><img src=/proyectofinal/imgs/".$logo.".jpg width=50px height=50px> Menu</span> ";
?>


<center>

<div class="menu">
  <h1> <?php
    echo "<img src=/proyectofinal/imgs/".$menu.".png width=200px height=30px position=center >";
    ?> </h1>
</div>

<div class="sidenavl">
 <table class="tt">
  <?php 
  
    while($res = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<p>";
    echo "<center><td><a href=/proyectofinal/pag.php?id=".$res['id'].">".$res['titulo']."<p><img src=/proyectofinal/imgs/".$res["imagen"].".png width=100px height=100px position=center ></td></tr><tr></a></center>";
    echo "<p>";
    echo "<td>".$res["subtitulo"]."</td></tr><tr>"; 
    echo "<p>";
    echo "<td><img src=/proyectofinal/imgs/".$res["categoria"].".png width=30px height=30px > <hr></td>";
    echo "</tr><tr>";
    $salida=$salida+1;

    if ($salida==3) {
      break;
    }
  }
  ?>
</table>
</div>
</center>

 <div class="content box">
<table><tr><td>
  <h1 class="title">Nosotros</h1>
    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2219.7900854773334!2d-103.4185895672202!3d20.660339723054086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ac278395d3eb%3A0x1caefeb7a2907f85!2sUniversidad+del+Valle+de+Atemajac!5e0!3m2!1ses!2smx!4v1508878515198" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<h3>Quienes somos</h3>

<div class="form-container">
  <form class="forms" action="#" method="post">
    <fieldset>
      <ol>
       <li>
         Somos un blog donde se publican diariamente noicias, escritos, etc. de diferentes temas.
         el objetivo principal del blog es difundir conocimientos que no se hablan mucho o resultan temas tabus
         

       </li>
      </ol>
    </fieldset>
  </form>
</div>
</div>
</td></tr></table>

 </center>
  <a href="#top"><p align=center><strong>Ir al cielo</strong></a></p>
</center>
</body>
</html> 