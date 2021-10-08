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
<h2 style="margin-left:35%;font-size:40px">Sohra Park Ticketing System</h2>
  <hr>     <a href="user-login.php" style="margin-left:93%;font-size:15px"> GO BACK</a> 
  <br>
 <form  method="POST" action="">
 <span style="font-size:22px; margin-left:30%"> Enter your Email here </span><span style="color:red">*</span>  <br> <br>
    <input type="text" name="eml" id="" placeholder="Enter your email"  style="margin-left:30%;width:40%;height:30px" > <br><br>
    <input type="submit" name="sub" value="Submit" style="margin-left:66%;width:60px;height:30px "> 
    <span style="font-size:22px; margin-left:30%"> Enter code </span><span style="color:red">*</span>  <br> <br>
    <input type="text" name="cod" id="" placeholder=" example : 123456" style="margin-left:30%;width:40%;height:30px" >
    <br><br>
    <input type="submit" name="ver" value="Verify" style="margin-left:66%;width:60px;height:30px "> 
    <br><br>
 </form>

</body>
<div class="foot">
<?php require "footer.php"; ?>
</div>
</html>


<?php

if(isset($_POST['sub']))
{
   $eml= $_POST['eml'];
 //echo$eml;
   $random=mt_rand(0,999999);
   $_SESSION['randomcode']=$random;
   $msg="Your reset code is $random";
   $sub="Reset Code";
   $to=$eml;
    mail($to, $sub,$msg);
    $_SESSION['n']=$eml;

    echo" <br> <br><span style='font-size:24px;margin-left:35%'> Reset Code has been send to <b style='color:blue'> $eml </b> . </span> ";
}
 
        if(isset($_POST['ver']))
        {
            $c=$_POST['cod'];
            $num=$_SESSION['randomcode'];
        if($c==$num){
            header('location:resetp.php');
             }
        
        else{
             echo"wrongcode";
            }
        }

// mail("angelbertriahtam@yahoo.com"," hiii","hello testing")
?>
