<?php

    include('../connection.php');
    $con = connection();

    $id_codigoArticulo = null;
    $articulo = $_POST['nombre'];
    $precio = $_POST['pre'];


    $insertar = "INSERT INTO tbl_articulos (articulo, precio) VALUES ('$articulo', '$precio')";
    $query = mysqli_query($con, $insertar);

    if($query){
        Header("Location: insertarArticulos.php");
    }

?>