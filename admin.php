<?php include("include//header.php") ?>
<header class="header-menu">
    <!-- <div class="header-container">
        <h3 class="color-text">Administración</h3>
    </div> -->
    <div class="container" style="padding:1em;">
        <div class="row">
            <div>
                <a class="btn btn-primary" href="index.php" role="button">Home
                    <i class="bi bi-house-door"></i>
                </a>
            </div>
            <div class="header-container">
                <h3 class="color-text heading">Administración</h3>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- <a class="navbar-brand" href="#">Agregar</a> -->
                </li>
            </ul>
            <span class="navbar-text">
                <!-- !¡ -->
            </span>
        </div>
    </div>
</nav>
<main class="container main-menu-cars" style="justify-content: center">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="view\img\inventario.png" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center">
                    <a href="inventario.php" class="btn btn-primary">Ver inventario</a>
                    <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="view\img\agregar.png" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center">
                    <a href="insert.php" class="btn btn-primary">Agregar producto</a>
                    <!-- <p class="card-text">This is a short card.</p> -->
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="view\img\editar.png" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-center">
                    <a href="edit.php" class="btn btn-primary">Administrar roles</a>
                </div>
            </div>
        </div>
        <!-- <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->
    </div>
</main>
<?php include("include//footer.php") ?>