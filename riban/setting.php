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
  <hr>     <a href="home.php" style="margin-left:93%;font-size:15px"> GO BACK</a> 


<form  method="POST"  action="">
<input type="submit" name="change" value=" Manage Profile" style="margin-left:3%;background:none;border:none;font-size:22px" ><br><br>

<input type="submit" name="log" value="Logout" style="margin-left:3% ;background:none;border:none;font-size:22px" >
 


     <?php $se=$_SESSION['ptmsaid'];
            //echo  $se;
     ?>

     <br><br>
     </form>
<?php 
if(isset($_POST['log'])) 
		{
			
					
        echo" <br> <br><b style='margin-left:39%;font-size:24px'>  Are you sure you want to logout ? </b>";
		echo "  <br> <br> <a href='yes.php' style=' margin-left:47%;display;color:black;font-size:30px;'> Yes </a>   &nbsp;   <b style='font-size:30px'> / </b>  &nbsp;   <a href='setting.php' style=' display;color:black;font-size:30px;'> No </a>";
						
        }
        if(isset($_POST['change'])) 
		{
           // $uid=$_SESSION['ptmsaid'];
            //echo"$u";
            $sql12="select   *  from tbladmin where ID='$se' ";
                $result = mysqli_query($con, $sql12);
                //echo "$sql1";
                $row = mysqli_num_rows($result);
                if($row==1){
                    while($row = mysqli_fetch_assoc($result))
                {
                
                 $name=$row['UserName'];
                 $mno=$row['MobileNumber'];
                 $eml=$row['Email'];
                 $pass=$row['Password'];
                }
               // echo $name;
            }
           
        ?>
			<form  method="POST" action="">
             <div class="chng">
             <u><span style="font-size:22px;margin-left:47%">Update Your Details  Here.</span></u><br>
             <span style="font-size:22px;margin-left:30%"> UserName : </span><br>
             <input type="text" name="name" id=""  value="<?php echo @ $name; ?>" style= "margin-left:30%;width:50%;height:30px"> <br><br>
             <span style="font-size:22px;margin-left:30%"> Mobile-No : </span><br>
             <input type="number" name="mno" id=""  value="<?php echo @ $mno; ?>" style= "margin-left:30%;width:50%;height:30px"><br><br>
             <span style="font-size:22px;margin-left:30%"> Email : </span><br>
             <input type="text" name="email" id=""   value="<?php echo @ $eml; ?>" style= "margin-left:30%;width:50%;height:30px"> <br><br>
             <span style="font-size:22px;margin-left:30%"> Password : </span><br>
             <input type="text" name="pass" id=""   value="<?php echo @ $pass; ?>" style= "margin-left:30%;width:50%;height:30px"> <br><br>
             <input type="submit" name="s" value="Update" style="height:30px;width:50px;margin-left:76%">

             </div>
            
            </form>		
    
       <?php
    }   
?>
<?php

if(isset($_POST['s'])) 
{
    $nm=$_POST["name"];
    $phone=$_POST["mno"];
    $eml=$_POST["email"];
    $pas=$_POST["pass"];
     //echo $se;
     $sql4a="update tbladmin set UserName='$nm' , MobileNumber='$phone', Email='$eml', Password='$pas' where ID='$se'";
     $result1=mysqli_query($con,$sql4a);     
     echo '<script type="text/javascript"> alert (" Update Sucessfull ..") </script>';
     
}

?>
<br><br>
</body>
<div class="foot">
<?php require "footer.php"; ?>
</div>


</html>


