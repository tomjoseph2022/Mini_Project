<?php
 include_once("connection.php");
 ?>
<!doctype html>
<html class="no-js" lang="en">

<?php include_once("header.php"); ?>


<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <?php include_once("sidebar.php"); ?>

        <!-- Header top area start-->
         <?php
          include_once 'headermenu.php';
         ?>

            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="widgets.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Package List</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- the table start -->

          <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Total <span class="table-project-n">Packages</span></h1>
                                        
                                    </div>
                                </div>
                               <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">

                                        
                                            <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                            <h4 class="m-0 font-weight-bold text-danger">&nbsp &nbsp List of Packages</h4>
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                           
                                   <table border='1' data-toggle="table" class="table table-bordered" id="dataTable" width="100%" cellspacing="4"> 

                                        <tr style="border:2px solid black;">

                                         <th><center> package_name</center></th>
                                         <th><center> package_type</center></th>
                                         <th><center> package_season</center></th>
                                         <th><center> package_features</center></th>
                                         <th><center> package_location</center></th>
                                         <th><center>package_duration</center></th>
                                        
                                         <th><center>package_price</center></th>
                                         <th><center> package_details</center></th>
                                         <th><center> package_image</center></th>
                                         <th><center> VIEW</center></th>

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="select * from tbl_package where package_status in ('0')";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                            // $stat=$data['status'];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['package_name'];?></td>


                                                  <td><?php echo $data['package_type'];?></td>

                                                  <td><?php echo $data['package_season'];?></td>

                                                  <td><?php echo $data['package_features'];?></td>

                                                  <td><?php echo $data['package_location'];?></td>

                                                  <td><?php echo $data['package_duration'];?></td>

                                                  <td><?php echo $data['package_price'];?></td>

                                                  <td><?php echo  $data['package_details'];?></td>

                                                  <td><?php echo  $data['package_image'];?></td>

                                                
                                                  <td>
                                                       <a href="packagedetails.php?package_id=<?php echo $data['package_id'];?>"> 
                                                        <button style="margin-top: 1px;"  class="btn pull-right btn-sm btn-primary hblogin-submit-cs" type="submit" name="pos_delete">View</button>
                                                        </a>

                                                    </td>

                                                   
                                              <?php  
                                            }
                                          ?>
                                                   

                                                </tr>    



                                </table>
                                    
                                 </div>
                                </div>
                           </div>
                        </div>
                     </div>  
                </div> 
             </div>   
        </div>
    </div>
    <!-- Footer Start-->
   <?php include_once("footer.php"); ?>

</body>

</html>
