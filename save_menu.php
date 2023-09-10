<?php include("config//conexion.php"); 

$inputName = isset($_POST['inputName']) ? $_POST['inputName'] : '';
$inputPrecio = isset($_POST['inputPrecio']) ? $_POST['inputPrecio'] : '';
$inputDetalle = isset($_POST['inputDetalle']) ? $_POST['inputDetalle'] : '';
$id_cat = isset($_POST['id_cat']) ? $_POST['id_cat'] : '';
$categoria_seleccionada = isset($_POST['categoria_seleccionada']) ? $_POST['categoria_seleccionada'] : '';
$nombre_archivo = $_FILES['img_file']['name'];
$ubicacion_temporal = $_FILES['img_file']['tmp_name'];

// Verificar si los campos requeridos están vacíos
if (empty($inputName) || empty($inputPrecio) || empty($inputDetalle) || empty($id_cat) || empty($categoria_seleccionada) || empty($nombre_archivo)) {
    $_SESSION['message'] = 'Por favor, complete todos los campos requeridos.';
    $_SESSION['message_type'] = 'warning';
    header('Location: insert.php');
} else {
    // Intenta conectar a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Mover el archivo cargado al directorio de destino
    $target_dir = "view\img"; // Reemplaza con la ruta adecuada
    $target_file = $target_dir . uniqid() . '_' . basename($_FILES['img_file']['name']);

    if (move_uploaded_file($_FILES['img_file']['tmp_name'], $target_file)) {
        // La imagen se ha movido exitosamente, ahora puedes guardar la ruta en la base de datos
        $img_file = $target_file;

        // Crear una consulta preparada
        $query = "INSERT INTO menu (id_menu, nombre_menu, precio, descripcion, id_categoria, nombre_categoria, img_menu) VALUES (null, ?, ?, ?, ?, ?, ?)";
        
        // Preparar la consulta
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "sssiss", $inputName, $inputPrecio, $inputDetalle, $id_cat, $categoria_seleccionada, $img_file);

            // Ejecutar la consulta
            if (mysqli_stmt_execute($stmt)) {
                // La inserción fue exitosa
                $_SESSION['message'] = 'Registro guardado con éxito';
                $_SESSION['message_type'] = 'success';
                header('Location: insert.php');
            } else {
                // La inserción falló
                $_SESSION['message'] = 'Error al insertar en la base de datos: ' . mysqli_error($conn);
                $_SESSION['message_type'] = 'danger';
                header('Location: insert.php');
            }

            // Cerrar la consulta preparada
            mysqli_stmt_close($stmt);
        } else {
            $_SESSION['message'] = 'Error en la preparación de la consulta: ' . mysqli_error($conn);
            $_SESSION['message_type'] = 'danger';
            header('Location: insert.php');
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
    } else {
        // Error al mover el archivo
        $_SESSION['message'] = 'Error al subir la imagen.';
        $_SESSION['message_type'] = 'danger';
        header('Location: insert.php');
    }
}

// ALTER TABLE menu AUTO_INCREMENT=1;