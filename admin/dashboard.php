<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
	header('location:index.php');
}
else
{
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

<?php include('./components/header.php'); ?>
    
        <div class="page-wrapper">
            
            <div class="container-fluid">
                <div class="card card-outline-primary">
                    <div class="card-header text-center">
                        <h4 class="m-b-0 text-white">Dashboard</h4>
                    </div>
            <div class="col-lg-12">
                     <div class="row">
					
					 <div class="col-md-6">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="select * from dishes where rs_id =".$_SESSION['adm_id'];
												$result=mysqli_query($db,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Dishes</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-md-6">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="select * from users_orders where rs_id =".$_SESSION['adm_id'];
												$result=mysqli_query($db,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>	                   
                </div>               
            </div>
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white  text-center">Menu</h4>
            </div>
            <div class="table-responsive m-t-40">
                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Restaurant</th>
                            <th>Dish-Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>	  
                        </tr>
                    </thead>
                    <tbody>
                    
                        
                            <?php
                            $sql="SELECT * FROM dishes where rs_id in (select rs_id from restaurant where adm_id='".$_SESSION['adm_id']."') order by d_id desc";
                            $query=mysqli_query($db,$sql);
                            
                                if(!mysqli_num_rows($query) > 0 ){
                                        echo '<td colspan="11"><center>No Menu</center></td>';
                                }
                                else{				
                                    while($rows=mysqli_fetch_array($query))
                                        {
                                            $mql="select * from restaurant where adm_id='".$_SESSION['adm_id']."' and rs_id='".$rows['rs_id']."'";
                                            $newquery=mysqli_query($db,$mql);
                                            $fetch=mysqli_fetch_array($newquery);
                                        
                                        
                                            echo '<tr><td>'.$fetch['title'].'</td>
                                            
                                                <td>'.$rows['title'].'</td>
                                                <td>'.$rows['slogan'].'</td>
                                                <td>₹'.$rows['price'].'</td>
                                                
                                                
                                                <td><div class="col-md-3 col-lg-8 m-b-10">
                                                <center><img src="Res_img/dishes/'.$rows['img'].'" class="radius" style="max-height:100px;max-width:150px;" /></center>
                                                </div></td>
                                                
                                            
                                                        <td><a href="delete_menu.php?menu_del='.$rows['d_id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
                                                        <a href="update_menu.php?menu_upd='.$rows['d_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
                                                    </td></tr>';                               
                                        }	
                                }
                        ?>                   
                    </tbody>
                </table>
            </div>
        </div>     
    </div>
    <?php 
        include('./components/footer.html');
    ?>
   
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>
<?php
}
?>