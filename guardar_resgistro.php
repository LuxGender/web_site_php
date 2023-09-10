<?php include("config//conexion.php");

$name_u = isset($_POST['name_u']) ? $_POST['name_u'] : '';
$apellido_u = isset($_POST['apellido_u']) ? $_POST['apellido_u'] : '';
$nit = isset($_POST['nit']) ? $_POST['nit'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$gmail_u = isset($_POST['gmail_u']) ? $_POST['gmail_u'] : '';
$password_us = isset($_POST['password_us']) ? $_POST['password_us'] : '';

// Verificar si los campos requeridos están vacíos
if (empty($name_u) || empty($apellido_u) || empty($nit) || empty($telefono) || empty($gmail_u) || empty($password_us)) {
    //echo "Por favor, complete todos los campos requeridos.";
    $_SESSION['message'] = 'Por favor, complete todos los campos requeridos.';
    $_SESSION['message_type'] = 'warning  ';
    header('Location: registro.php');
} else {
    // Crear una conexión a la base de datos (reemplaza con tus datos de conexión)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "restaurant";

    // Intenta conectar a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Crear una consulta preparada
    // $query = "INSERT INTO menu (id_menu, nombre_menu, precio, descripcion, telefonoegoria, nombre_categoria) VALUES (null, ?, ?, ?, ?, ?)";
    $query = "INSERT INTO cliente (id_cliente, nombre, apellido, nit, telefono, gmail, contrasena_us) VALUES (NULL, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {

        // Vincular los parámetros
        // mysqli_stmt_bind_param($stmt, "sssiss", $name_u, $apellido_u, $nit, $telefono, $gmail_u, $password_us);
        mysqli_stmt_bind_param($stmt, "ssssss", $name_u, $apellido_u, $nit, $telefono, $gmail_u, $password_us);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            // La inserción fue exitosa
            // echo "Inserción exitosa.";
            $_SESSION['message'] = 'Registro guardado con éxito';
            $_SESSION['message_type'] = 'success  ';
            header('Location: login.php');
        } else {
            // La inserción falló
            $_SESSION['message'] = 'Error al insertar en la base de datos' . mysqli_error($conn);
            $_SESSION['message_type'] = 'danger ';
            header('Location: registro.php');
        }

        // Cerrar la consulta preparada
        mysqli_stmt_close($stmt);
    } else {
        //echo "Error en la preparación de la consulta: " . mysqli_error($conn);
        $_SESSION['message'] = 'Error en la preparación de la consulta' . mysqli_error($conn);
        $_SESSION['message'] = 'Registro guardado con éxito';
        $_SESSION['message_type'] = 'danger ';
        header('Location: registro.php');
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
}
