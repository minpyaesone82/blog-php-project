<?php require_once "core/auth.php"; ?>

<?php include "template/header.php" ?>

<div class="row"> 
                        <div class="col-12 col-xl-9">
                           <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <h5>
                                           <i class="feather-plus-circle text-primary"> 
                                               Add Post
                                           </i>
                                       </h5>
                                       <a href="<?php echo $url; ?>/post-list.php">
                                           <i class="feather-list btn btn-outline-primary"></i>
                                       </a>
                                    </div>
                                    <hr>
                                    <?php 
                                        $id = $_GET['id'];
                                        $current = post($id);
                                    ?>
                                    <?php 
                                        if(isset($_POST['post-update'])){
                                            if( postUpdate()){
                                                
                                            }
                                        }
                                    ?>
                                    <form action="" method="post">
                                        <input type="hidden" value="<?php echo $id ?>" name="id">
                                        <div class="form-group">
                                            <label for="" >Title</label>
                                            <input type="text" name ="title" required class="form-control" value="<?php echo $current['title'] ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="" >Select category</label>
                                            <Select name="category_id" id="" class="custom-select">
                                                
                                                <?php foreach(categories() as $c){ ?>
                                                    <option value="<?php echo $c['id'] ;?>" <?php echo $c['id']==$current['id']?"selected":"" ?>> <?php echo $c['title'] ;?></option>
                                                    
                                               <?php } ?>
                                            </Select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" >Description</label>
                                            <textarea type="text"  name ="description" required class="form-control" rows="4"> <?php echo $current['description'] ?></textarea>
                                        </div>
                                        <button class="btn btn-primary" name="post-update">Post Update</button>
                                    </form>
                                </div>
                                
                           </div>
                        
                        </div>
                        
                       
                    </div>

<?php include "template/footer.php"?>