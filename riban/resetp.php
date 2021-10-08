<?php 
 session_start();
 error_reporting(0);
include('includes/dbconnection.php');?>
 <style>
          *{
        margin:0;
        padding:0;	
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
    <title>Document</title>
</head>
<body>
<form  method="POST" action="">
<h2 style="margin-left:35%;font-size:40px">Sohra Park Ticketing System</h2>
  <hr>
  <a href="user-login.php" style="color:black;font-size:22px;;margin-left:90%">Go Back</a>  <br> 
  <br><br>
 <span style="font-size:22px; margin-left:30%"> Enter your New Password  </span><span style="color:red">*</span>  <br> <br>
    <input type="text" name="pass" id=""   placeholder='Enter Password : ' required style="margin-left:30%;width:40%;height:30px" > <br><br>
    
    <span style="font-size:22px; margin-left:30%"> Re-enter Your Password </span><span style="color:red">*</span>  <br> <br>
    <input type="text" name="repass" id=""    placeholder=' Re-Enter Password : '  required style="margin-left:30%;width:40%;height:30px" >
    <br><br>
    <input type="submit" name="subb" value="Set" style="margin-left:65%;width:60px;height:30px "> 
    <br><br>
 <?php 
   $se=$_SESSION['ptmsaid'];

  if(isset($_POST['subb']))
  {
    $p= $_POST['pass'];
   $rp= $_POST['repass'];
   // echo $p;
    //echo $rp;
    if($p==$rp)
    {
     $sql4a="update tbladmin set  Password='$p' where ID='$se'";
     $result1=mysqli_query($con,$sql4a);     
       echo '<script type="text/javascript"> alert (" Password Reset Sucessfully ..") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert ("Failed to  reset Password..") </script>';
        }


  }
 
 
 
 ?>

 </form>


 <div class="foot">
<?php require "footer.php"; ?>
</div>
</body>
</html>