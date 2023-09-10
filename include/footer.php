
<!-- Scripts -->


    <footer class="footer-menu"></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#categoria_seleccionada").change(function () {
            var selectedOption = $(this).find("option:selected");
            var idCategoria = selectedOption.data("id"); // Obtenemos el valor del atributo data-id

            // Actualizamos el valor del campo oculto id_cat
            $("#id_cat").val(idCategoria);
        });
    });
</script>
<!-- <script>
    // Agregar código JavaScript para ocultar la alerta después de 4 segundos
    setTimeout(function() {
      var alert = document.getElementById('myAlert');
      alert.style.display = 'none';
    }, 3000); // 4000 milisegundos (4 segundos)
</script> -->
<script>
    // Función para ocultar la alerta después de 4 segundos
    function hideAlert() {
      var alert = document.getElementById('myAlert');
      alert.style.display = 'none';
    }

    // Llamar a la función para ocultar la alerta después de 4 segundos
    setTimeout(hideAlert, 4000); // 4000 milisegundos (4 segundos)
  </script>

</html>