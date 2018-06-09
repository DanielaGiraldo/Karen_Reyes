<?php
if(isset($_GET['data'])){

	session_start();
}

include('templates/head.php');

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
			<?php include('forms/form_data.php'); ?>
		</div>
	</div>
</div>
<br>

<?php include ('templates/foot.php'); ?>
