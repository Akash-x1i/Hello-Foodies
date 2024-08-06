<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>

<div id="main-wrapper">
    <div class="header">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up fa fa-bars" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse"></button>
                <div style="margin-inline: auto;"><a class="navbar-brand" href="dashboard.php"> <img class="bg-light" src="images/hello-foodies-logo.png" height="50px" alt=""> </a></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/3.png" alt="user" class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                        <ul class="dropdown-user">
                            <li class="dropdown-user"><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
                <!-- <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav" style="display:block; width: 90vw;">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </div>

    <div class="left-sidebar">
      
        <div class="scroll-sidebar">
    
            <nav class="sidebar-nav">
               <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label">Home</li>
                    <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                    <li class="nav-label">Log</li>
                    <!-- <li> <a href="all_users.php">  <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li> -->
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Restaurants</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="add_restaurant.php">
                                <?php
                                    $sqlForCheck = "SELECT * FROM restaurant where adm_id='".$_SESSION['adm_id']."'";
                                    $query=mysqli_query($db,$sqlForCheck);
                                    if(mysqli_num_rows($query) > 0 )
                                        {
                                            echo"Update Restaurant";
                                        }
                                    else echo"Add Restaurant";
                                ?>
                            </a></li>
                        </ul>
                    </li>
                  <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="all_menu.php">All Menues</a></li>
                            <li><a href="add_menu.php">Add Menu</a></li>
                        </ul>
                    </li>
                     <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>
                </ul>
            </nav>
        </div>
    </div>