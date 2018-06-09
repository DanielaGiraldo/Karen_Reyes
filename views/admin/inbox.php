<?php 
//Encabezado de la pagina
include ('templates/head.php');
//validar errores
if(isset($_GET['error'])){
	include ('errors/errors.php');
}
?>

<div class="container spacing-top">
	
		<div class="col-4">

			<center>
				
				<figure>
					<?php include('partials/genre.php') ?>	
				</figure>

			</center>

		</div>

		<div class="col-8 bg-dark">

				<?php 
				if(isset($_SESSION['usuario'])){
					echo '<h2 style="margin-left: 200px" class="title-h1">Bienvenid@: <i>', $_SESSION['usuario']. '</i></h2>';
				}
				?>	
		</div>
		<br>
		<div>
			<?php include('forms/form_inb.php'); ?>
		</div>
	
</div>

<?php include ('templates/foot.php'); ?>