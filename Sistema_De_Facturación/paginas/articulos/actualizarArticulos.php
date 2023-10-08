<?php
    include('../connection.php');
    $con = connection();

    $id =$_GET['id'];

    $consultar = "select * from tbl_articulos where id_codigoArticulo = '$id'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Actualizar Articulos</title>
</head>
<body>
    <div class="grid text-center" style="--bs-columns: 3;">
        <form action="actualizar_Articulos.php" method="POST">
            <h1>Actualizar Articulos</h1>

            <input type="text" name="id" value="<?= $row['id_codigoArticulo']?>" class="form-control form-control-sm">
            <input type="text" name="nombre" placeholder="Articulo" value="<?= $row['articulo']?>" class="form-control form-control-sm">
            <input type="text" name="pre" placeholder="Precio" value="<?= $row['precio']?>" class="form-control form-control-sm">

            <input type="submit" value="Actualizar Información" class="btn btn-primary">
        </form>
    </div>
</body>
</html>