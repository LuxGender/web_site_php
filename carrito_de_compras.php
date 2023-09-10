<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="view/styles/normalize.css" />
  <link rel="stylesheet" type="text/css" href="view/styles/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="body-menu">
  <header class="header-menu">
    <div class="container" style="padding:1em;">
      <div class="row">
        <div>
          <a class="btn btn-primary" href="menu.php" role="button">¡Se te antoja algo mas!
            <i class="bi bi-emoji-wink"></i>
          </a>
        </div>
        <div class="header-container">
          <h3 class="color-text">Carrito de compras</h3>
        </div>
      </div>
    </div>
  </header>
  <main class="container main-menu-cars">

    <div class="container-table">
      <table class="table table-success table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Pollo al limón</td>
            <td>Q.15.00</td>
            <td>2</td>
            <td>2</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2"></td>
            <td>1</td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td colspan="2"></td>
            <td>2</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="btn-confirmar-cars">
        <button type="button" class="btn btn-primary">Confirmar pedido</button>
      </div>
    </div>
  </main>
  <footer class="footer-menu"></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</html>