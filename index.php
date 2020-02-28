<?php include 'database/db_posts.php';       ?>
<?php include 'views/header.php';       ?>

<!-- Main -->
<!-- POST CARD -->
<div class="container p-4">
    <div class="row ">
        <div class="col-md-12 blockquote text-center">
            <h3 class="display-3">
                Bloggin dashboard
            </h3>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            <div class="card mb-3 bg-dark text-white media" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4 pt-5">
                        <img src="source/img/1.png" class=" card-img rounded-circle i align-self-center mr-3">
                    </div>

                    <div class="col-md-8">
                        <div class="card-header card-title">
                            <?php $query = "SELECT * FROM $db_table";
                            $result_post = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result_post)) { ?>
                                <?php echo $row['Titulo'];  ?></div>
                        <div class="card-body media-body">
                            <p class="card-text"><?php echo $row['Descripcion'];  ?></p>
                            <a class="btn btn-secondary form-control" href="#" role="button">View details »</a>
                            <p class="card-text"><small class="text-muted">Last updated <?php echo $row['Fecha'];  ?> - <a href="#"><?php echo $row['Nombre_usuario'];  ?></a></small></p>
                        <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expfefsedfedita aspernatur explicabo architecto doloribus, est quo repellat aliquid officia praesentium molestiae magni, nesciunt eligendi. Esse, quos ab sit nam quibusdam repellat?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisadasdsdhil tempora nam magnam dolorum nulla sint non fugiasadsdsat omnis itaque, ducimus eius quam laborum perferendis ab ea temporibus impedit, mollitia assumenda.
            <hr>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est minus quae cumque necessitatibus assumenda dolores, quidem provident neque quaerat architecto qui animi similique consequatur magnam doloremque, repellendus at voluptatibus quia!
        </div>
    </div>

</div>



<?php include 'views/footer.php'       ?>