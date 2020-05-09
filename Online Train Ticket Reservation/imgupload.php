<html>
<head>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<input type="file" name="img"/>
<input type="submit" name="submit"/>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
 $cn=mysqli_connect("localhost","root","","forgot");
 if(!$cn)
 {
  die("not connected");
 }
 else
 {
   $filename=addslashes($_FILES["img"]["name"]);
   $tmpname=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
   $filetype=addslashes($_FILES["img"]["type"]);
   $array=array('jpg','jpeg','png','pdf','jfif');
   $ext=pathinfo($filename,PATHINFO_EXTENSION);
   if(!empty($filename))
   {
	 if(in_array($ext,$array))
	 {
	  $sql="insert into upload(img_name,image) values('$filename','$tmpname')";
	  mysqli_query($cn,$sql);
	 }
	 else
	 {
	   echo "unsupported format"; 
	 }
   }
   else
   {
    echo "please select the image";
   }	   
 }	
}
?>
















