
<?php

session_start();
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $username = $_POST["username_login"];
    $password = $_POST["password_login"]; // Corregí el nombre del campo de contraseña
    $recordar = isset($_POST["recordar_estado"]) && $_POST["recordar_checkbox"] === '1';

    // Verificar si el checkbox de recordar está marcado
    if ($recordar) {
        // Establecer cookies para recordar al usuario y contraseña (ajusta el tiempo según tus necesidades)
        setcookie("usuario", $username, time() + 2600, "/");
        setcookie("contrasena", $password, time() + 2600, "/");
    }

    // Realizar la conexión a la base de datos (reemplaza con tus propios valores)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "restaurant";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta SQL para verificar si el usuario existe
    // $sql = "SELECT * FROM cliente WHERE username = ? AND password = ?";
    $sql = "SELECT * FROM cliente WHERE gmail = ? AND contrasena_us = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // Verificar si se encontraron resultados
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            // Usuario válido, redirigir a la página de inicio
            header("Location: index.php");
            exit;
        } else {
            // Usuario inválido, mostrar un mensaje de error
            // $error_message = "Usuario o contraseña incorrectos.";
            // header("Location: login.php");
            $_SESSION['message'] = 'Usuario o contraseña incorrectos';
            $_SESSION['message_type'] = 'danger';
            header('Location: login.php');
        }
    } else {
        echo "Error en la consulta: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
