<?php 
 session_start();
 error_reporting(0);
include('includes/dbconnection.php');?>
 <style>
         *{
        margin:0;
        padding:0;	
          }
 .frm{
    
     width:70%;
     height:50%;
     margin-left:14%;

    }
    .foot{
        background:black;
        width:100%;
        height:10%;
        color:white;
        }
 
 </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<h2 style="margin-left:35%;font-size:40px">Sohra Park Ticketing System</h2>
  <hr>     <a href="know-more.php" style="margin-left:93%;font-size:15px"> GO BACK</a> 
  <br>

  <form  method="POST"  action="">
<input type="submit" name="change" value=" Nohkalikai" style="margin-left:3%;background:none;border:none;font-size:22px" ><br><br>

<input type="submit" name="log" value=" Kharmih" style="margin-left:3% ;background:none;border:none;font-size:22px" > <br>
 
     <?php 
     //$se=$_SESSION['ptmsaid'];
            //echo  $se;
      //################ NOHKALIKAI #################
            if(isset($_POST['change']))
            {
                echo"<span style='margin-left:13%'><u> About</u>  </span> <br> <br>";
                 echo"<span style='margin-left:15%'> Located 5km from Sohra Market.  </span> <br>";
                 echo"<span style='margin-left:15%'> It is a Park based on a true story   </span>  <br><br>";
                 echo"<span style='margin-left:13%'>  <u>Opening  And Closing Time</u>  </span> <br> <br>";
                 echo"<span style='margin-left:15%'> Monday - Saturday: 10.00 AM - 4.00 PM </span> <br>";
                 echo"<span style='margin-left:15%'> Sunday Closed </span>";
            }
            if(isset($_POST['log']))
           {
              //##############  KHARMIH  ##############################
        
            echo"<span style='margin-left:13%'><u> About</u>  </span> <br> <br>";
             echo"<span style='margin-left:15%'> Located 5km from Sohra Market. It is a park based on natural beauty  </span> <br>";
             echo"<span style='margin-left:15%'>  </span>  <br><br>";
             echo"<span style='margin-left:13%'>  <u>Opening  And Closing Time</u>  </span> <br> <br>";
             echo"<span style='margin-left:15%'> Monday - Saturday: 10.00 AM - 4.00 PM </span> <br>";
             echo"<span style='margin-left:15%'> Sunday Closed </span>";
        
            }
     ?> 
     <span></span>

     <br><br>
     </form>

<br><br>
</body>
<div class="foot">
<?php require "footer.php"; ?>
</div>


</html>


