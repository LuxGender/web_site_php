<?php
    // class Conectar{
    //     protected $dbh;

    //     protected function Conexion(){
    //         try{
    //             $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=restaurant","root","");
    //             return $conectar;
    //         } catch (Exception $e){
    //             print "¡Error BD!: " . $e->getMessage() . "<br/>";
    //             die();
    //         }
    //     }

    //     public function set_names(){
    //         return $this->dbh->query("SET NAMES 'utf8'");
    //     }
    // }
    session_start();

    $servername = "localhost";  // Reemplaza con el nombre de tu servidor de base de datos
    $username = "root";   // Reemplaza con tu nombre de usuario de MySQL
    $password = ""; // Reemplaza con tu contraseña de MySQL
    $database = "restaurant"; // Reemplaza con el nombre de tu base de datos
    
    // Intenta conectar a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

?>