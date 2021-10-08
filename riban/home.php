

<?php 
 session_start();
 error_reporting(0);
include('includes/dbconnection.php');?>

<style>
        *{
margin:0;
padding:0;	

 }         
    .combine{
        width:100%;
	 height:100%;
	 display:block;
          }
          .log{
          
            width:100%;
            height:60%; 
          
              }
              .foot{
                        background:black;
                        width:100%;
                        height:10%;
                        color:white;
                    }
                    .img1{
                      height:90%;
                      width:40%;

	                   }
                     .img2{
                      height:90%;
                      width:40%;
                     

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
    <div class="combine">
    <br><br>
  <h2 style="margin-left:35%;font-size:40px">Sohra Park Ticketing System</h2>
  <hr>  <a href="setting.php" style="margin-left:94%">Setting</a><div >
   <form method="POST">
   

  
  
<br><br>

<div class="log">
 
<img  class="img1" src="photo/2.jpg" alt="" style="margin-left:9%"> <img  class="img2" src="photo/6.png" alt="">

 </div>
 <hr>
 <div class="choose">
 <br>

 <br><br>
 <a href="bookkhar.php" style="color:black; text-decoration:none;  "> <span style="margin-left:33.5%;font-size:24px;;border:2px solid#191b19">  Kharmih Park </span> </a> 
 <a href="booknohkali.php" style="color:black; text-decoration:none;  "> <span style=" margin-left:12%;font-size:24px;border:2px solid #191b19">Nohkalikai Falls</span> </a> 
  
 </div>
 <br>

     </form>    

   </div>
<div class="foot">
<?php require "footer.php"; ?>
</div>

<?php
					

?> 
	


    </div>


</body>
</html>