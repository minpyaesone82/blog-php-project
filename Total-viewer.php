<?php require_once "core/auth.php"; ?>
<?php include "template/header.php" ?>

<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">
                        <i class="feather-users text-primary"> Post  Viewer  </i>
                    </h5>
                </div>
                <hr>
                <table  class="table  table-striped table-hover table-bordered"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Viewer</th>
                                                <th>Device</th>
                                                <th>Time</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach (ViewerCountByPost($id) as $v) {
                                                    $time = date("j M Y", strtotime($v['created_at']));
                                            ?>

                                            <tr>
                                                <td class="text-capitalize">
                                                   <?php if($v['user_id'] == 0){
                                                       echo 'Guest';

                                                   }else{
                                                      echo user( $v['user_id']) ['name'];
                                                   } ?>
                                                    
                                                </td>
                                                <td><?php echo $v['device'] ?></td>
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