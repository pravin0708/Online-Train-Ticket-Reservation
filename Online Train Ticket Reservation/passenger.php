<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();
}

if(isset($_SESSION['accomodation'])){
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Train Ticket Reservation</title>
	
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
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

</style>

	</head>
<body >

<nav class="navbar navbar-inverse" style="background-color: #FFF">
  <div class="container-fluid" style="background-color: #FFF">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:#F2036C">Train Ticket Reservation System</a>
    </div>
   <!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php" style="color:#F2036C"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>-->
      <ul class="nav navbar-nav navbar-right">
      <li><a  style="color:#F2036C" class="txt"><span  style="color:#F2036C"></span> <?php echo "{$_SESSION['name']}" ?>  </a></li>
    
    
    </ul>
  </div>
</nav>


<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
			<div class="panel-heading">
				<h3 class="panel-title" style="color:#FFF">STEPS FOR BOOKING</h3>
			</div>
			<div class="panel-body" style="left: auto" style="position: absolute;">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1.PLAN JOURNEY
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								SCHEDULE OF TRAVEL
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. SEAT TYPE</h3>
							</div>
							<div class="panel-body">
								 SEAT TYPE OPTIONS
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. PASSENGER DETAILS</h3>
							</div>
							<div class="panel-body">
								PASSENGER DETAILS
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. PAYMENT </h3>
							</div>
							<div class="panel-body">
								TOTAL PAYMENT
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
	<div class="col-md-1"></div>
</div>


<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Message!</strong> Please review your passenger information.
			You cannot change your reservation once you proceed. 
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center style="color:#F2036C">PASSENGER INFO</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-pass">
					  <div class="form-group">
					    <label for="">Booked By:</label>
					    <?php ?>
					    <input type="text" class="form-control" id="book-by" placeholder="Enter Name"
					    autofocus="" required="" autocomplete="off" value="<?php echo $_SESSION["name"]; ?>" readonly>
					  </div>
					  <div class="form-group">
					    <label for="">Contact:</label>
					    <input type="text" class="form-control" id="cont" placeholder="Enter Contact" required="" autocomplete="off" maxlength="10" minlength="10" value="<?php echo $_SESSION['phn']; ?>" readonly >
					  </div>
					  <div class="form-group">
					    <label for="">Address:</label>
					    <input type="text" class="form-control" id="address" placeholder="Enter Address" >
					  </div>
					<br />
					<?php 
						$tb = $_SESSION['totalPass'];	
					 	$count = 1;
					 	for($i = 0; $i < $tb; $i++){
					?>
					  <div class="panel panel-primary" >
					  	<div class="panel-heading"  >
					  		<h3 class="panel-title" >Booked(<?= $count; ?>)</h3>
					  	</div>
					  	<div class="panel-body" >
					  		<div class="container-fluid">
					  			<div class="form-group">
								    <label for="">Full Name (<?= $count; ?>):</label>
								    <input type="text" class="form-control" id="fN<?php echo $i; ?>"
								    placeholder="Enter Fullname" required autocomplete="off">
								  </div>

								  <div class="form-group">
								    <label for="">Age: (<?= $count; ?>):</label>
								    <input type="number" class="form-control" id="age<?php echo $i; ?>"
								    placeholder="Enter Age" maxlength="2"  required autocomplete="off">
								  </div>
								  <div class="form-group">
								    <label for="">Gender: (<?= $count; ?>):</label>
								    <select class="btn btn-default" id="gender<?php echo $i; ?>">
								    	<option value="Male">Male</option>
								    	<option value="Female">Female</option>
								    </select>
								  </div>
					  		</div>
					  	</div>
					  </div>
					<?php
					$count++;
					 	}//end for
					 ?>
					 <div >
					  <button type="submit" class="btn btn-success" style="background-color:">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true" style="background-color: "></span>
					  </button>
					</div>
					 

					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<?php #require_once('admin/modal/message.php'); ?>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-pass', function(event) {
		event.preventDefault();
		/* Act on the event */
		var bookBy = $('#book-by').val();
		var cont = $('#cont').val();
		var address = $('#address').val();
		
		var counter = <?= $i; ?>;
		for(var i = 0; i < counter; i++){
			var fN = $('#fN'+i).val();
			var age = $('#age'+i).val();
			var gender = $('#gender'+i).val();
			$.ajax({
					url: 'data/save_booked.php',
					type: 'post',
					dataType: 'json',
					data: {
						bookBy : bookBy,
						cont : cont,
						address : address,
						fN : fN,
						age : age,
						gender : gender
					},
					success: function (data) {
						// console.log(data);
						if(data.valid == true){
							window.location = data.url;
						}
					},
					error: function(){
						// alert('Error: L192+');
					}
				});
		}//end for
		alert('Booked Successfully!');	
	});

</script>


</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>