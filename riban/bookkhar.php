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
  <hr>  <a href="home.php" style="margin-left:83%;font-size:15px"> GO BACK</a>  <a href="setting.php" style="margin-left:4%">Setting</a>
<div class="frm">
NOTE : <br> <div style="margin-left:8%"><span style=" width:60% ; "> Date and time will be automatically taken when you click on the 'Go' button.The list will be valid only after 24 hours if you don't pay it via online/offline in the counter </span></div>
<form method="POST" action="" onsubmit="return  checkforblank() ">
        <span style="font-size:22px;margin-left:30%"> Nationality : </span><br>
        <select name="type" id="type"  style="margin-left:30%;width:40%;height:30px" >
                        <option value="">  SELECT --</option>
                        <option value="Indian">Indian</option>
                        <option value="Foreign">Foreign</option>

        </select> <br>
     <span style="font-size:22px;margin-left:30%"> Number of Children : </span>
     <br>
     <input type="number" name="child" id="" style="margin-left:30%;width:40%;height:30px" placeholder="Only number allow" required><br>
     <span style="font-size:22px;margin-left:30%"> Number of Adult :</span>
     <br>
     <input type="number" name="adult" id=""  placeholder="Only number allow"s   required style="margin-left:30%;width:40%;height:30px"><br>
     <!--<span style="font-size:22px;margin-left:30%"> Date to book :</span> <br>
     <input type="date" name="" id=""    required style="margin-left:30%;width:40%;height:30px"><br>
     <span style="font-size:22px;margin-left:30%"> Time :</span> <br>
     <input type="time" name="" id=""  required style="margin-left:30%;width:40%;height:30px"> <br><br>-->
     <?php

$ret=mysqli_query($con,"select * from tbltickettype where TicketType='Normal Adult'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="aprice" value="<?php  echo $row['Price'];?>">
                                             <?php } ?>

                                             <?php

$ret=mysqli_query($con,"select * from tbltickettype where TicketType='Normal Child'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                            <input type="hidden" name="cprice" value="<?php  echo $row['Price'];?>">
                                          
                                      <?php } ?>
                                      <!-- FOREIGN   -->
                                    <?php
$ret=mysqli_query($con,"select * from tbltickettype where TicketType='Foreigner Adult'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="fprice" value="<?php  echo $row['Price'];?>">
                                             <?php } ?>

                                             <?php

$ret=mysqli_query($con,"select * from tbltickettype where TicketType='Foreigner Child'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                            <input type="hidden" name="fcprice" value="<?php  echo $row['Price'];?>">
                                          
                                      <?php } ?>
                                       <!-- FOREIGN   -->
     <br><br>
     <input type="reset" value="CLEAR"  style="width:50px;height:30px;margin-left:58%">
     <input type="submit" value="Go"  name="g" style="width:40px;height:30px;margin-left:2%">
     </form>
     </div>
     <script>
        function checkforblank()
         {
          if(document.getElementById('type').value == "")
            {
               alert("Please choose Nationality");
               return false;
             } 
         }
        </script>
     <?php $se=$_SESSION['ptmsaid'];
            //echo  $se;
             

      if(isset($_POST['g']))
      {  
        $aprice=$_POST['aprice'];
        $cprice=$_POST['cprice'];
        $fprice=$_POST['fprice'];
        $fcprice=$_POST['fcprice'];
        $children=$_POST["child"];
        $adult=$_POST["adult"];
            $ticketid=mt_rand(100000000, 999999999);
    
        $ty= $_POST['type'];
        if( $ty == 'Indian')
        {
          $query=mysqli_query($con, "insert into  tblticindian(TicketID,NoAdult,NoChildren,AdultUnitprice,ChildUnitprice,pname) value('$ticketid','$adult','$children','$aprice','$cprice','Nohkalikai')");
          if ($query) {
          
           echo '<script>alert("Ticket information has been added.")</script>';?>
           
               <a href='seeticket.php?iv=<?php echo $ticketid; ?>'  style='color:black;margin-left:45%;font-size:24px;border:1px solid black;background-color:green' >View and Pay</a>
       <?php }
        else
          {
             echo '<script>alert("Something Went Wrong. Please try again.")</script>';
          }
        }
        else
        {
          $query=mysqli_query($con, "insert into  tblticforeigner(TicketID,NoAdult,NoChildren,AdultUnitprice,ChildUnitprice,pname) value('$ticketid','$adult','$children','$fprice','$fcprice','Nohkalikai')");
          if ($query) {
          
           echo '<script>alert("Ticket information has been added.")</script>';?>
           <a href='foreignnohkalikai.php?fnoh=<?php echo $ticketid; ?>' style='color:black;margin-left:45%;font-size:24px;border:1px solid black;background-color:green'>View and Pay</a>
       <?php }
        else
          {
             echo '<script>alert("Something Went Wrong. Please try again.")</script>';
          }

        }
 

       }



     ?>

     <br><br>
</body>
<div class="foot">
<?php require "footer.php"; ?>
</div>


</html>