<?php
	include('bd.php');
	$bd=new bd('localhost','root','','blog');

	$con=$bd->conectar();
	$id="";
	if(isset($_GET["id"])&&$_GET["id"]!="")
	{
		$id=$_GET["id"];
		$params = array("i", $_GET["id"]);
		$as=$bd->prepareQuery("select * from blog where blog_id=?",$params);
	}


	if(isset($_POST["guardar"])&&$_POST["guardar"]==1)
	{
		if($id!="")
		{
			if(isset($_POST["contenido"]) && $_POST["contenido"]!="")
			{
				$bd->squery("update blog titulo='".$_POST["titulo"]."',subtitulo='".$_POST["subtitulo"]."',contenido='".$_POST["contenido"]."' where id='".$id."'");
			}
			else
			{
				$bd->squery("update blog set titulo='".$_POST["titulo"]."',subtitulo='".$_POST["subtitulo"]."' where id='".$id."'");
			}
			
		}
		else
		{
			$bd->squery("insert into blog (id,titulo,subtitulo,contenido,fecha) values ('".$_POST["id"]."','".$_POST["titulo"]."','".$_POST["subtitulo"]."','".$_POST["contenido"]."',".time().")");
		}
		
		?>
		<script>document.location=document.location;</script>
		<?php

	}

	$result=$bd->squery("select * from blog");
?>
<link rel="stylesheet" type="text/css" href="css/paw.css">
<script src="js/jquery-1.12.4.js"></script>
<div>
	<input type="text" name="busqueda" placeholder="Busqueda" id="buscar">

</div>
<div class="lista">
<?php
if(isset($_GET["id"])&&$_GET["id"]!="")
	{
		$id=$_GET["id"];
	foreach ($blog as $key => $value) {
		$titulo=$value["titulo"];
		$subtitulo=$value["subtitulo"]; 
		?>
		<div class="blog editado">
			<div>Editando</div>
			<div>titulo: <div><?php echo $titulo;?></div> </div>
			<div>subtitulo: <div><?php echo $subtitulo;?></div> </div>
			
		</div>
		<?php
	}
}
else
{
	$titulo="";
	$subtitulo="";
}
?>
<?php
	while($row=$bd->siguiente($result))
	{
		?>
		<div class="blog">
			<div>titulo: </div>
			<div><?php echo $row["titulo"];?></div>
			<div>subtitulo: </div>
			<div><?php echo $row["subtitulo"];?></div>
			<div><a href="PawDB.php?id=<?php echo $row["id"];?>">Editar</a></div>
			<div><a class="eliminar" data-id="<?php echo $row["id"];?>" style="cursor:pointer;">Eliminar</a></div>
		</div>
		<?php
	}

?>

</div>
<div>
	<form method="post" action="PawDB.php<?php echo($id!=""?"?id=".$id:"");?>">
		<input type="hidden" name="guardar" value="3">
		<input type="text" name="titulo" placeholder="titulo" value="<?=$titulo;?>">
		<input type="text" name="subtitulo" placeholder="subtitulo" value="<?=$subtitulo;?>">
		<input type="text" name="contenido" placeholder="contenido">
		<input type="submit" name="submit">
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){                       
        
        $("body").on("click",".eliminar",function(e){  
        	var id=$(this).data("id");
            alert("Elimnado el id: "+id);                                                                                                                    
              $.ajax({
                    type: "POST",
                    url: "ajax/eliminaras.php",
                    data: "id="+id,
                    dataType: "html",
                    success: function(data){ 
                    	alert("Eliminado Exitosamente");                                                   
                          $(".lista").empty();
                          $(".lista").html(data);                                
                    }
              });

        });

        $("body").on("keyup","#buscar",function(e){ 
        	var busqueda=$(this).val();                                                                                                                    
              $.ajax({
                    type: "POST",
                    url: "ajax/buscaras.php",
                    data: "busqueda="+busqueda,
                    dataType: "html",
                    success: function(data){                                                    
                          $(".lista").empty();
                          $(".lista").html(data);                                
                    }
              });

        });

       

        
                                                                   
});
</script>