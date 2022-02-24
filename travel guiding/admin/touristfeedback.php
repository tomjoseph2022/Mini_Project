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
                                            <!-- <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="widgets.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Tourist Feedback</span>
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
                                        <h1> <span class="table-project-n">Tourist</span> Feedback</h1>
                                        
                                    </div>
                                </div>
                               <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">

                                        
                                            <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                            <h4 class="m-0 font-weight-bold text-danger">&nbsp &nbsp List of Tourist Feedbacks</h4>
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                           
                                   <table border='1' data-toggle="table" class="table table-bordered" id="dataTable" width="100%" cellspacing="4"> 

                                        <tr style="border:2px solid black;">

                                         <th><center> firstname</center></th>
                                         <th><center> lastname</center></th>
                                         <th><center> emails</center></th>
        
                                         <th><center> phone</center></th>
                                         <th><center> Feedback Message</center></th>
                                         
                                         <th><center> Status</center></th>
                                         

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $sta="tourist";
                                            $query="SELECT * FROM tbl_feedback WHERE role='$sta'";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['feed_status'];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['feed_fname'];?></td>

                                                  <td><?php echo $data['feed_last'];?></td>

                                                  <td><?php echo $data['feed_email'];?></td>

                                                  <td><?php echo $data['feed_phone'];?></td>

                                                  <td><?php echo $data['feed_message'];?></td>

                                                  

                                                  <td><center> <?php if ($a==$stat)
                                                                 {echo"Not Checked";}
                                                                 else if ($b==$stat)
                                                                 {echo"Accepted";}
                                                                 else{echo"Rejected";}?>
                                       
                                                                 </center>
                                                  </td>
                                                  
                                                    <td>
                                                       <a href="databasefun.php?felog_id=<?php echo $data['login_id'];?>">
                                                        <button class="btn pull-right btn-sm btn-primary hblogin-submit-cs">Accept</button></a>
                                                    </td>
                                                    <td>
                                                      <a href="databasefun.php?felog_rdid=<?php echo $data['login_id'];?>">
                                                       <button class="btn pull-right btn-sm btn-primary hblogin-submit-cs">Reject</button></a>

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
