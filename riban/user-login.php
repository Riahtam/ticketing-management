

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
            width:30%;
            height:40%; 
            margin-left:37%;
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
    <div class="combine">
    <br><br>
  <h2 style="margin-left:35%;font-size:40px">Sohra Park Ticketing System</h2>
  <hr> <div >
   <form method="POST">
   

  
   <a href="create-acc.php" style="color:black;font-size:22px;;margin-left:90%">Sign-up</a>  <br>
<br><br>
<div class="log">
<br>
 <span style="font-size:22px; margin-left:10px"> Username</span><span style="color:red">*</span>  <br>
 <input type="text" name="user" id="" placeholder=" Enter your name" required style="width:100%;height:30px"> <br> <br>
 <span style="font-size:22px; margin-left:10px" >Password</span><span style="color:red">*</span><br>
 <input type="text" name="pass" id=""   placeholder=" Enter your Password " required style="width:100%;height:30px"><br><br>
 <input type="submit" value="Go" name="go" style="margin-left:80%;width:50px;height:40px"><br><br>
 <a href="forgot-pass.php" style="color:black;font-size:16px;margin-left:38%;">forgot password!!</a> 
 </div>

     </form>    

   </div>
<div class="foot">
<?php require "footer.php"; ?>
</div>

<?php
					
					//$u=$_POST["name"];
							//if(isset($_POST['go']))
							
if(isset($_POST['go']))
{
  $adminuser=$_POST['user'];
  $password=$_POST['pass'];
  $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
  $ret=mysqli_fetch_array($query);
  if($ret>0){
    $_SESSION['ptmsaid']=$ret['ID'];
   header('location:home.php');
  }
  else{
   echo '<script>alert("Invalid Detail.")</script>';
  }
}
?> 
	


    </div>


</body>
</html>
