<?php include("include//header.php") ?>
<?php include("config//conexion.php"); ?>
<header class="header-menu">
    <!-- <div class="header-container">
        <h3 class="color-text">Inventario</h3>
    </div> -->
    <div class="container" style="padding:1em;">
            <div class="row">
                <div>
                    <a class="btn btn-primary" href="admin.php" role="button">Regresar
                    <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
                <div class="header-container">
                    <h3 class="color-text heading">Inventario</h3>
                </div>
            </div>
        </div>
</header>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- <a class="navbar-brand" href="#">Ag</a> -->
                </li>
            </ul>
            <span class="navbar-text">
                !¡
            </span>
        </div>
    </div>
</nav>
<main class="container main-menu-cars" style="justify-content: center">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoria</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <?php
        $query = "SELECT * FROM menu";
        $result_tasks = mysqli_query($conn, $query);
        if (mysqli_num_rows($result_tasks) > 0) {
            while ($row = mysqli_fetch_assoc($result_tasks)) {
        ?>
                <tbody class="table-group">
                    <tr>
                        <th scope="row"> <?php echo $row['id_menu']; ?> </th>
                        <td> <?php echo $row['nombre_menu']; ?> </td>
                        <td> <?php echo $row['precio']; ?> </td>
                        <td> <?php echo $row['descripcion']; ?> </td>
                        <td> <?php echo $row['nombre_categoria']; ?> </td>
                        <td> <i type="button" class="bi bi-pencil-square btn"></i> </td>
                        <td> <i type="button" class="bi bi-trash3 btn"></i> </td>
                    </tr>
                </tbody>
        <?php
            }
        } else {
            echo '<i class="bi bi-cart-x bi-lg" style="font-size: 35px !important;">No se encontraron registros.</i>';
        }
        ?>
    </table>

</main>
<?php include("include//footer.php") ?>