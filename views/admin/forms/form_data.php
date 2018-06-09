<body style="
        background-image: 
                url('http://localhost/WebMail/public/images/Men.jpg');">
<h2 style="font-size: 30px; color: #045A8A" class="gris">Mis datos</h2>
<br>
<form method="POST" name="form_data" action="http://localhost/WebMail/app/Http/Controllers/controller.php">

	<label style="font-size: 18px; color: #045A8A">Nombre: </label><input class="form-control button2" type="email" value="<?php echo $_SESSION['usuario']; ?>" readonly>
	<label style="font-size: 18px; color: #045A8A">Genero: </label><input class="form-control button2" type="text" value="<?php echo $_SESSION['genero']; ?>" readonly>
	<label style="font-size: 18px; color: #045A8A">Email: </label><input class="form-control button2" type="text" value="<?php echo $_SESSION['email']; ?>" readonly>
	<label style="font-size: 18px; color: #045A8A">Contraseña: </label><input class="form-control button2" type="text" value="<?php echo $_SESSION['pass']; ?>" readonly>

</form>
<br><br>