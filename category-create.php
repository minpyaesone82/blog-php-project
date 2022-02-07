<?php require_once "core/auth.php"; ?>
<?php include "core/isEditor&Admin.php" ?>
<?php include "template/header.php" ?>

<div class="row"> 
                        <div class="col-12 ">
                           <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <h5>
                                           <i class="feather-layers text-primary"> Category Manger</i>
                                       </h5>
                                       <a href="<?php echo $url; ?>/category-list.php">
                                           <i class="feather-list btn btn-outline-primary"></i>
                                       </a>
                                    </div>
                                    <hr>
                                    <?php 
                                        if(isset($_POST['category_btn'])){
                                            categoryAdd();
                                        }
                                    ?>
                                    <form action="" method="post">
                                        <div class="form-inline">
                                            <input type="text"  class="form-control mr-2 mb-2" name="title">
                                            <button class="btn btn-primary mb-2 " name="category_btn">Add Category</button>
                                        </div>
                                    </form>
                                    <br>
                                    <table id="list" class="table  table-striped table-hover table-bordered table-responsive-md"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>User</th>
                                                <th>Created_at</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach (categories() as $c) {
                                                    $time = date("j M Y", strtotime($c['created_at']));
                                               
                                            
                                            ?>

                                            <tr class="<?php echo $c['ordering']==1 ? 'table-info':'' ?>">
                                                <td><?php echo $c["id"] ?></td>
                                                <td><?php echo $c["title"] ?></td>
                                                <td><?php echo user($c['user_id'])['name'] ?></td>
                                                <td><?php echo $time    ?></td>
                                                <td class="text-nowrap">
                                                <a href='category-del.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-outline-danger "><i class="feather-trash-2 "></i></a>
                                                <a href='category-update.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-outline-warning"><i class="feather-edit"></i></a>
                                                <?php  if($c['ordering'] !=1) { ?>
                                                <a href='category-pin.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-outline-info"><i class="feather-upload"></i></a>
                                                <?php }else{?>
                                                    <a href='category-remove-pin.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-secondary"><i class="feather-download"></i></a>
                                                <?php }?>
                                                </td>
                                                 
                                            </tr>

                                            <?php } ?>
                                        </tbody>
                                       
                                        
                                    </table>
                                </div>
                                
                           </div>
                        
                        </div>
                        
                       
                    </div>

<?php include "template/footer.php"?>