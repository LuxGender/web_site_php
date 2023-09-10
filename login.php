<?php include("../page_restaurant/select_login.php"); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="view/styles/login.css">
</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3 class="color-text">Iniciar sesion</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<!-- password and btn sumit -->
				<div class="card-body">

					<form action="select_login.php" method="POST">
						<!-- usuario -->
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="username_login" placeholder="username">

						</div>
						<!-- contraseña -->
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" name="password_login" placeholder="password">
						</div>
						<!-- <div class="row align-items-center remember">
							<input type="checkbox">Recordar en este dispositivo
						</div> -->
						<div class="row align-items-center remember">
							<input type="checkbox" id="recordar_checkbox" name="recordar_usuario"> Recordar en este dispositivo
						</div>
						<input type="hidden" id="recordar_estado" name="recordar_estado" value="0">

						<!-- btn login -->
						<div class="form-group">
							<input type="submit" value="Ingresar" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						¿No tienes cuenta?<a href="registro.php">Registrate</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">¿Olvidaste tu contraseña?</a>
					</div>
				</div>
				<?php if (isset($_SESSION['message'])) { ?>
					<div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert" id="myAlert">
						<?= $_SESSION['message'] ?>
					</div>
				<?php session_unset();
				} ?>
			</div>

		</div>
	</div>
</body>
<script>
	// Agregar código JavaScript para ocultar la alerta después de 4 segundos
	setTimeout(function() {
		var alert = document.getElementById('myAlert');
		alert.style.display = 'none';
	}, 3000); // 4000 milisegundos (4 segundos)
</script>
<script>
    const recordarCheckbox = document.getElementById('recordar_checkbox');
    const recordarEstado = document.getElementById('recordar_estado');

    recordarCheckbox.addEventListener('change', function() {
        if (this.checked) {
            recordarEstado.value = '1'; // Marcado
        } else {
            recordarEstado.value = '0'; // No marcado
        }
    });
</script>
<script>
    window.addEventListener('load', function() {
        const usuarioCookie = getCookie("usuario");
        const contrasenaCookie = getCookie("contrasena");

        if (usuarioCookie && contrasenaCookie) {
            document.getElementById('username_login').value = usuarioCookie;
            document.getElementById('password_login').value = contrasenaCookie;
            document.getElementById('recordar_checkbox').checked = true;
        }
    });

    function getCookie(nombre) {
        const valor = `; ${document.cookie}`;
        const partes = valor.split(`; ${nombre}=`);
        if (partes.length === 2) return partes.pop().split(';').shift();
    }
</script>


</html>