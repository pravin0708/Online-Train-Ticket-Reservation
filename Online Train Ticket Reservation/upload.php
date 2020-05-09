<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload image in PHP & Store Image Name,Path into MySQL database</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
<link href="style/login-style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <nav class="navbar navbar-inverse" style="background-color: #FFF">
  <div class="container-fluid" style="background-color: #FFF" >
    <div class="navbar-header" >
      <a class="navbar-brand"  style="color:#F2036C">Train Ticket Booking System</a>
    </div>
     </div>
</nav>
  
<form action="" method="post" enctype="multipart/form-data">
<table border="2" cellpadding="15" cellspacing="2" width="430" align="center">
<tr class="tabheader">
<td align="center" colspan="2">Image Upload & Save into MySQL db</td>
</tr>
<tr class="row">
<td>Select File Here:</td>
<td><input type="file" name="uploadImage" id="uploadImage"></td>
</tr>
<tr class="tabheader">
<td colspan=2><p align=center>
<input type="submit" value="Click Here To Upload" name="submit">
</td>
</tr>
</table>
</form>

<?php

//$login=$_GET['username'];

//Adding isset button function on submit button.
if(isset($_POST["submit"])) {
 
 if (!empty($_FILES["uploadImage"]["name"])) {

include 'dbconfig.php';

$ImageSavefolder = "images/";

move_uploaded_file($_FILES["uploadImage"]["tmp_name"] , "$ImageSavefolder".$_FILES["uploadImage"]["name"]);

//mysql_query("INSERT into reg (image) VALUES('".$_FILES['uploadImage']['name']."') " );
mysql_query("UPDATE reg set image=('".$_FILES['uploadImage']['name']."') where username='{$_SESSION['name']}'" );

if($conn) { 

echo '<p align="center"> Image name successfully saved into MySQL db.</p>'; 

}

else {
	
echo '<p align="center"> Sorry, Please try again.</p>';
}
 }
 else {
 
 echo '<p align="center"> Select file to upload </p>';
 
 }

 }
 
?>


</body>
</html>