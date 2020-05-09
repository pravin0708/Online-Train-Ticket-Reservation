 

<?php
$cn=mysqli_connect("localhost","root","","train");
$login=$_POST["login"];
$password=$_POST["password"];
if($login=='admin' && $password=='admin')
	{
header("Location:http://localhost/train/dframe.html");
session_start();


  	exit;
	

	}

$sql="select username from reg where username='$login' and password='$password'";
$res=mysqli_query($cn,$sql);
$row=mysqli_num_rows($res);
if($row>=1)
{
	session_start();
$_SESSION["name"]=$login;

$phn="select phone from reg where username='$login' ";
$res1=mysqli_query($cn,$phn);
$row=mysqli_fetch_array($res1);
$_SESSION["phn"]=$row['phone'];

$ci="select city from reg where username='$login' ";
$res=mysqli_query($cn,$ci);
$row1=mysqli_fetch_array($res);
$_SESSION["add"]=$row1['city'];

if (!headers_sent())
		{
  	header("Location:http://localhost/train/view.php");
  	exit;
		}

}
else
{
	echo"<script> alert('Enter the correct information')</script>";
	echo"<script> window.location.href = 'http://localhost/train/log1.php';</script>";
	
	/*if (!headers_sent())
		{
			
			
			sleep(3);
  				#header("Location:http://localhost/train/train/log1.php");
  	
		}*/
}
#echo "$x";
?> 