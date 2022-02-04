
<?php require_once "core/base.php"; ?>
<?php require_once "core/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href=" <?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href=" <?php echo $url; ?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css">
</head>

<body>
    <section class="main container-fluid">
        <div class="row">
            <!--        sidebar start-->
            <?php include "template/sidebar.php"; ?>
            <!--        sidebar end-->
            <div class="col-12 col-lg-9 col-xl-10 vh-100  content">

                <div class="row header mb-3">
                    <div class="col-12">
                        <div class="p-2 bg-primary d-flex justify-content-between align-items-center rounded">
                            <button class="show-sidebar-btn btn btn-primary d-block d-lg-none">
                                <i class="feather-menu text-light" style="font-size: 2em;"></i>
                            </button>
                            <form action="" method="post" class="d-none d-md-block">
                                <div class="form-inline">
                                    <input type="text" class="form-control mr-2" placeholder="Search Everything">
                                    <button class="btn btn-light">
                                        <i class="feather-search text-primary"></i>
                                    </button>
                                </div>
                            </form>                            
                            <div>
                                <button class="btn btn-light " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/img/default.png" class="user-img shadow-sm" alt=""><?php echo $_SESSION['users']['name']; ?>
                                </button>
                            </div>    
                        </div>
                    </div>
                </div>

              
 
