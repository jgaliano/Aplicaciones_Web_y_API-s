<?php
    //CONEXION A LA BASE DE DATOS
    include('../connection.php');
    $con = connection();

    //BUSCAR CLIENTE
    $busquedaNit = $_POST['nitCliente'];

    $consultar = "select id_numeroCliente, nombreCliente, apellidoCliente, direccion from tbl_clientes where nit = '$busquedaNit'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);

    $verNumeroCliente = $row['id_numeroCliente'];
    $verNombre = $row['nombreCliente'];
    $verApellido = $row['apellidoCliente'];
    $VerDireccion = $row['direccion'];

    echo "$verNumeroCliente $verNombre $verApellido $VerDireccion";

?>