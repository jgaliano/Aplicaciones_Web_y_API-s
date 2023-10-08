<?php
    include('../connection.php');
    $con = connection();

    $id = $_GET['id'];

    $eliminar = "DELETE FROM tbl_clientes WHERE id_numeroCliente='$id'";
    $query = mysqli_query($con, $eliminar);

    if($query){
        Header("Location: insertarCliente.php");
    }

?>