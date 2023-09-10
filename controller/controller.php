<?php

    header('Content-Type: application/json');

    require_once("..//config//conexion.php");
    require_once("..//model//model.php");
    $categoria = new Categoria();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetAll": //servicio creado con el nombre de GetAll
            $datos=$categoria->get_categoria();
            echo json_encode($datos);
        break;

        /* GET ID */
        case "GetId":
            $datos=$categoria->get_categoria_x_id($body["cat_id"]);
            echo json_encode($datos);
        break;

        /* insert cat_nom and cat_obs */
        case "insert":
            $datos=$categoria->insert_menu($body["cat_nom"],$body["cat_obs"]);
            echo "Insert Correcto";
        break;

        /*  UPDATE*/
        case "Update":
            $datos=$categoria->update_categoria($body["cat_id"],$body["cat_nom"],$body["cat_obs"]);
            echo "Update Correcto";
            // echo json_encode("Update correcto");
        break;

        /* Delete */
        case "Delete":
            $datos=$categoria->delete_categoria($body["cat_id"]);
            echo "Delete Correcto";
            // echo json_encode("Update correcto");
        break;
    }
?>