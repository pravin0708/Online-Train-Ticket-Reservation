	<?php /*session_start();
$_SESSION["name"]="mohsin";*/
   ?>

<!DOCKTYPE html>
<html>

<head>
  <title>Train Ticket Reservation</title>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
<style type="text/css">
body {
background: url(images/3.jpg)no-repeat;

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


.btn {
  background: #FFF; 
  border-radius: 20px;
  color: grey;
  font-size: 20px;
  
  
}
.box {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
</style>
<script>
function xyz()
{
var login=document.getElementById("login").value;
if(login=="")
{
//document.write("not empty");
alert("Enter your login id ");
    document.getElementById("login").focus();
    return false;
}

}
</script>

</head>

<body>
    <nav class="navbar navbar-inverse" style="background-color: #FFF">
  <div class="container-fluid" style="background-color: #FFF" >
    <div class="navbar-header" >
      <a class="navbar-brand"  style="color:#F2036C">Train Ticket  Reservation  System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="train_reg.html" style="color:#F2036C"><span class="glyphicon glyphicon-log-in" style="color:#F2036C"></span>&nbsp;Sign up </a></li>
      <li><a href="index.php" style="color:#F2036C"><span class="glyphicon glyphicon-home" style="color:#F2036C"></span>&nbsp;Home </a></li>
    
    </ul>
  </div>
</nav>
    
    <div align="center" style="padding-top: 150px" >
            
    <div class="form-container" >
        <div class="field-container">
            <form method="post" action="log.php" onsubmit="return xyz()" >
            <label for="name">Username</label>
           <input type="text" id="login" class="login" name="login" placeholder="Username" >
        </div>
        <br>
        <div class="field-container">
        </br><br/>
            <label for="cardnumber">Password</label>
             <input type="password" id="login1" class="login" name="password" placeholder="Password" >
        </div>
           
    </div>
          
 <button type="submit" name="submit" class="btn" style="align-self: center;"> Submit</button>
   
</form></div>
    
   </body>
</html>
   
