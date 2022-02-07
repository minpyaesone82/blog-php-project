
<?php require_once "core/auth.php"; ?>
<?php include "template/header.php" ?>

<div class="container-fluid">
<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-3" style="padding-right: 1px;">
        <div class="card mb-3 status-card itm-list" onclick="go('<?php echo $url;?>/Total-viewer.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-heart h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('viewers') ;?></span>
                        </p>
                        <p class="mb-0 text-black-50">Today Viewers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3 " style="padding-right: 1px;">
        <div class="card mb-3 status-card itm-list" onclick="go('<?php echo $url?>/post-list.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-list h1 text-primary"></i>
                    </div>
                    
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('post') ;?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Post</p>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3 " style="padding-right: 1px;">
        <div class="card mb-3 status-card itm-list" onclick="go('<?php echo $url; ?>/category-create.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-layers h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('categories') ;?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Categories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3 " style="padding-right: 1px;">
        <div class="card mb-3 status-card" onclick="go('<?php echo $url?>/users-list.php')">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-3">
                        <i class="feather-users h1 text-primary"></i>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 h4 font-weight-bolder">
                            <span class="counter-up"><?php echo countTotal('users') ;?></span>
                        </p>
                        <p class="mb-0 text-black-50">Total Users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chat.js -->
    <div class="row align-items-end ml-1">
        <div class="col-12 col-xl-7" style="padding-right: 1px;">
            <div class="card overflow-hidden shadow mb-3 chat-js ">
                <div class="card-body chat-js">
                    <div class=" chat-js d-flex justify-content-between align-items-center">
                        <h5 class="chat-js">Order and Viewer</h5>
                        <div class="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                        </div>

                    </div>
                    <canvas id="ov" height="150"></canvas>
                </div>
            </div>
        </div>

        <!-- carousel-items -->
        <div class="col-12  col-md-6 col-xl-5">
            <div class="card mb-3">
                <div class="card-body">
                    <div id="carouselExampleIndicators"
                        class="carousel slide item-carousel item-carousel-card" data-ride="carousel"
                        style="height: 230px;">
                        <ol class="carousel-indicators" style="bottom: -30px;">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                class=" bg-primary active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"
                                class="bg-primary"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"
                                class="bg-primary"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"
                                class="bg-primary"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="w-75">
                                            <h4 class=" font-weight-bolder ">Coffee Cup</h4>
                                            <p class="text-black-50 font-weight-bolder ">5000MMK</p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar w-75" role="progressbar"
                                                    aria-valuenow="95" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="<?php echo $url; ?>/assets/img/item/item1.png" class="item-card-img " alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="">
                                            <h4 class=" font-weight-bolder ">Stick</h4>
                                            <p class="text-black-50 font-weight-bolder ">3000MMK</p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar w-75" role="progressbar"
                                                    aria-valuenow="95" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="<?php echo $url; ?>/assets/img/item/item2.png" class="item-card-img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="">
                                            <h4 class=" font-weight-bolder "> Book</h4>
                                            <p class="text-black-50 font-weight-bolder ">600MMK</p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar w-75" role="progressbar"
                                                    aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="<?php echo $url; ?>/assets/img/item/item3.png" class="item-card-img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="">
                                            <h4 class=" font-weight-bolder ">Name Card</h4>
                                            <p class="text-black-50 font-weight-bolder">4000MMK</p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar w-75" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="<?php echo $url; ?>/assets/img/item/item4.png" class="item-card-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- order and place chatjs -->
        <div class="col-12 col-md-6 col-xl-5 " style="padding-right: 1px; margin-bottom: 15px;">
            <div class="card h-50">
                <div class="card-body ">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-3">Order and Place</h5>
                        <div class="">
                            <i class="feather-pie-chart text-primary h5"></i>
                        </div>
                    </div>
                    <canvas id="op" height="190"></canvas>
                </div>
            </div>
        </div>

        <!-- table list -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-7  one">
            <div class="card shadow mb-3">
                <div class="card-header bg-transparent p-3">
                    <h4 class="card-title mb-0 ">Expenses Vs Budget Table</h4>
                </div>
                <div class="card-body p-0">
                    <div class="grid-margin">
                        <div class="">
                            <div class="table-responsive">
                                <table
                                    class="table card-table border table-vcenter text-nowrap align-items-center table-hover  ">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Category</th>
                                            <th>Expenses</th>
                                            <th>Budget</th>
                                            <th>Variance</th>

                                        </tr>
                                    </thead>
                                    <tbody class="border-top-0 ">

                                        <tr>
                                            <td class="text-sm font-weight-600">Association Fee</td>
                                            <td>0</td>
                                            <td>1,000</td>
                                            <td>1,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-600">Personal Meals</td>
                                            <td>2,850</td>
                                            <td>5,000</td>
                                            <td>2,150</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-600">Transportation</td>
                                            <td>25,000</td>
                                            <td>55,000</td>
                                            <td>30,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-600">Vehicle Rental</td>
                                            <td>30,000</td>
                                            <td>45,000</td>
                                            <td>15,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- new customer and new items -->
        <div class="col-xl-12">
            <div class="row bg-white shadow m-0 " style="border-radius: 0.25rem;">
                <div class="col-md-6 ">
                    <div class="top">
                        <div class="top-body  d-flex justify-content-between align-items-center pt-2">
                            <div class="" style="padding-left: 20px;">
                                <i class="feather-user-plus text-primary font-weight-bolder"></i>
                                <span class="font-weight-bolder">NEW CUSTOMER</span>
                            </div>
                            <div class="">
                                <i class="feather-user btn btn-outline-primary"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3" style="margin-left: 45px;">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url; ?>/assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                        </div>
                    </div>
                </div>

                <div class=" col-md-6  ">
                    <div class="top">
                        <div class="top-body d-flex justify-content-between align-items-center pt-2">
                            <div class="" style="padding-left: 20px;">
                                <i class="feather-menu text-primary font-weight-bolder"></i>
                                <span class="font-weight-bolder">NEW ITEMS</span>
                            </div>
                            <div class="">
                                <i class="feather-menu  btn btn-outline-primary"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3" style="margin-left: 45px;">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                            <img src="<?php echo $url ; ?>/assets/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "template/footer.php"?>
