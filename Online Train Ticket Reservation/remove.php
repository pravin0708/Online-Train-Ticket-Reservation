<?php
   
    $connect = mysqli_connect("localhost", "root", "", "train");
	if ($connect->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	else{
		}

	   $name1=$_GET['user1'];

	if($connect)
	{	
		$query ="DELETE FROM reg where username='$name1'";
		if(mysqli_query($connect,$query))
		{
			echo"<script>alert('user deleted')</script>";
			?>
            <meta http-equiv="REFRESH" CONTENT="0;URL=ret2.php">
  <?php

		}
		else
	{
		echo"<script>alert('failed to remove ')</script>";
			?>
  <meta http-equiv="REFRESH" CONTENT="0;URL=crate.php">
  <?php
	}
}
?>