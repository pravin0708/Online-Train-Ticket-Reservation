<?php session_start();
if(!$_SESSION["name"]){
  header("location: log1.php");
  exit;
}
//echo $_SESSION["name"];
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Train Ticket Reservation</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

<!--<style type="text/css">
 body {
  margin: 0;
  width: 100%;
  height: 100vh;
  
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradientBG 15s ease infinite;
}

@keyframes gradientBG {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}-->
<style type="text/css">
     body {
background: url(https://i.pinimg.com/originals/c9/9a/a2/c99aa2d5dbf746111f0792fcc381f7a1.jpg)no-repeat;

        background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
    background-position: center;
    text-align: center;

  
font-family: "Times New Roman", Times, serif;
  height: 90vh;
}
 /*img {
  border-radius: 50%;
  height: 600px;
  width: 300px;
}*/


.web-design{
  
  min-height: 50vh;
  font-family: 'Fira Sans', sans-serif;
  display: flex;
}
.blog-inner{
  position: relative;
  max-width: 800px;
  padding:20px;
margin:auto;
 text-align:center
}
.blog-slider {
  width: 95%;
  background: #fff;
  padding: 25px;
  border-radius: 25px;
  transition: all 0.3s;
  
}
@media screen and (max-width: 992px) {
  .blog-slider {
    max-width: 680px;
    height: 400px;
  }
}
@media screen and (max-width: 768px) {
  .blog-slider {
    min-height: 500px;
    height: auto;
    margin: 180px auto;
  }
}
@media screen and (max-height: 500px) and (min-width: 200px) {
  .blog-slider {
    height: 350px;
  }
}
.blog-slider__item {
  display: flex;
  align-items: center;

}
@media screen and (max-width: 768px) {
  .blog-slider__item {
    flex-direction: column;
  }
}

.blog-slider__img {
  width: 300px;
  flex-shrink: 0;
  height: 300px;
  box-shadow: 4px 13px 30px 1px rgba(26,168,226, 0.2);
  border-radius: 20px;
  transform: translateX(-80px);
  overflow: hidden;
background:#FFF;
}
.blog-slider__img:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  opacity: 0.8;
  height:400px
}
.blog-slider__img img {
  height:50%;
  width:100%;
  border-radius: 20px;
  display: inline-block;
    float: left;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
@media screen and (max-width: 768px) {
  .blog-slider__img {
    transform: translateY(-50%);
   
  }
}

@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider__img {
    height: 270px;
  }
}
.blog-slider__content {
  padding-right: 25px;
}
@media screen and (max-width: 768px) {
  .blog-slider__content {
    margin-top: -80px;
    text-align: center;
    padding: 0 30px;
  }
}
@media screen and (max-width: 576px) {
  .blog-slider__content {
    padding: 0;
  }
}

.blog-slider__code {
  color: #7b7992;
  margin-bottom: 15px;
  display: block;
  font-weight: 500;
}
.blog-slider__title {
  font-size: 24px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;
}
.blog-slider__text {
  color: #4e4a67;
  margin-bottom: 30px;
  line-height: 1.5em;
}
.blog-slider__button {
  display: inline-flex;
  background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
  padding: 15px 35px;
  border-radius: 50px;
  color: #fff;
  box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
  text-decoration: none;
  font-weight: 500;
  justify-content: center;
  text-align: center;
  letter-spacing: 1px;
}
@media screen and (max-width: 576px) {
  .blog-slider__button {
    width: 100%;
  }
}
.blog-slider .swiper-container-horizontal > .swiper-pagination-bullets, .blog-slider .swiper-pagination-custom, .blog-slider .swiper-pagination-fraction {
  bottom: 10px;
  left: 0;
  width: 100%;
}

</style>
</head>
<body>

</body>
</html>



<?php

$cn=mysqli_connect("localhost","root","","train");
if(!$cn)
{
	die('could not be connect'. mysqli_error());
}
else
	
{
	
//$login=$_GET['username'];
echo"

<nav class=' navbar navbar-inverse'  style=' background-color: #FFF' >
  <div class=' container-fluid'  style=' background-color: #FFF' >
    <div class=' navbar-header' >
      <a class=' navbar-brand'  href=' index.php'  style=' color:#F2036C' >Train Ticket  Reservation  System</a>
    </div>
    <ul class=' nav navbar-nav navbar-right' >
      <li><a href=' Update.php'  style=' color:#F2036C' ><span class='glyphicon glyphicon-user'></span> Update profile</a></li>
       <li><a href=' reserved.php''  style=' color:#F2036C' ><span class='glyphicon glyphicon-file'></span> Booking</a></li>
       <li><a href=' retuser.php''  style=' color:#F2036C' ><span class='glyphicon glyphicon-file'></span> Ticket</a></li>
       
       <li><a href=' cancel.php'  style=' color:#F2036C' ><span class='glyphicon glyphicon-remove'></span> Cancel</a></li>
          
 <li><a href=' logout.php'  style=' color:#F2036C' ><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
      <li>
<li><a  style=' color:#F2036C' ><span ></span>".$_SESSION["name"]."</a></li>
   

    </ul>
  </div>
</nav>
<br>
<br>
<br>
<br><br>
<br>";

$s="select * from reg where username='$_SESSION[name]'";
$res=mysqli_query($cn,$s);


while($row=mysqli_fetch_array($res))
{  
         

    ?>    
<section class='web-design'>
            


        <div class='blog-inner'>
            <div class='blog-slider '>
               <div class='blog-slider__item'>
                 <div class='blog-slider__img'>
                            
                            <?php
   
                     echo '  
                         <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"class="finbyz-zoomin" style="width:194.358px; height:299.514px;">';  
                 
                ?>

                  
                 </div>

                 <div class='blog-slider__content'>
                   <div class='blog-slider__title finbyz-fadeinup'>Details</div>
                 <?php
                 echo"
                       
                   <div class='blog-slider__text finbyz-fadeinup aba' ><p>
                   <ul >
                <li>Name :&nbsp;&nbsp;".$row['name']." </li>
                <li>Username:&nbsp;&nbsp;".$row['username']."</li>
                <li>Email:&nbsp;&nbsp;".$row['email']."</li>
                <li>DOB:&nbsp;&nbsp;".$row['dob']."</li>
                 <li>state:&nbsp;&nbsp;".$row['state']."</li>
                <li>city:&nbsp;&nbsp;".$row['city']."</li>
                <li>phone:&nbsp;&nbsp;".$row['phone']."</li>
              </ul>   
</p>

</div>


                 </div>


               </div>


            </div>


            
            
             
    </div>

</section>

 ";
}
}
?>