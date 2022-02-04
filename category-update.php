<?php require_once "core/auth.php"; ?>
<?php include "template/header.php" ?>

<div class="row"> 
                        <div class="col-12 col-xl-9">
                           <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <h5>
                                           <i class="feather-layers text-primary"> Category Edit</i>
                                       </h5>
                                       <a href="<?php echo $url; ?>/category-list.php">
                                           <i class="feather-list btn btn-outline-primary"></i>
                                       </a>
                                    </div>
                                    <hr>
                                    <?php 
                                        $id = $_GET['id'];
                                        $current = category($id);
                                    ?>
                                    <?php 
                                        if(isset($_POST['category_update'])){
                                             categoryUpdate();
                                        }
                                    ?>
                                    <form action="" method="POST">
                                        <div class="form-inline">
                                            <input type="hidden"  name ="id" value="<?php echo $id ?> ">
                                            <input type="text"  class="form-control mr-2" name="title" value="<?php echo $current['title']?>">
                                            <button class="btn btn-primary " name="category_update">Update</button>
                                        </div>
                                    </form>
                                </div>
                                
                           </div>
                        
                        </div>
                        
                       
                    </div>

<?php include "template/footer.php"?>