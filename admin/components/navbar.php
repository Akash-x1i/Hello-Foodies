<div class="left-sidebar">
   
   <div class="scroll-sidebar">

       <nav class="sidebar-nav">
           <ul id="sidebarnav"> 
               <li class="nav-devider"></li>
               <li class="nav-label">Home</li>
               <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
               </li>
               <li class="nav-label">Log</li>
               <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Restaurant</span></a>
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
