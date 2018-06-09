<?php

if(isset($_SESSION['genero'])){
	$genre = $_SESSION['genero'];

                if ($genre == 'hombre') {
						echo '<img src="http://localhost/webmail/public/images/hombre.png" style="margin-left: 800px" class="img-email">';
					}elseif($genre == 'mujer'){
						echo '<img src="http://localhost/webmail/public/images/mujer.png" style="margin-left: 800px" class="img-email">';
					}
			    } 
?>