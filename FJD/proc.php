<?php

include_once("config.php");


$q=$_POST["q"];

$result = mysqli_query($mysqli, "SELECT * from blog where contenido LIKE '%".$q."%'");


echo utf8_decode($q);



while($res = mysqli_fetch_array($result)) {
    echo "<table><tr>";
    echo "<center><td>".$res['titulo']."<p><hr></td></tr><tr><td><div class=jt>- ".$res["subtitulo"]."</div>    <p><img src=/proyectofinal/imgs/".$res["imagen"].".png width=100px height=100px position=fixed ></td></tr><tr></center>";
    echo "<p>";
    echo "<td><div class=jt> ".$res["contenido"]."-</div> </td></tr><tr>"; 
    echo "<p>";
    echo "<td><img src=/proyectofinal/imgs/".$res["categoria"].".png width=40px height=40px > </td>";
    echo "</tr><tr><td></td>";
    echo "<P></tr></table> <p><div></div>";

  }


  $result2 = mysqli_query($mysqli, "SELECT * from blog where titulo LIKE '".$q."%'");

  while($res = mysqli_fetch_array($result2)) {
    echo "<table><tr>";
    echo "<center><td>".$res['titulo']."<p><hr></td></tr><tr><td><div class=jt>- ".$res["subtitulo"]."</div>    <p><img src=/proyectofinal/imgs/".$res["imagen"].".png width=100px height=100px position=fixed ></td></tr><tr></center>";
    echo "<p>";
    echo "<td><div class=jt> ".$res["contenido"]."-</div> </td></tr><tr>"; 
    echo "<p>";
    echo "<td><img src=/proyectofinal/imgs/".$res["categoria"].".png width=40px height=40px > </td>";
    echo "</tr><tr><td></td>";
    echo "<P></tr></table> <p><div></div>";

  }

  $result3 = mysqli_query($mysqli, "SELECT * from blog where subtitulo LIKE '".$q."%'");

  while($res = mysqli_fetch_array($result3)) {
    echo "<table><tr>";
    echo "<center><td>".$res['titulo']."<p><hr></td></tr><tr><td><div class=jt>- ".$res["subtitulo"]."</div>    <p><img src=/proyectofinal/imgs/".$res["imagen"].".png width=100px height=100px position=fixed ></td></tr><tr></center>";
    echo "<p>";
    echo "<td><div class=jt> ".$res["contenido"]."-</div> </td></tr><tr>"; 
    echo "<p>";
    echo "<td><img src=/proyectofinal/imgs/".$res["categoria"].".png width=40px height=40px > </td>";
    echo "</tr><tr><td></td>";
    echo "<P></tr></table> <p><div></div>";

  }

?>