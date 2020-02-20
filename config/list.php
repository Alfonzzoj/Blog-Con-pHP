<?php include '../database/db.php'       ?>
<?php include '../includes/header.php'       ?>

<!-- Main -->

<!-- POST CARD -->
<div class="container p-4">
    <div class="row">

    </div>
</div>
</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titulo post</th>
                <th>Descripcion Post</th>
                <th>Usuario</th>
                <th>Fecha de creacion</th>
                <th>Accciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $query = "SELECT * FROM $db_table";
            $result_post = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result_post)) { ?>
                <tr>
                    <td><? echo $row['Titulo'] ?></td>
                    <td><? echo $row['Descripcion'] ?></td>
                    <td><? echo $row['Nombre_usuario'] ?></td>
                    <td><? echo $row['Fecha'] ?></td>
                    <td><a href="update.php?id=<?php echo $row['id'] ?>">Edit </a><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>

                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>
</div>

</div>



<?php include '../includes/footer.php'       ?>