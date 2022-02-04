<?php require_once "core/auth.php"; ?>
<?php include "template/header.php" ?>
<?php 
    $id = $_GET['id'];
    $current = post($id);
?>

<div class="row ">
    <div class="col-12 col-md-8 col-lg-6">
                           <div class="card ">
                                <div class="card-body" style="margin: -10px;">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <h5 class="m-0">
                                          <i class="feather-info text-primary"> Post Detail </i>
                                       </h5>
                                       <div>
                                       <a href="<?php echo $url; ?>/post-list.php">
                                           <i class="feather-list btn btn-outline-primary"></i>
                                       </a>
                                       <a href="<?php echo $url; ?>/post-add.php">
                                           <i class="feather-plus-circle btn btn-outline-primary"></i>
                                       </a>
                                       </div>
                                    </div>
                                   <hr>
                                   <h4>
                                        <?php echo $current['title'];?>
                                    </h4>
                                   
                                    <div class="d-flex align-items-center justify-content-start mb-3">
                                        <div style="font-size:25px;"> <i class="feather-user"></i></div>
                                      <div style="font-size: 10px;" class="ml-1">
                                      <?php echo user( $current['user_id'])['name'];?> 

                                      <i class="feather-layers text-primary ml-1"></i>
                                        <?php echo category( $current['category_id'])['title'];?>
                                    
                                        <br>
                                        <i class="feather-calendar text-primary"></i>
                                        <?php echo date("j M Y", strtotime($current['created_at'])); ?>
                                      </div>
                                    </div>
                                    <div class="">
                                        <?php echo html_entity_decode($current['description']) ;?> 
                                    </div>
                                </div>
                                
                           </div>
                        
    </div>
    <div class="col-12 col-md-8 col-lg-6">
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
                                                <th>Who</th>
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