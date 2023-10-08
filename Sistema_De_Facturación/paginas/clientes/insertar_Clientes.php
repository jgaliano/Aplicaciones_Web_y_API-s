<?php

    include('../connection.php');
    $con = connection();

    $id_numeroCliente = null;
    $nit = $_POST['nit'];
    $nombreCliente = $_POST['nombre'];
    $apellidoCliente = $_POST['apellido'];
    $direccion = $_POST['direccion'];


    $insertar = "INSERT INTO tbl_clientes (nit, nombreCliente, apellidoCliente, direccion) VALUES ('$nit', '$nombreCliente', '$apellidoCliente', '$direccion')";
    $query = mysqli_query($con, $insertar);

    if($query){
        Header("Location: insertarCliente.php");
    }

?>