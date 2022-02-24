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
                                       
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="widgets.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Guide List</span>
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
                                        <h1>Projects <span class="table-project-n">Guide</span> View</h1>
                                        
                                    </div>
                                </div>
                               <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">

                                        
                                            <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                            <h4 class="m-0 font-weight-bold text-danger">&nbsp &nbsp List of Guides</h4>
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                           
                                   <table border='1' data-toggle="table" class="table table-bordered" id="dataTable" width="100%" cellspacing="4"> 

                                        <tr style="border:2px solid black;">

                                         <th><center> firstname</center></th>
                                         <th><center> lastname</center></th>
                                         <th><center> address</center></th>
                                         <th><center> emails</center></th>
                                         <th><center> dobs</center></th>
                                         <th><center>username</center></th>
                                         <th><center> phone</center></th>
                                         <th><center>gender</center></th>
                                         <th><center> STATUS</center></th>
                                         <th><center> VIEW</center></th>

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="select tbl_login.*,tbl_guide_registration.* from tbl_login,tbl_guide_registration where tbl_login.login_id=tbl_guide_registration.login_id;";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['status'];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['firstname'];?></td>


                                                  <td><?php echo $data['lastname'];?></td>

                                                  <td><?php echo $data['address'];?></td>

                                                  <td><?php echo $data['emails'];?></td>

                                                  <td><?php echo $data['dobs'];?></td>

                                                  <td><?php echo $data['username'];?></td>

                                                  <td><?php echo $data['phone'];?></td>

                                                  <td><?php echo  $data['gender'];?></td>

                                                  <td><center> <?php if ($a==$stat)
                                                                 {echo"Not Checked";}
                                                                 else if ($b==$stat)
                                                                 {echo"Accepted";}
                                                                 else{echo"Rejected";}?>
                                       
                                                                 </center>
                                                  </td>
                                                  <td>
                                                       <a href="guideverification.php?login_id=<?php echo $data['login_id'];?>"> 
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
