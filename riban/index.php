<style>
 *{
margin:0;
padding:0;	

 }
 .img1{
   height:60%;
   width:100%;
	}
    .main{
   width:100%;
  height:25%;
  display:flex;
 }
 .one{
 flex:1;
 }
  .two{
 flex:1;  
 }

 .three{
  flex:1; 
   }
                .foot{
                        background:black;
                        width:100%;
                        height:10%;
                        color:white;
                    }
    .combine{
        width:100%;
	 height:160%;
	 display:block;
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
  <img  class="img1" src="photo/2.jpg" alt="">

  <div class="main">
    <div class="one" style="background-color:;"> <span style="font-size:26px"> About</span> 
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab facere repudiandae eveniet, distinctio minima, adipisci tenetur ipsa aut, ut earum quidem eligendi atque! Ut ipsum molestias atque adipisci debitis minus eligendi ea sit omnis commodi? Facilis asperiores debitis dicta odit suscipit eius necessitatibus ea sint earum nam quisquam eveniet id facere quidem obcaecati nihil neque aliquid inventore, magnam dolorem voluptate nulla soluta tempore illum. Tempore voluptatibus sed numquam animi dolor in quod excepturi minus non quia ut cupiditate perspiciatis placeat, ipsum iure dolore adipisci, debitis assumenda sint nihil, voluptates itaque? Enim dolores illum ratione expedita cum consequuntur iure eligendi iste!</p>
     </div> 
    <div   class="two" style="background-color:"><span style="font-size:26px"> Contact</span>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate temporibus iusto adipisci provident mollitia, tenetur quas incidunt consectetur nesciunt consequatur neque aliquam asperiores blanditiis, architecto quasi eum sed obcaecati dolorem delectus ab ratione quidem optio minima? Iste placeat corporis quibusdam consequuntur eius voluptatibus, voluptas fuga officia neque, aspernatur minima aut!</p>  </div> 
    <div class= "three" style="background-color:"> <span style="font-size:26px"> AboutUs</span>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam numquam possimus autem in architecto voluptatibus animi nam assumenda dicta libero ullam error ab, voluptatem, ipsa ducimus reprehenderit nesciunt fugiat quam. Molestias, architecto facere explicabo nobis tenetur at consectetur magnam alias. Praesentium placeat atque officiis optio deleniti nostrum autem ex modi.</p> </div> 
  </div>
  <hr>
  <br>
  <center>
  <a href="know-more.php" style="color:black;font-size:22px">Know More</a>   <a href="user-login.php" style="margin-left:120px;color:black;font-size:22px">Book Now</a> </center>
  <br>
  <div class="foot">
  <?php require "footer.php"; ?>
  </div>
  </div>
</body>
</html>