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

  .create{

 width:80%;
 margin-left:15%;
         }
         input[type=text]
                {
                    border-radius:6px;
                    height:45px;
                    width:90%;
                    
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
  <hr>

  
  <a href="user-login.php"><span style="color:black;margin-left:90%;font-size:22px">login</span></a>
  
   <div >
   <form method="POST">

   <div class="create">

 <span>Name</span><span style="color:red">*</span><br>
 <input type="text" name="name" id="" required><br>
 <span>Phone-no</span><span style="color:red">*</span><br>
 <input type="number" name="pho" id="" required style="border-radius:6px; height:45px; width:90%;"><br>

 <span>Email</span><span style="color:red">*</span><br> 
  <span style="margin-left:40px"> please enter a valid email</span>

 <input type="text" name="eml" id="" required><br>
 <span>Password</span><span style="color:red">*</span><br>
 <input type="text" name="pass" id="" required><br><br>
 <input type="submit" value="Go" name="up" required style="margin-left:85%; width:40px;height:30px"><br>
 <!--a href="create-acc.php" style="color:black;font-size:22px">Sign-up</a>--> 
 </div>
<br>
     </form>
        <hr>

   </div>
   <br><br>
 <div class="foot">
 <?php require "footer.php"; ?>
 
 </div>

    </div>
<?php 

if(isset($_POST['up']))
{

    $pname=$_POST["name"];
    $pho=$_POST["pho"];
    $pas=$_POST["pass"];
    $eml=$_POST["eml"];				

            $sql1="select   *  from  tbladmin where UserName='$pname' ";
            $result = mysqli_query($con, $sql1);
            $row = mysqli_num_rows($result);
            
            if($row==1){
                echo '<script type="text/javascript"> alert (" Data already exist..") </script>';
                    }
                else
                    {
                        $sql3="INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES (NULL, 'User', '$pname', '$pho', '$eml', '$pas', current_timestamp()); ";
                        $res = mysqli_query($con, $sql3);
                        
                        if(!$res)
                        //(mysql_error());
                        echo '<script type="text/javascript"> alert ("Fail to insert..") </script>';
                        else
                        echo '<script type="text/javascript"> alert ("Sucessfully inserted..") </script>';
                     }
        }
?>

</body>
</html>