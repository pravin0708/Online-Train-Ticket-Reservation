<?php
   $con=mysqli_connect("localhost","root","","train");
   $name=$_POST['name'];
   $uname=$_POST['uname'];
   $email=$_POST['email'];
   $c_pass=$_POST['cnpass'];
   $pass=$_POST['pass'];
   $dob=$_POST['date'];
   $city=$_POST['city'];
   $phone=$_POST['phone'];
   $state=$_POST['state'];
   $gen=$_POST['gen'];
   $ndate=date("Y-m-d", strtotime($dob));
   #$image="http://digitalpolymer.com/image/cache/catalog/no_image-1024x1269.jpg";
   if ($pass==$c_pass)
   {
		   $sql = "INSERT INTO reg (name, username, email, password, gender, dob, state, city, phone)
		VALUES ('$name','$uname','$email','$pass','$gen','$ndate','$state','$city','$phone')";
		   if (mysqli_query($con, $sql)) {
		    header("Location:http://localhost/train/log1.php");
		    } 
		    else 
		    {
		    echo "Error: " . $sql . "<br>" . $con->error;
		    }
    }
    else
    {
    	echo"<script>alert('Password doesnot match'); </script>";
    	echo"<script> window.location.href = 'http://localhost/train/train_reg.html';</script>";

    }