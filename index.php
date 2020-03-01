<?php include 'database/db_posts.php';       ?>
<?php include 'views/header.php';       ?>

<!-- Main -->
<!-- POST CARD -->
<div class="container p-4">
    <div class="row ">
        <div class="col-md-12 blockquote text-center">
            <h3 class="display-3 pt-5">
                Bloggin dashboard
            </h3>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            <hr>
        </div>
    </div>

    <?php $query = "SELECT * FROM $db_table";
    $result_post = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result_post)) { ?>
        <div class="row">
            <div class="col-md-8">
                <!-- CARD POST  -->
                <div class="card mb-3 bg-dark text-white media" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <!-- CARD IMG POST -->
                        <div class="col-md-4 pt-2">
                            <img src="/source/img/1.png" class=" card-img rounded-circle i align-self-center mr-3">
                        </div>
                        <!-- CARD TEXT POST -->
                        <div class="col-md-8">
                            <div class="card-header card-title">
                                <?php echo $row['Titulo'];  ?>
                            </div>
                            <div class="card-body media-body">
                                <p class="card-text"><?php echo $row['Descripcion'];  ?></p>
                                <a class="btn btn-secondary form-control" href="#" role="button">View details »</a>
                                <p class="card-text"><small class="text-muted">Last updated <?php echo $row['Fecha'];  ?> - <a href="#"><?php echo $row['Nombre_usuario'];  ?></a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expfefsedfedita aspernatur explicabo architecto doloribus, est quo repellat aliquid
                <hr>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est minus quae cumque necessitatibus assumenda dolores, quidem provident neque quaerat architecto qui animi similique consequatur magnam doloremque, repellendus at voluptatibus quia!
            </div>

        </div>
    <?php } ?>

</div>



<?php include 'views/footer.php'       ?>