
<div class="col-12 col-md-4">
            <div id="front-panel-right-sidebar">
            <div class="card ">
                    <div class="card-body">
                        <?php if(isset($_SESSION['users']['name'])) { ?>
                       <p class="mb-0"> Hi <b><?php echo $_SESSION['users']['name'] ;?></b></p>
                        <?php }else { ?>
                            Please log in here <a href="<?php echo $url ?>/login.php"  class="btn btn-primary">Sign in </a>
                        <?php }?>
                    </div>
                </div>
            <h4 class="my-2">Category List</h4>
            <div class="list-group">
            <a href="<?php echo $url; ?>/index.php" class="list-group-item list-group-item-action active ">
                All Categories
            </a>
                <?php foreach (fCategory( ) as $c ) {?>
                    <a href="category-based-post.php?id=<?php echo $c[ 'id'] ;?>" class="list-group-item list-group-item-action button_active">
                    <?php if($c['ordering']==1){?>
                        <i class="feather-paperclip"></i>
                    <?php }?>
                    <?php echo $c['title'] ;?>
                </a>
                <?php } ?>
        
            <div class="">
                <h4 class="my-3">Search By Date</h4>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="searchByDate.php" method="post">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" required class="form-control" name="start">
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" required class="form-control" name="end">
                            </div>
                            <button class="btn btn-primary">
                                <i class="feather-calendar"></i> Search
                            </button>
                        </form>
                    </div>
                </div>
            </div>      
        </div>  