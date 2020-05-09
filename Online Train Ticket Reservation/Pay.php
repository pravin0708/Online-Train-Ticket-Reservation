<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Train Ticket Reservation</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
    <script type="text/javascript">
  function loc()
  {
         var name=document.getElementById('name').value;
    	 var cno=document.getElementById('cardnumber').value;
         var expdate=document.getElementById('expirationdate').value;
         var cvv=document.getElementById('securitycode').value;
         if(name=="")
             alert("name can't be blank");
         if(cno=="")
         	alert("cardnumber cant br blank");
         if(expdate=="")
         	alert("expiration date cant be blank");
         if(cvv=="")
         	alert("cvv cant be blank"); 
         else
         {
             alert("Payment Sucessfully");
  
             window.location.href="payment.php";
         }
  }
</script>

	<style type="text/css">
		
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
    padding: 20px;
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
  font-size: 30px;
  
  
}
.box {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}

	
	</style>
</head>
<body align="center">

	<nav class="navbar navbar-inverse" style="background-color: #FFF">
  <div class="container-fluid" style="background-color: #FFF" >
    <div class="navbar-header" >
      <a class="navbar-brand" href="index.php" style="color:#F2036C">Train Ticket Reservation System</a>
    </div>
   </div>
</nav>     
 <?php
						    	require_once('data/getBooked.php');
						    	$totalPayment = 0;
						    	$tracker = '';
						     foreach($bookPass as $bp): 
						    	$name = $bp['book_name'];
						    	$name = ucwords($name);
						    	$price = $bp['acc_price'];
						    	$totalPayment += $price;
						    	$tracker = $bp['book_tracker'];
						    ?>
						    	 <?php endforeach; ?>

	 <div align="center" style="padding-top: 140px" >
            <h2 for="" style="font-size: 20px" style="font-color:#000">Total:&nbsp;<?= $totalPayment; ?></h2>
      
    <div class="form-container" >
        <div class="field-container">
            <label for="name">Name</label>
            <input id="name" maxlength="20" minlength="6" type="text" required="">
        </div>
        <div class="field-container">
            <label for="cardnumber">Card Number</label>
            <input id="cardnumber" type="text" required="" maxlength="16" minlength="16">
            
        </div>
        <div class="field-container">
            <label for="expirationdate">Expiration (mm/yy)</label>
            <input id="expirationdate" type="text" required="" maxlength="5" minlength="4">
        </div>
        <div class="field-container">
            <label for="securitycode">CVV</label>
            <input id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric"required="" maxlength="3" minlength="3">
        </div>

    </div>
   <button  onclick="loc()" class="btn"> Payment</a></button>
</div>
</body>

</html>