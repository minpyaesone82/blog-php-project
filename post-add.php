<?php require_once "core/auth.php"; ?>

<?php include "template/header.php" ?>

<?php 
    if(isset($_POST['post_add'])){
        echo postAdd();
    }
?>
<form class="row" method="post"> 
    <div class="col-12 col-xl-8">
                           <div class="card shadow">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <h5>
                                           <i class="feather-plus-circle text-primary"> 
                                               Create New Post
                                           </i>
                                       </h5>
                                       <a href="<?php echo $url; ?>/post-list.php">
                                           <i class="feather-list btn btn-outline-primary"></i>
                                       </a>
                                    </div>
                                    <hr>
                                   
                                   
                                        <div class="form-group">
                                            <label for="" >Title</label>
                                            <input type="text" name ="title" required class="form-control">
                                        </div>
                                        
                                        <div class="form-group mb-0">
                                            <label for="" >Description</label>
                                            <textarea type="text" id="summer" name ="description" required class="form-control" rows="11"> </textarea>
                                        </div>
                                    
                                </div>
                                
                           </div>
                        
    </div> 
    <div class="col-12 col-xl-4">
        <div class="card shadow">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>
                    <i class="feather-layers text-primary"> Select category
                    </i>
                </h5>
                <a href="<?php echo $url; ?>/category-create.php">
                    <i class="feather-list btn btn-outline-primary"></i>
                </a>
            </div>
            <hr>
            <div class="form-group">
                        <?php foreach(categories() as $c){ ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category_id" id="flexRadioDefault1" value="<?php echo $c['id'] ;?>">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <?php echo $c['title'] ;?>
                                </label>
                            </div> 
                        <?php } ?>
                </div>
                
                <button class="btn btn-primary" name="post_add">Add Post</button>
            </div>
        </div>
    </div>  
                
</form>

<?php include "template/footer.php"?>
<script>
    $('#summer').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 200,
    });
</script>