<?php
    include('../connection.php');
    $con = connection();

    $id_codigoArticulo = $_POST['id'];
    $articulo = $_POST['nombre'];
    $precio = $_POST['pre'];

    $actualizar = "UPDATE tbl_articulos SET articulo = '$articulo', precio = '$precio' WHERE id_codigoArticulo = '$id_codigoArticulo'";
    $query = mysqli_query($con,$actualizar);

    if($query){
        Header("Location: insertarArticulos.php");
    }

?>