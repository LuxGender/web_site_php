<?php
    class Categoria extends Conectar{
        /* GET */
        public function get_categoria(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        /* POST */
        public function get_categoria_x_id($cat_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1 AND cat_id= ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        /* insert menu */
        public function insert_menu($id_menu,$nombre_menu,$precio,$descripcion,$id_categoria,$nombre_categoria){
            $inputName = $_POST['inputName'];
            $inputPrecio = $_POST['inputPrecio'];
            $inputDetalle = $_POST['inputDetalle'];
            $categoria_seleccionada = $_POST['categoria_seleccionada'];
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO menu(id_menu,nombre_menu,precio,descripcion,id_categoria,nombre_categoria) VALUES (NULL,?,?,?,?,?)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id_menu);
            $sql->bindValue(2, $nombre_menu);
            $sql->bindValue(3, $precio);
            $sql->bindValue(4, $descripcion);
            $sql->bindValue(5, $id_categoria);
            $sql->bindValue(6, $nombre_categoria);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        /* update/actualizar */
        public function update_categoria($cat_id,$cat_nom,$cat_obs){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_categoria set
                cat_nom = ?,
                cat_obs = ?
                WHERE
                cat_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_nom);
            $sql->bindValue(2, $cat_obs);
            $sql->bindValue(3, $cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        /* delete/ eliminar */
        public function delete_categoria($cat_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_categoria set
                est = '0'
                WHERE
                cat_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cat_id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>