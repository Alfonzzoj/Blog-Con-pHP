<?php include 'includes/header.php'; ?>
<div class="container p-5">

    <div class="card card-body">
        <form action="check_login.php" method="post">

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
                <input id="Password" class="form-control" type="password" placeholder="Password" name="password">

            </div>
            <button type="submit" class="btn btn-primary btn-block mb-2">Sign up</button>

    </div>
    </form>

</div>

</div>
<?php include 'includes/footer.php'       ?>