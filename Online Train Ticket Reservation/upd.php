<?php
session_start();
error_reporting(0);
?>

<?php
//$login=$_GET['username'];

$con=mysqli_connect("localhost","root","","train");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
#$gen=$_POST['gen'];
//echo"$name $email $pass $dob $city $phone $state $gen";
if($file!="")
{
	$sql1="update reg set image='$file' where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql1);
}
if($name!="")
{
	$sql1="update reg set name='$name' where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql1);
}
if($email!="")
{
	$sql2="update reg set email='$email' where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql2);
}
if($pass!="")
{
	$sql3="update reg set password=$pass where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql3);
}
if($dob!="")
{
	$sql4="update reg set dob='$dob' where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql4);
}
if($city!="")
{
	$sql5="update reg set city='$city' where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql5);
}
if($phone!="")
{
	$sql6="update reg set phone=$phone where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql6);
}
if($state!="")
{
	$sql7="update reg set state='$state' where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql7);
}
/*if($gen!="")
{
	$sql8="update reg set gender='$gen' where username='{$_SESSION['name']}'";
	mysqli_query($con,$sql8);
}*/
echo"<script>alert('update successfully'); window.location.href = 'http://localhost/train/view.php';</script>";
mysqli_close($con);
?>