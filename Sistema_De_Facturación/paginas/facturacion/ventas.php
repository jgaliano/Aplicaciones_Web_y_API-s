<?php

    //incluisr cavbecera
    include("../../paginas/plantillas/header.php");

    //conexión a la base de datos
    include('../connection.php');
    $con = connection();

    //D4terminar el encavezado factura
    date_default_timezone_set('America/Guatemala');
    $fechaActual =date("d-m-Y");
    $horaActual = date("h:i:s");
    
    //Consultar No de Factura
    $consultar = "select id_numeroFactura from tbl_facturas order by id_numeroFactura desc limit 1;";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);

    $no_Factura = $row['id_numeroFactura']+1;
?>

<div class="container text-center">
    <div class="row align-items-start">
        <h2>NUEVA VENTA</h2>
        <div class="col">
            <h4>Encabezado Factura</h4>
            <form action="">
                <label for="">No. Factura: <?= $no_Factura ?></label><br>
                <label for="">Fecha: <?= $fechaActual ?></label><br>
                <label for="">Hora: <?= $horaActual ?></label><br>
            </form>
        </div>
        <div class="col">
            <h4>Datos del cliente</h4>
            <form id="formCliente" action="verCliente.php" method="POST">
                <input type="text" placeholder="NIT" name="nitCliente">
                <button type="button" name="buscarCliente" id="buscarCliente" class="btn btn-primary">Buscar Cliente</button>
            </form>

            <div id="verCliente">

            </div>
        </div>
    </div>
    <script>
        //Codigo para buscar CLIENTE
        $('#buscarCliente').click(function(e){
            $.ajax({
                url:"verCliente.php",
                type:"POST",
                data: $("#formCliente").serialize(),

                success: function(resultado){
                    $("#verCliente").html(resultado);
                }
            });
        });
    </script>
    <br>
    <div>
        <form action="">
            <button class="btn btn-success">Facturar</button>
            <button class="btn btn-danger">Anular Factura</button>
        </form>
    </div>
        <br><br>
    <div>
        <h4>Detalle Factura</h4>
        <div>
            <form id="formArticulo" method="POST" action="verArticulo.php">
                <input type="text" name="codigo" placeholder="Codigo">
                <button type="button" id="buscarArticulo" class="btn btn-primary">Buscar Articulo</button>
            </form>

            <div id="verArticulo">

            </div>
        </div>
    </div>
        <br>
        <br>
    <script>
        //Codigo para buscar ARTICULO
        $('#buscarArticulo').click(function(e){
            $.ajax({
                url:"verArticulo.php",
                type:"POST",
                data: $("#formArticulo").serialize(),

                success: function(resultado){
                    $("#verArticulo").html(resultado);
                }
            });
        });
    </script>

    <div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Codigo Ariticulo</th>
                    <th>Descripción Articulo</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Cantidad</th>
                    <th>Accion</th>
                </tr>
            </thead>

            <tbody>
            
            </tbody>

        </table>
    </div>

</div>