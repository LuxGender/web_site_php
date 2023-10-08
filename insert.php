<?php include("config//conexion.php"); ?>
<?php include("include//header.php") ?>
<header class="header-menu">
  <div class="container" style="padding:1em;">
    <div class="row">
      <div>
        <a class="btn btn-primary" href="admin.php" role="button">Regresar
          <i class="bi bi-arrow-left"></i>
        </a>
      </div>
      <div class="header-container">
        <h3 class="color-text heading">Agregar productos</h3>
      </div>
    </div>
  </div>
</header>
<main class="container main-menu-cars" style="justify-content: center">


  <form class="row g-3" action="save_menu.php" method="POST" enctype="multipart/form-data">
    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert" id="myAlert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php session_unset();
    } ?>

    <!-- nombre -->
    <div class="col-md-6">
      <label for="inputName" class="form-label">Nombre platillo</label>
      <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Ingrese nombre de platillo">
    </div>
    <!-- precio -->
    <div class="col-md-6">
      <label for="inputPrecio" class="form-label">Precio</label>
      <input type="number" class="form-control" id="inputPrecio" name="inputPrecio" placeholder="Ingrese Precio">
    </div>
    <!-- Descripcion -->
    <div class="col-md-6">
      <label for="inputDetalle" class="form-label">Descripción/ Detalle</label>
      <input type="text" class="form-control" id="inputDetalle" name="inputDetalle" placeholder="Ingrese descripción">
    </div>
    <!-- image -->
    <div class="col-md-6">
      <label for="img_file" class="form-label">Seleccione imagen</label>
      <input type="file" class="form-control" id="img_file" name="img_file">
    </div>
    <!-- Select -->
    <div class="col-12">
      <label class="form-label" for="categoria_seleccionada">Seleccione categoria</label>

      <select class="form-select" id="categoria_seleccionada" name="categoria_seleccionada" aria-label="Default select example">
        <option selected>Seleccione categoria</option>
        <?php
        $query = "SELECT * FROM categoria";
        $result_tasks = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result_tasks)) {
        ?>
          <option value="<?php echo $row['nombre_categoria']; ?>" data-id="<?php echo $row['id_categoria']; ?>"><?php echo $row['nombre_categoria']; ?></option>
        <?php
        }
        ?>
      </select>

      <!-- hidden -->
      <label for="id_cat"></label>
      <input type="hidden" name="id_cat" id="id_cat">
    </div>
    <!-- btn guardar -->
    <div class="col-12">
      <div class="row justify-content-center">
        <div class="col" style="display:flex; justify-content:end; gap:12px;">
          <button type="submit" name="save_task" class="btn btn-primary">Guardar</button>
        </div>
        <div class="col" style="display:flex; justify-content:start; gap:12px;">
          <button type="reset" class="btn btn-primary">Limpiar formulario</button>
        </div>
      </div>
    </div>
  </form>
</main>
<?php include("include//footer.php") ?>