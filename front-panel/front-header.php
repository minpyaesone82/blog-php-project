</head>
<body class="bg-light">
<div class="container" style="position:sticky;top:2px; z-index:100;" >
    <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary  rounded ">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo $url ;?>/index.php">Sample Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-lg-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $url ;?>/index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $url ;?>/dashboard.php">Dashboard</a>
                  </li>
                </ul>
                <form class="d-flex justify-content-end align-items-center" action="search.php" method="post">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchKey">
                  <button class="btn btn-light ml-2 text-dark" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-12 mt-2">
            <?php foreach (ads() as $ad){ ?>
                <a href="<?php echo $ad['link']; ?>" target="_blank">
                    <img src="<?php echo $ad['photo'] ?>" class="w-100 mb-4 rounded shadow" alt="">
                </a>
            <?php } ?>
        </div>
    </div>
</div>