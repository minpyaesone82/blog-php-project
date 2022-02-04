<?php require_once "core/auth.php"; ?>
<?php include "template/header.php" ?>

<div class="row ">
    <div class="col-12  mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>
                        <i class="feather-plus-circle text-primary"> 
                            Create advertisement
                        </i>
                    </h5>
                </div>
                <hr>
                <?php 
                    if(isset($_GET['ads-btn'])){
                        adsAdd();;
                    }
                ?>
                <form class="row g-3" action="" method="GET">
                    <div class="col-md-6">
                        <label for="" class="form-label">Owner name</label>
                        <input type="text" class="form-control" name="ower_name">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="" name="photo">
                    </div>
                    <div class="col-12">
                        <label for="" class="">Website link</label>
                        <input type="text" class="form-control"  placeholder="Website link" name="link">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Start date</label>
                        <input type="date" class="form-control" name="start">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">End date</label>
                        <input type="date" class="form-control" name="end">
                    </div>
                    
                    
                    
                    <div class="col-12 my-3">
                        <button type="submit" class="btn btn-primary" name="ads-btn">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card ">
            <div class="card-body" style="margin: -10px;">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">
                        <i class="feather-list text-primary"> Advertisement List </i>
                    </h5>
                    
                </div>
                <hr>
                
                <table id="list" class="table  table-striped table-hover table-bordered"  style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Owner_name</th>
                            <th>Photo</th>
                            <th>Link</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Created_at</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(ad() as $ad){
                            $time = date("j M Y", strtotime($ad['created_at'])); ?>
                            <tr>
                                <td><?php echo $ad['id'] ?></td>
                                <td><?php echo $ad['ower_name'] ?></td>
                                <td><?php echo short($ad['photo'],20) ?></td>
                                <td><?php echo short($ad['link'],20) ?></td>
                                <td class="text-nowrap"><?php echo $ad['start'] ?></td>
                                <td class="text-nowrap"><?php echo $ad['end'] ?></td>
                                <td class="text-nowrap"><?php echo $time; ?></td>
                                <td class="text-nowrap">
                                <a href='ads-delete.php?id=<?php echo $ad["id"]?>' class="btn btn-sm btn-danger "><i class="feather-trash-2"></i></a>
                                <a href='ads-update.php?id=<?php echo $c["id"]?>' class="btn btn-sm btn-warning "><i class="feather-edit"></i></a>                                          
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
<script src="<?php echo $url; ?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script>
    $('#list').DataTable({
        order:[[0,"desc"]]
    });
</script>