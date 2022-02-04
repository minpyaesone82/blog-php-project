
<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
                <div class="d-flex justify-content-between align-items-center py-2 mt-2">
                    <div class="d-flex  align-items-center">
                        <span class="bg-primary rounded p-2 d-flex justify-content-center align-items-center mr-2">
                            <i class="feather-shopping-bag text-light"></i>
                        </span>
                        <span class="font-weight-bolder h4 mb-0">MY SHOP</span>
                    </div>
                    <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
                        <i class="feather-x text-primary" style="font-size: 2em;"></i>
                    </button>

                </div>
                
                <div class="nav-menu mt-3">
                    <ul>
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/dashboard.php" class="menu-item-link">
                                <span>
                                    <i class="feather-home"></i>
                                    Dashboard Home
                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/index.php" class="menu-item-link">
                                <span>
                                <i class="feather-arrow-right-circle"></i> 
                                    Go to news
                                </span>
                            </a>
                        </li>
                        <li class="menu-spacer"></li>

                        <li class="menu-title">
                            <span> 
                              Manage Post
                             </span>
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/post-add.php" class="menu-item-link">
                                <span>
                                <i class="feather-plus-circle"></i> 
                                    Post Add
                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/post-list.php" class="menu-item-link">
                                <span>
                                <i class="feather-list"></i> 
                                    Post List
                                </span>
                                <span class=" badge badge-pill bg-black shadow-sm  p-1"><?php echo countTotal('post'); ?> </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/ads-list.php" class="menu-item-link">
                                <span>
                                <i class="feather-activity"></i> 
                                    Ads List
                                </span>
                            </a>
                        </li>
                        
                        <?php if($_SESSION["users"]['role'] < 2){ ?>
                        
                        <li class="menu-title">
                            <span> 
                               Setting
                             </span>
                        </li>
                        
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/category-create.php" class="menu-item-link">
                                <span>
                                <i class="feather-layers"></i> 
                                    Category Manger
                                </span>
                            </a>
                        </li>
                        <?php if($_SESSION["users"]['role'] ==0 ){ ?>
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/users-list.php" class="menu-item-link">
                                <span>
                                <i class="feather-layers"></i> 
                                    Users Manger
                                </span>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="menu-spacer"></li>
                        <?php } ?>
                        <li class="menu-spacer">
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $url; ?>/logout.php" class="w-100 btn btn-secondary">
                                <span>
                                    
                                    <i class="feather-lock"></i>
                                    Log out
                                </span>
                                
                            </a>
                        </li>
                        <li class="menu-spacer">
                        </li>

                    </ul>

                    

                    

                </div>
            </div>