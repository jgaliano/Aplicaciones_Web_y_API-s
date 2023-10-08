<?php
    //CONEXION A LA BASE DE DATOS
    include('../connection.php');
    $con = connection();

    //BUSCAR CLIENTE
    $busquedaCodigoArticulo = $_POST['codigo'];

    $consultar = "select id_codigoArticulo, articulo, precio from tbl_articulos where id_codigoArticulo = '$busquedaCodigoArticulo'";
    $query = mysqli_query($con, $consultar);
    // $row = mysqli_fetch_array($query);

    // $verCodigoArticulo = $row['id_codigoArticulo'];
    // $verArticulo = $row['articulo'];
    // $verPrecio = $row['precio'];

    // echo "$verCodigoArticulo $verArticulo $verPrecio";
    echo "<table class='table'>
        <tr>
        <th><th>
        <th><th>
        <th><th>
        </tr>";
        while($row = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$row['id_codigoArticulo']."</td>";
            echo "<td>".$row['articulo']."</td>";
            echo "<td>".$row['precio']."</td>";
            echo "<td><input type='number' min='1' max='100'></td>";
            echo "<td> <a href='#' class='btn btn-success btn-sm'> Agregar </a></td>";
            echo "</tr>";
        }
    echo"</table>";

?>