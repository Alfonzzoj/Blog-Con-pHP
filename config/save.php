<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- <meta http-equiv="refresh" content="1"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <title>Blog con php </title>
</head>

<body>
    <!-- Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <a class="navbar-brand" href="../index.php">Bloggin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../admin.php">Admin <span class="sr-only">(current)</span></a>
                </li>


                <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin panel
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Crear</a>
                            <a class="dropdown-item" href="#">Mostrar</a>
                            <a class="dropdown-item" href="#">Eliminacions</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li> -->

            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div>
    </nav>
    <?php include '../database/db.php' ?>



    <div class="container p-4">
        <div class="row">
            <div class="col-md-6">

                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" name="Titulo" placeholder="Titulo del post" autofocus>
                        </div>
                        <div class="form-group">
                            <textarea class="form-group form-control" name="Descripcion" id="" rows="2" placeholder="Descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="Nombre_usuario" placeholder="Nombre de usuario">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success btn-block" type="submit" name="save" value="Crear Post">
                        </div>
                    </form>

                    <?php

                    if (isset($_POST['save'])) {
                        $title = $_POST['Titulo'];
                        $description = $_POST['Descripcion'];
                        $username = $_POST['Titulo'];

                        $query = "INSERT INTO $db_table (Titulo,Descripcion,Nombre_usuario) VALUES ('$title','$description','$username')";

                        $result = mysqli_query($conn, $query);
                        session_start();

                        $_SESSION['mensaje'] = 'Blog creado';
                        $_SESSION['mensaje_tipo'] = 'success';
                    }
                    if (isset($_SESSION['mensaje'])) { ?>

                        <div class="alert alert-<?= $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['mensaje'];  ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    session_unset();
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php include '../includes/footer.php'       ?>