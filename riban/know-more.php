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

        * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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
<h2 style="margin-left:30%;font-size:40px">Sohra Park Ticketing System</h2>
  <hr>     <a href="index.php" style="margin-left:93%;font-size:15px"> GO BACK</a> 


<br><br>
    

     
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="photo/1.jpg" style="width:100%;height:60%">
  <div class="text"> Explore the Natural beauty</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="photo/2.jpg" style="width:100%;height:60%">
  <div class="text">Relax yourself and Enjoy</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="photo/3.jpg" style="width:100%;height:60%">
  <div class="text">Come and visit Us.You'll Never reget it..</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
 <br><br>
 <form  method="POST" action="">

 <input type="submit" name="price" value="Price" style="margin-left:15%;background:none;border:2px solid black;font-size:22px" > 
 <input type="submit" name="loca" value="Location" style="margin-left:20%;background:none;border:2px solid black;font-size:22px" >
 <a href="details.php"  style="margin-left:20%;background:none;border:2px solid black;font-size:22px;color:black;text-decoration:none;    " > Details</a>

  <br><br>
 
 
 </form>
 <?php 
 
 if(isset($_POST['loca']))
 {
  echo"  <span style='margin-left:40%' > <u style='font-size:24px'>Kharmih Park </u></span> <br> <br>";
  echo" <span style='margin-left:43%;font-size:20px'>KhliehShnong Sohra</span><br><br>";
  echo" <span style='margin-left:43%;font-size:20px'> Meghalaya, East Khasi Hills District </span> <br><br>";
  echo" <span style='margin-left:43%;font-size:20px'> Pin Code : 793108  </span> <br> <br>";


  echo"  <span style='margin-left:40%' > <u style='font-size:24px'>Nohkalikai Falls </u></span> <br> <br>";
  echo" <span style='margin-left:43%;font-size:20px'>KhliehShnong Sohra</span><br><br>";
  echo" <span style='margin-left:43%;font-size:20px'> Meghalaya, East Khasi Hills District </span> <br><br>";
  echo" <span style='margin-left:43%;font-size:20px'> Pin Code : 793108  </span> <br> <br> <hr> <br> <br>";


}
if(isset($_POST['price']))
{
 echo"  <span style='margin-left:15%' > <u style='font-size:24px'>Kharmih Park </u></span> <br> <br>";
 echo" <span style='margin-left:17%;font-size:20px'><u>Two type :</u>  <br><br>";
 echo" <span style='margin-left:19%;font-size:20px'>Foreigner : <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Adult = 100 <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Child =  50 <br> <br>";
 echo" <span style='margin-left:19%;font-size:20px'>Local : <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Adult = 50 <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Child =  30 <br> <br>";


 echo"  <span style='margin-left:15%' > <u style='font-size:24px'>Nohkalikai </u></span> <br> <br>";
 echo" <span style='margin-left:17%;font-size:20px'><u>Two type :</u>  <br><br>";
 echo" <span style='margin-left:19%;font-size:20px'>Foreigner : <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Adult = 100 <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Child =  50 <br> <br>";
 echo" <span style='margin-left:19%;font-size:20px'>Local : <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Adult = 50 <br>";
 echo" <span style='margin-left:23%;font-size:20px'>Child =  30 <br> <br> <hr> <br> <br>";


}


 
 ?>

</body>
<div class="foot">
<?php require "footer.php"; ?>
</div>


</html>


