<?php include 'includes/header.php'; ?>
<div class="container p-5">

    <div class="card card-body">
        <form action="signup.php" method="post">

            <!--  -->
            <div class="form-group">
                <label for="Username">Username</label>
                <input id="Username" class="form-control" type="text" placeholder="Username" name="username">
            </div>
            <!--  -->
            <div class="form-group">

                <label for="Password">Password</label>
                <input id="Password" class="form-control" type="password" placeholder="Password" name="password">
                <!--  -->

                <label for="Password">Confirm password</label>
                <input id="confirm_password" class="form-control" type="password" placeholder="Confirm password" name="confirm_password">
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-2" name="signup">Sign up</button>
            <?php include 'database/db_users.php'; ?>

            <?php
            if ($_POST['Password'] == $_POST['confirm_password']) {
                echo "CONTRAS IGUALES ";
                if (isset($_POST['signup'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query = "INSERT INTO $db_table (username,password) VALUES ('$username','$password')";
                    $result = mysqli_query($connection, $query);
                    if (isset($result)) {
                        echo "se supone que se guardo ";
                        # code...
                    }
                }
            } else {
                echo "CONTRAS diferentes ";
            }   ?>
    </div>
    </form>

</div>

<?php include 'includes/footer.php'       ?>