<?php include("config//conexion.php"); ?>
<?php include("include//header.php") ?>
<header class="header-menu">
  <div class="container" style="padding:1em;">
    <div class="row">
      <div>
        <a class="btn btn-primary" href="index.php" role="button">Home
          <i class="bi bi-house-door"></i>
        </a>
      </div>
      <div class="header-container">
        <h3 class="color-text heading">Ingrese sus datos para registrarse</h3>
      </div>
    </div>
  </div>
</header>
<style>
  html,
  body {
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 100vh;
    font-family: 'Numans', sans-serif;
  }
</style>
<main class="container-lg main-menu text-center d-flex alig-item-center p-4">
  <form action="guardar_resgistro.php" method="POST" class="row p-4" style="background-color: rgba(0,0,0,0.5) !important;">
    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert" id="myAlert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php session_unset();
    } ?>

    <!-- first name -->
    <div class="col-md-6 mt-3">
      <label for="name_u" class="form-label color-text">Nombre *</label>
      <input type="text" class="form-control" id="name_u" name="name_u" placeholder="Ingrese su nombre">
    </div>
    <!-- second name -->
    <div class="col-md-6 mt-3">
      <label for="apellido_u" class="form-label color-text">Apellido *</label>
      <input type="text" class="form-control" id="apellido_u" name="apellido_u" placeholder="Ingrese su nombre">
    </div>
    <!-- nit -->
    <div class="col-md-6 mt-3">
      <label for="nit" class="form-label color-text">Nit *</label>
      <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese su NIT">
    </div>
    <!-- telefono -->
    <div class="col-md-6 mt-3">
      <label for="telefono" class="form-label color-text">Teléfono *</label>
      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su número teléfono">
    </div>
    <!-- gmail -->
    <div class="col-md-6 mt-3">
      <label for="gmail_u" class="form-label color-text">Gmail *</label>
      <input type="gmail" class="form-control" id="gmail_u" name="gmail_u" placeholder="Ingrese su correo electrónico">
    </div>
    <!-- password -->
    <div class="col-md-6 mt-3">
      <label for="password_us" class="form-label color-text">Password *</label>
      <input type="password" class="form-control" id="password_us" name="password_us" placeholder="Crea una contraseña">
    </div>
    <!-- checks -->
    <div class="col-md-12 d-flex align-items-center justify-content-center mt-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="check_us" id="flexCheckIndeterminate">
        <label class="form-check-label color-text" for="check_us">
          Aceptar y confirmar datos *
        </label>
      </div>
    </div>
    <!-- btn submit -->
    <div class="col-12" style="padding:1rem">
      <button type="submit" class="btn btn-primary color-text" name="save_task_registro">Registrar datos</button>
      <button class="btn btn-secondary" type="reset">Limpiar formulario</button>
    </div>
    <!-- btn submit -->
    <div class="col-12">
      <a class="btn btn-primary" href="login.php">Tengo cuenta</a>
    </div>
  </form>
</main>

<?php include("include//footer.php") ?>