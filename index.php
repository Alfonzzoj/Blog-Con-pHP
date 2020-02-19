<?php include'includes/header.php'       ?>
    <!-- Main -->
    
    <!-- POST CARD -->
        <div class="container">
            <div class="card mb-3 bg-dark text-white" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/1.png" class=" card-img rounded-circle i">
                    </div>

                    <div class="col-md-8"> 
                        <div class="card-header card-title"><?php     echo $dato[2];  ?></div>
                        <div class="card-body">
                            <p class="card-text"><?php     echo $dato[3];  ?></p>
                            <a class="btn btn-secondary" href="#" role="button">View details »</a>
                            <p class="card-text"><small class="text-muted">Last updated <?php     echo $dato[4];  ?> - <a href="#"><?php     echo $dato[1];  ?></a></small></p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div >
<?php include'includes/footer.php'       ?>