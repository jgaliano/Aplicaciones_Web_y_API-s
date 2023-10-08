<?php
    include('../connection.php');
    $con = connection();

    $consultar ="select * from tbl_articulos";

    $query = mysqli_query($con, $consultar);
    
    include("../../paginas/plantillas/header.php");
?>

    <div class="grid text-center" style="--bs-columns: 3;">
        <form action="insertar_Articulos.php" method="POST">
            <h1 class="text-center">CREAR ARTICULO</h1>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="nombre" placeholder="Articulo" class="form-control">
                </div>
                <div class="col">
                    <input type="text" name="pre" placeholder="Precio" class="form-control">
                </div>
                <input type="submit" value="Agregar articulo" class="btn btn-info">
            </div>
        </form>
    </div>

    <div  class="grid text-center" style="--bs-columns: 3;">
        <h2>ARTICULOS REGISTRADOS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Articulo</th>
                    <th scope="col">Precio Articulo</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['id_codigoArticulo'] ?> </th>
                        <th> <?= $row['articulo'] ?> </th>
                        <th> <?= $row['precio'] ?> </th>

                        <th ><a href="actualizarArticulos.php?id= <?= $row['id_codigoArticulo']?>"class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Actualizar</a></th>
                        <th><a href="eliminar_Articulos.php?id= <?= $row['id_codigoArticulo']?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


<?php include("../../paginas/plantillas/footer.php"); ?>