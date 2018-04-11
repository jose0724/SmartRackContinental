<?php

include_once("config.php");


$user = mysqli_real_escape_string($mysqli, $_GET['user']);
$user = $_GET['user'];
  
$result = mysqli_query($mysqli, "SELECT * FROM nave order by 'idNave'");
$salida= 0;




?>


<html>
<head>
  <style type="text/css">
    body {
    height: 100%; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: black;
    font-color: white;
}


@media only screen and (max-device-width: 1024px) {
    body {
        background-attachment: scroll;
    }
} 
table {
  text-align: center;
  background-color:rgba(41,41,41,0.3);   
  width: 30%; 
  border-collapse: collapse; 
   overflow-x: auto;
   font-color: #ffffff;
}
.clearfix {
    overflow: auto;
}
  </style>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "1";
}
</script>




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


  <div class="clearfix">
 <center>
  <?php 
  
    while($res = mysqli_fetch_array($result)) {
    echo "<table><tr>";
    echo "<p>";
    echo "<center><td><a href=/Continental/pag.php?id=".$res['idNave']."user=".$user.">".$res['areaName']."<img src=/Continental/imgs/logo.png width=40px height=40px position=center></td></tr><tr></a></center>";
    echo "<td> Personal a cargo : ".$res["personal"]."</td></tr><tr>"; 
    echo "</tr><tr><td></td>";
    echo "</table>";

    
  }
  
  ?>

</div>




  <a href="#top"><p align=center><strong>go Top</strong></a></p>
</center>
</body>
</html> 