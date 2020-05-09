<?php
session_start();
?>
<?php
//$login=$_GET['username'];

 $con=mysqli_connect("localhost","root","","train");
 $sql="select * from reg where username='{$_SESSION['name']}'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_row($result);
 $userid=$row[0];
 $name=$row[1];
 $uname=$row[2];
 $email=$row[3];
 $pass=$row[4];
 $gen=$row[5];
 $dob=$row[6];
 $state=$row[7];
 $city=$row[8];
 $phone=$row[9];
 $image=$row[10];
 mysqli_close($con);
 error_reporting(0); 

?>
<html>
<head>
  <title>Train Ticket Reservation</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
<style>
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
}

.pro{
width:700px;
height:820px;
top:100px;
right:400px;
border:5px solid white;
margin-left:400px;
padding:20px;
padding-bottom: 100px;
}
.tb{
margin-top:30px;
margin-left:10px;
padding:5px;
}
h1{
position:absolute;
right:700px;
}
.btn{
  height:50px;
  width:50%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 0px solid;
  box-sizing:border-box;
  padding:10px;

  background:#F2036C;
  color:#FFF;
  font-weight:bold;
  font-size: 12pt;
  transition:background .4s;
  
  right:150px;
}

.btn:hover{
  background:#F2036C;
  
}


.form-container .field-container:first-of-type {
    grid-area: name;
}

.form-container .field-container:nth-of-type(2) {
    grid-area: number;
}

.form-container .field-container:nth-of-type(3) {
    grid-area: expiration;
}

.form-container .field-container:nth-of-type(4) {
    grid-area: security;
}



.form-container {
    display: grid;
    grid-column-gap: 10px;
    grid-template-columns: auto auto;
    grid-template-rows: 90px 90px 90px;
    grid-template-areas: "name name""number number""expiration security";
    max-width: 400px;
    color: #707070;
}

label {
    padding-bottom: 5px;
    font-size: 13px;
    color: white;
}

input {
    margin-top: 3px;
    padding: 15px;
    font-size: 16px;
    width: 100%;
    border-radius: 3px;
    border: 1px solid #dcdcdc;
}

.txt {
  text-transform: uppercase;
 color: #000;
}
.avatar {
  float: center;
vertical-align: top;
 width: 240px;
  height: 222px;
 border-width: 3px;
border-style: solid;
border-color: red;
 border-radius: 500%;
 }

</style>

</head>
<body>

  <nav class="navbar navbar-inverse" style="background-color: #FFF">
  <div class="container-fluid" style="background-color: #FFF" >
    <div class="navbar-header" >
      <a class="navbar-brand"  style="color:#F2036C">Train Ticket Reservation System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a  style="color:#F2036C" <?php echo"href='http://localhost/train/view.php'";?> class="txt"><span class="glyphicon glyphicon-backward" style="color:#F2036C"></span> Back  </a></li>
     
      <li><a  style="color:#F2036C" class="txt"><span  style="color:#F2036C"></span> <?php echo "{$_SESSION['name']}" ?>  </a></li>
    </ul>
  </div>
</nav>
  
  
<div class="pro" style="
    height: 1113px;
">
<?php echo"<form method='post' enctype='multipart/form-data' class='info' action='upd.php?username=$login' >"?>
Profile Pic
<?php
echo '<img src="data:image/jpeg;base64,'.base64_encode($image ).'" class="avatar">'; 
   ?>
<input type="file" name="image" id="image" placeholder="Update Profile image">

<br></br>
Name
<input type="text" class="field-container" name="name" class="tb" placeholder=<?php echo"$name" ?> id="name">
<br></br>
Password
<input type="text" class="field-container"name="pass" class="tb" placeholder=<?php echo"$pass" ?> id="pass">
<br></br>
Email
<input type="text" class="field-container"name="email" class="tb" placeholder=<?php echo"$email" ?> id="email">
<br></br>
BirthDate
<input type="text" class="field-container"name="dob" class="tb" placeholder=<?php echo"$dob" ?> id="dob">
<br></br>
<!--Phone Number
<input type="text" name="phone" class="tb" placeholder=<?php echo"$phone" ?> id="phone">
<br>-->
Gender
<input type="text"class="field-container" name="gen" class="tb" placeholder=<?php echo"$gen" ?> id="gen">
<br></br>
State
<input type="text"class="field-container" name="state" class="tb" placeholder=<?php echo"$state" ?> id="state">
<br></br>
City
<input type="text"class="field-container" name="city" class="tb" placeholder=<?php echo"$city" ?> id="city">
<br>
</br>
</br>
<div align="center">
<input align="center" type="submit" class="btn" value="update" >
</div>
</br>
<br></br>
<br>
</div>

</body>
</html>