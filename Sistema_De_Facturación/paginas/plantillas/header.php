<?php 
    $url_base = "http://localhost:3000/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Facaturación</title>
</head>
<body>
    <header>

    </header>
    <nav>
       <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $url_base?>">Inicio</a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo $url_base?>paginas/facturacion/ventas.php">Facturación</a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo $url_base?>paginas/empleados/insertarEmpleado.php">Empleados</a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo $url_base?>paginas/clientes/insertarCliente.php">Clientes</a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo $url_base?>paginas/articulos/insertarArticulos.php">Articulos</a>
            </li>
       </ul>
    </nav>
    <main class="container">