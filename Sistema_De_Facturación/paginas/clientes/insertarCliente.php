<?php 

    include('../connection.php');
    $con = connection();

    $consultar ="select * from tbl_clientes";

    $query = mysqli_query($con, $consultar);

    include("../../paginas/plantillas/header.php");
?>


<div class="grid text-center" style="--bs-columns: 3;">
        <form action="insertar_Clientes.php" method="POST">
            <h1 class="text-center">AGREGAR CLIENTE</h1>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="nit" placeholder="NIT" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                </div>
                <div class="col">
                    <input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="direccion" placeholder="Dirección" class="form-control" required>
                </div>
                <input type="submit" value="Agregar Cliente" class="btn btn-info">
            </div>
        </form>
    </div>

    <div  class="grid text-center" style="--bs-columns: 3;">
        <h2>CLIENTES REGISTRADOS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nit</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['id_numeroCliente'] ?> </th>
                        <th> <?= $row['nit'] ?> </th>
                        <th> <?= $row['nombreCliente'] ?> </th>
                        <th> <?= $row['apellidoCliente'] ?> </th>
                        <th> <?= $row['direccion'] ?> </th>

                        <th ><a href="actualizarCliente.php?id= <?= $row['id_numeroCliente']?>"class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Actualizar</a></th>
                        <th><a href="eliminar_Clientes.php?id= <?= $row['id_numeroCliente']?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


<?php include("../../paginas/plantillas/footer.php"); ?>