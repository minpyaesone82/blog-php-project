<?php require_once "front-panel/head.php" ;?>
<?php require_once "front-panel/front-header.php" ;?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white my-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo category($_GET['id'])['title'] ;?></li>
                </ol>
            </nav> 
            
            <?php foreach (fPostByCat($_GET['id']) as $fc ) {?>  
                <div class="card shadow-sm post my-3">
                    <div class="card-body">
                        <a href="detail.php?id=<?php echo $fc['id'] ;?>">
                            <h4 class="text-primary"> 
                                <?php echo $fc['title'] ?>
                            </h4>
                        </a>
                        <div class="d-flex align-items-center justify-content-start mb-3">
                                        <div style="font-size:25px;"> <i class="feather-user"></i></div>
                                      <div style="font-size: 10px;" class="ml-1">
                                      <?php echo user( $fc['user_id'])['name'];?> 

                                      <i class="feather-layers text-primary ml-1"></i>
                                        <?php echo category( $fc['category_id'])['title'];?>
                                    
                                        <br>
                                        <i class="feather-calendar text-primary"></i>
                                        <?php echo date("j M Y", strtotime($fc['created_at'])); ?>
                                      </div>
                                    </div>
                
                         <p><?php echo short(html_entity_decode($fc['description'])) ;?></p>
                    </div>
                </div>
                <?php } ?>
            
        </div>  
        <?php require_once "RightSidebar.php" ?>
    </div>
</div>

<?php require_once "front-panel/footer.php" ;?>