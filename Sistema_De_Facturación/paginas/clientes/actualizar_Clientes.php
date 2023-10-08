<?php
    include('../connection.php');
    $con = connection();

    $id_numeroCliente = $_POST['id'];
    $nit = $_POST['nit'];
    $nombreCliente = $_POST['nombre'];
    $apellidoCliente = $_POST['apellido'];
    $direccion = $_POST['direccion'];


    $actualizar = "UPDATE tbl_clientes SET nit = '$nit', nombreCliente = '$nombreCliente', apellidoCliente = '$apellidoCliente', direccion = '$direccion' WHERE id_numeroCliente = ' $id_numeroCliente'";
    $query = mysqli_query($con,$actualizar);

    if($query){
        Header("Location: insertarCliente.php");
    }

?>