<?php require_once "core/auth.php"; ?>
<?php include "template/header.php" ?>

<div class="row ">
                        <div class="col-12">
                           <div class="card ">
                                <div class="card-body" style="margin: -10px;">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <h5 class="m-0">
                                          <i class="feather-list text-primary"> Post List </i>
                                       </h5>
                                       <a href="<?php echo $url; ?>/post-add.php">
                                           <i class="feather-plus-circle btn btn-outline-primary"></i>
                                       </a>
                                    </div>
                                   <hr>
                                   
                                    <table id="list" class="table  table-striped table-hover table-bordered"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <?php if($_SESSION['users']['role']==0){ ?>
                                                    <th>user</th>
                                                <?php } ?>
                                                <th>category</th>
                                                <th>viewer</th>
                                                <th>Control</th>
                                                <th>Created_at</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach (posts() as $c) {
                                                    $time = date("j M Y", strtotime($c['created_at']));
                                               
                                            
                                            ?>

                                            <tr>
                                                <td><?php echo $c["id"] ?></td>
                                                <td><?php echo short( $c["title"],10); ?></td>
                                                <td><?php echo short($c["description"],20); ?></td>
                                                <?php if($_SESSION['users']['role']==0){ ?>
                                                    <td><?php echo user($c['user_id'])['name'] ?></td>
                                                <?php } ?>
                                                <td><?php echo category( $c['category_id'])['title']?></td>
                                                <td>
                                                    <?php echo count(ViewerCountByPost($c['id'])); ?>
                                                </td>
                                                <td class="text-nowrap">
                                                <a href='post-detail.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-info "><i class="feather-edit"></i></a>
                                                <a href='post-delete.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-danger "><i class="feather-trash-2"></i></a>
                                                <a href='post-update.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-warning "><i class="feather-edit"></i></a>                                          
                                                </td>
                                                <td class="text-nowrap"><?php echo $time ?></td>
       
                                            </tr>

                                            <?php } ?>
                                        </tbody>
                                       
                                        
                                    </table>
                                </div>
                                
                           </div>
                        
                        </div>
                        
                       
                    </div>
                

<?php include "template/footer.php"?>
<script src="<?php echo $url; ?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script>
    $('#list').DataTable({
        order:[[0,"desc"]]
    });
</script>