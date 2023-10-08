<?php include("config//conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="view/styles/normalize.css" type="text/css" rel="stylesheet" />
    <link href="view/styles/styles.css" type="text/css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="body-menu">
    <header class="header-menu">
        <div class="container" style="padding:1em;">
            <div class="row">
                <div>
                    <a class="btn btn-primary" href="index.php" role="button">Home
                        <i class="bi bi-house-door"></i>
                    </a>
                </div>
                <div class="header-container">
                    <h3 class="color-text heading">Selección de menu</h3>
                </div>
            </div>
        </div>
    </header>
    <main class="container main-menu">
        <aside class="aside-left">
            <div class="">
                <button class="btn btn-primary btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    Ver mas opciones
                    <i class="bi bi-justify"></i>
                </button>

                <div class="offcanvas offcanvas-start" data-bs-scroll="false" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header back-mod">
                        <h5 class="offcanvas-title color-text" id="offcanvasWithBothOptionsLabel">
                            Seleccione opcion
                        </h5>
                        <button type="button" class="btn-close close-modal" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <?php
                        $query = "SELECT * FROM categoria";
                        $result_tasks = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result_tasks) > 0) {
                            while ($row = mysqli_fetch_assoc($result_tasks)) {
                        ?>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <!-- empieza aqui -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $row['id_categoria']; ?>" aria-expanded="false" aria-controls="flush-collapseOne<?php echo $row['id_categoria']; ?>">
                                                <!-- Accordion Item #1 -->
                                                <?php echo $row['nombre_categoria']; ?>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne<?php echo $row['id_categoria']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <a href="">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- termina aqui -->
                                </div>
                        <?php
                            }
                        } else {
                            echo '<i class="bi bi-cart-x bi-lg" style="font-size: 35px !important;">No se encontraron registros.</i>';
                        }
                        ?>
                    </div>
                </div>

            </div>
            <!-- carrito de compras -->
            <div>
                <a href="carrito_de_compras.php" type="button" class="btn btn-primary position-relative">
                    <!-- <a href="carrito_de_compras.html"></a> -->
                    Carrito de compras
                    <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <i class="bi bi-cart4"></i>
                </a>
            </div>
        </aside>

        <section class="mb-4 section-menu">
            <div class="container text-center card" style="padding: 1em">
                <div class="row justify-content-md-center gy-4">
                    <?php
                    $query = "SELECT * FROM menu";
                    $result_tasks = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result_tasks) > 0) {
                        while ($row = mysqli_fetch_assoc($result_tasks)) {
                    ?>
                            <!-- CARD 1 -->
                            <div class="col-lg-4 col-md-auto col-sm-auto">
                                <div class="row gy-4 card-image">
                                    <!-- <h3>Pollo a la francesa</h3> -->
                                    <h3 id="nombre-mne"><?php echo $row['nombre_menu']; ?></h3>
                                    <div class="img-container">
                                        <img class="img-card" src="<?php echo $row['img_menu']; ?>" alt="img" />
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle-<?php echo $row['id_menu']; ?>" data-bs-toggle="modal">
                                            Ver detalle <?php echo $row['id_menu']; ?>
                                        </button>
                                        <div class="modal fade" id="exampleModalToggle-<?php echo $row['id_menu']; ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header back-mod">
                                                        <h2 class="modal-title fs-5 color-text" id="exampleModalToggleLabel">
                                                            Usted selecciono <strong><?php echo $row['nombre_menu']; ?></strong>
                                                        </h2>
                                                        <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <h4 class="title-img">
                                                                <?php echo $row['nombre_menu']; ?>
                                                            </h4>
                                                            <p>
                                                                <strong>Descripcion:</strong> <?php echo $row['descripcion']; ?>
                                                                <br>
                                                                <strong>Precio:</strong> <?php echo $row['precio']; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer back-mod">
                                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                                                            Ordenar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header back-mod">
                                                        <h1 class="modal-title fs-5 color-text" id="exampleModalToggleLabel2">
                                                            Cantidad
                                                        </h1>
                                                        <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <!-- contenedor de modal agregar pedidos -->
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="">Ingrese cantidad</label>
                                                                    <input type="number" />
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer back-mod">
                                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                                                            Regresar
                                                        </button>
                                                        <button class="btn btn-primary" data-bs-target="#" data-bs-toggle="modal">
                                                            Agregar orden
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo '<i class="bi bi-cart-x bi-lg" style="font-size: 35px !important;">No se encontraron registros.</i>';
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="mb-4 section-pagination">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section>
    </main>
    <footer class="footer-menu"></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</html>