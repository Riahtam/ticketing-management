<?php 
 //session_start();
 require('stripe-php-master/init.php');
 $Publishablekey="pk_test_51HXsBIByPKGbhKcvsAQP61GdB9yIKUptR1gZ3pYQoCuUctralUIz5FW64a5Ew1CK7Rwy9fX2fShOxp8oY1mt7RAC00RCiJgQGL";

 $Secretkey="sk_test_51HXsBIByPKGbhKcvBwCjomdVbeNA5PDJXhwWt9838SDn2hyFTBXzXB5m4N7oQKirSkGvGswyfjZXFz2FJXbDQlQy00iLiWnZ3D";
 
 \Stripe\Stripe::setApiKey($Secretkey);
?>