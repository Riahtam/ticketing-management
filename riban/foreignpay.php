<?php 
session_start();
 require ('pay.php');
 include('includes/dbconnection.php');

 $tprices=$_SESSION['pri'];
 $mul= $tprices * 100;
 $vid=$_GET['tids'];
 $_SESSION['typ']=$vid;
  
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>-->
    <form action="submit.php" method="post">
       <input type="hidden" name="" id="p" value=<?php  $mul; ?> >
      
     
    
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
     data-key="<?php echo $Publishablekey?>"
    
     data-amount="<?php echo $mul; ?>"
     data-name="Sohra Park Management"
     data-discription="Sohra Park Management" 

     data-image="" 
     data-currency="inr" >
    </script>
    
    </form>
<!--/body>
</html>-->