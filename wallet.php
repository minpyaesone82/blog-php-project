<?php require_once "core/auth.php"; ?>

<?php include "template/header.php" ?>
<?php 
    if(isset($_POST['pay-now'])){
        if(wallet()){
            linkTo('wallet.php');
        }
    }
?>
<div class="row"> 
    <div class="col-12 col-lg-12">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>
                        <i class="feather-dollar-sign text-primary"> Payment</i>
                    </h5>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="feather-user"></i>Your Money <i class="feather-dollar-sign small"></i><?php echo user($_SESSION['users']['id'])['money'] ?>
                    </a>
                </div>
                <hr>
                <form action="" method="post" gs-2>
                    <div class="form-inline">
                        <select name="to_user" id="" class="form-control mr-2 mb-2">
                        <option value="0" selected disabled>Select user</option>
                            <?php foreach(users() as $user){ ?>
                                <?php if($user['id'] != $_SESSION['users']['id']) { ?>
                                    <option value="<?php echo $user['id']; ?>" ><?php echo $user['name'];?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                        <input type="number"  class="form-control mr-2 mb-2" min="100" max="<?php echo user($_SESSION['users']['id'])['money'] ?>" name="amount" placeholder=" Amount" required>
                        <input type="text"  class="form-control mr-2 mb-2" name="description" placeholder="For what" required>
                        <button class="btn btn-primary mb-2" name="pay-now">Pay Now</button>
                    </div>
                </form>
                <hr>
                <table class="table table-bordered table-hover table-striped table-responsive-md table-responsive-lg" style="width:100%">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>From</td>
                            <td>To</td>
                            <td>Amount</td>
                            <td>For what</td>
                            <td>Date & Time</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (transitions() as $t){
                            $time = date("d-m-y / h:i", strtotime($t['created_at']));
                            ?>
                            
                            <tr>
                                <td><?php echo $t['id'] ?></td>
                                <td><?php echo user($t['from_user'])['name'] ?></td>
                                <td><?php echo user($t['to_user'])['name'] ?></td>
                                <td><?php echo $t['amount'] ?></td>
                                <td><?php echo $t['description'] ?></td>
                                <td class=""><?php echo $time ; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>
</div>

<?php include "template/footer.php"?>