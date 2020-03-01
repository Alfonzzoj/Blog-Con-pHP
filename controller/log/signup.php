<?php include '../../views/header.php';
session_start();
session_destroy();
?>
<div class="container p-5">

    <div class="card card-body">
        <form action="signup.php" method="post" name="registro">

            <!--  -->
            <div class="form-group">
                <label for="Username">Username</label>
                <input id="Username" class="form-control" type="text" placeholder="Username" name="username" required>
            </div>
            <!--  -->
            <div class="form-group">

                <label for="Password">Password</label>
                <input id="Password" class="form-control" type="password" placeholder="Password" name="password" required>
                <!--  -->

                <label for="confirm_password">Confirm password</label>
                <input id="confirm_password" class="form-control" type="password" placeholder="Confirm password" name="confirm_password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-2" name="signup">Sign up</button>
            <?php include '../../database/db_users.php'; ?>

            <?php

            if (isset($_POST['signup'])) {
                $username            = $_POST['username'];
                $password            = $_POST['password'];
                $confirm_password    = $_POST['confirm_password'];
                $pass_cifrada        = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO $db_table (username,password) VALUES ('$username','$pass_cifrada')";
                $result = mysqli_query($connection, $query);

                $_SESSION['mensaje_users'] = 'Usuario guardado';
                $_SESSION['mensaje_color'] = 'success';
            }
            if (isset($_SESSION['mensaje_users'])) { ?>

                <div class="alert alert-<?= $_SESSION['mensaje_color']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje_users'];  ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            session_unset();
            ?>

    </div>
    </form>

</div>

<?php include '../../views/footer.php'       ?>