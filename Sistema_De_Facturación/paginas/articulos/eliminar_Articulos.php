<?php
    include('../connection.php');
    $con = connection();

    $id = $_GET['id'];

    $eliminar = "DELETE FROM tbl_articulos WHERE id_codigoArticulo='$id'";
    $query = mysqli_query($con, $eliminar);

    if($query){
        Header("Location: insertarArticulos.php");
    }

?>