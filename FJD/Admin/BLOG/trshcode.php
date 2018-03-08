<?php 
	
	while($row=$bd->siguiente($result)) {
		echo "<div class=blog-grid>";
		echo "<div class=blog-wrap>";
		$titulo=$row['titulo'];
		$subtitulo=$row['subtitulo'];
		$contenido=$row'contenido'];
		$categoria=$row['categoria'];
		$id=$res['id'];


		echo "<div class=post format-quote box> <div class=frame><img src=style/images/".$id.".jpg/></a>";
		echo "<h2 class=title><a href=pag.php?id=".$id."><div>".$titulo.";?></div></a></h2><p><div>".$subtitulo.";?></div></p>";
		echo "			<div class=details>
				<span class=inset><img src=style/images/".$categoria.";?>.PNG/></span>
				<span class=icon-image><a href=#>".$row["fecha"].";?></a></span>
				<span class=likes><a href=# class=likeThis>44</a></span>
				<span class=comments><a href=#>3</a></span></div></div></div></div>";

				echo $id.$titulo.$subtitulo.$categoria;
				echo "1";



	}
	?>