<script src="<?php echo $url; ?>/assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/chart_js/chart.min.js"></script>
<script>
    $(".counter-up").counterUp({
    delay: 10,
    time:1000
})

let dateArr =["sep 31",'sep 23',"sep 22","sep 28","sep 19","sep 21","sep 14","sep 15",];
let orderCountArr =[4,6,7,8,2,1,7,8,9,4];
let viewercountArr = [23,54,7,83,23,43,34,22,12];

var ctx = document.getElementById('ov').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dateArr,
        datasets: [
            {
            label: 'order',
            data: orderCountArr,
            backgroundColor: [
                '#7fabdb30',
               
            ],
            borderColor: [
                '#6610f2',
               
            ],
            borderWidth: 1,
            tension:0
        },
        {
            label: 'viewer',
            data: viewercountArr,
            backgroundColor: [
                '#007bff30',
               
            ],
            borderColor: [
                '#007bff',
               
            ],
            borderWidth: 1,
            tension:0
        }
    ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            },
            xAxes:{
                gridLines:[
                    {
                        display:false
                    }
                ]
            },
           
        }
    }
});

let orderplace = [5,23,5,6,9];
let place = ['YGN','MDY','SHAN','MGW','PAGO'];


var ctx = document.getElementById('op').getContext('2d');
var opChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: place,
        datasets: [{
            label: 'place',
            data: orderplace,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    options: {
        legend: {
            display: true,
          position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle:true
            }
        }
    }
    
    
});



</script>