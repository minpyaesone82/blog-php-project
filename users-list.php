<?php require_once "core/auth.php"; ?>
<?php include "core/isAdmin.php"; ?>
<?php include "template/header.php" ?>

<div class="row ">
                        <div class="col-12">
                           <div class="card ">
                                <div class="card-body" style="margin: -10px;">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <h5 class="m-0">
                                          <i class="feather-users text-primary">Users List </i>
                                       </h5>
                                       <a href="<?php echo $url; ?>/post-add.php">
                                           <i class="feather-plus-circle btn btn-outline-primary"></i>
                                       </a>
                                    </div>
                                   <hr>
                                    
                                    <table id="" class="table  table-striped table-hover table-bordered"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <!-- <th>Control</th> -->
                                                <th>Created_at</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach (users() as $c) {
                                                    // $time = date("g:i", strtotime($c['created_at']));
                                               
                                            
                                            ?>

                                            <tr>
                                                <td><?php echo $c["id"] ?></td>
                                                <td><?php echo $c["name"] ?></td>
                                                <td><?php echo $c["email"] ?></td>
                                                <td><?php echo $role[$c['role']];?></td>
                                                <!-- <td>
                                                <a href='post-delete.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-danger mr-2"><i class="feather-trash-2 "></i></a>
                                                <a href='post-update.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-warning"><i class="feather-edit"></i></a>
                                                </td> -->
                                                <td><?php echo $c['created_at'] ?></td>
                                                
                                                 
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