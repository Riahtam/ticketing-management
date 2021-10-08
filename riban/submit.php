<?php 
session_start();
require('pay.php');
\Stripe\Stripe::setVerifySslCerts(false);
 $token=$_POST['stripeToken'];
 $data=\Stripe\Charge::create(array(
     "amount"=>5000,
     "currency"=>"inr",
     "description"=>"Sohra Park Management",
     "source"=>$token,
));


 //echo "<pre>";
 //print_r($data);
?>
<?php

include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['ptmsaid']==0)) {
  header('location:logout.php');
  } else{


  
  ?>




<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View Indian Ticket - Park Ticket Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>

<body>
<h2 style="margin-left:35%;font-size:40px">Sohra Park Ticketing System</h2>
  <hr> 
    
    <!-- page container area start -->
    
        <!-- sidebar menu area start -->
     <?php //include_once('includes/sidebar.php');?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
          <?php //include_once('includes/header.php');?>
            <!-- header area end -->
            <!-- page title area start -->
           <?php //include_once('includes/pagetitle.php');?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
               
                    <div class="col-lg-8 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body" id="exampl">
                                        <?php
 $vid=$_GET['iv'];
 $u=$_SESSION['typ'];
$ret=mysqli_query($con,"select * from tblticindian where TicketID='$u'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
 <?php  $tid= $row['TicketID'];
 //echo $tid;?>
                                        <h4 class="header-title" style="color: blue">View Detail of Ticket ID: <?php  echo $row['TicketID'];?></h4>
                                        <h5 class="header-title" style="color: blue">Visiting Date: <?php  echo $row['PostingDate'];?></h5>


                                        <table border="1" class="table table-striped table-bordered first" >
                                            <tr>
                                                <th>#</th>
                                                <th>No of Tickets</th>
                                                <th>Price per unit</th>
                                                <th>Total</th>
                                            </tr>
                                <tr>
                                    <th >Number of Adult </th>
                                    <td style="padding-left: 10px"><?php  echo $noadult=$row['NoAdult'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $cup=$row['AdultUnitprice'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $ta=$cup*$noadult;?></td>
                                </tr>
                                <tr>
                                    <th>Number of Chlidren </th>
                                    <td style="padding-left: 10px"><?php  echo $nochild=$row['NoChildren'];?></td>
                                    <td style="padding-left: 10px">$<?php  echo $aup=$row['ChildUnitprice'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $tc=$aup*$nochild;?></td>
                                </tr>
     
                                 <tr>
                                    <th style="text-align: center;color: red;font-size: 20px" colspan="3">Total Ticket Price</th>
                                    <td style="padding-left: 10px;">$<?php  echo ($ta+$tc);?></td>
                                </tr>
                                <?php 
                                $tem=$ta+$tc;
                               // echo $tem;
                               $_SESSION['pr'] =$tem;
                                ?>
                                </table>
                                    </div>
                                    <?php } ?>
                                    <center><a href='#'  style='color:black;margin-left:0%;font-size:24px;color:green'>Sucessfully Paid</a> </center>
                                     <!--<p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>-->
                                </div>
                            </div>
                            <!-- basic form end -->
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php include_once('includes/footer.php');?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>



</body>

</html>
<?php }  ?>
