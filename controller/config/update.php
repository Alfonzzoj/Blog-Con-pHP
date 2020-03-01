<?php
include '../../views/header_loged.php';
include '../../database/db_posts.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM $db_table WHERE id=$id";
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
    }
}
if (isset($_POST['update'])) {
    $id          = $_GET['id'];
    $titulo      = $_POST['Titulo'];
    $descripcion = $_POST['descripcionu'];

    $query = "UPDATE $db_table set Titulo='$titulo',Descripcion='$descripcion' WHERE id=$id";
    session_start();
    $_SESSION['message'] = 'Task Updated';
    $_SESSION['message_type'] = 'warning';
    mysqli_query($conn, $query);
    header("Location: list.php");
}
?>
<div class="container p-2 mt-5 pt-5">

    <div class="card card-body col-md-6 mx-auto">
        <form action="update.php?id=<?php echo $_GET['id'];  ?>" method="post">
            <div class="container ">
                <div class="row">
                    <img src="img/2.png" alt="" style="width: 6rem;" class=" rounded-circle d-block  mx-auto mb-4">
                </div>
            </div>

            <!-- 1 -->
            <div class="form-group">
                <label for="Titulo">Titulo</label>
                <input id="titulo" class="form-control" placeholder="Update Title" type="text" name="Titulo" value="<? echo $row['Titulo']; ?>">
            </div>
            <!-- 2 -->
            <div class="form-group">

                <label for="Post">Post</label>
                <textarea class="form-control" placeholder="Update Description" type="text" rows="10" name="descripcionu"><? echo $row['Descripcion']; ?></textarea>
            </div>
            <!-- 3 -->

            <button name="update" class="btn btn-primary btn-block mb-2">Update post</button>

        </form>

    </div>
    <div class="col-md-4"></div>


</div>
<?php include '../../views/footer.php';      ?>