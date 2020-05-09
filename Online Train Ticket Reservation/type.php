<?php
session_start();
//echo $_SESSION["name"];
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
  <div class="container-fluid" style="background-color: #FFF" >
    <div class="navbar-header" >
      <a class="navbar-brand" href="index.php" style="color:#F2036C">Train Ticket Reservation System</a>

    </div>
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

<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center style="color:#F2036C">SEAT TYPE</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-acc">
					  <table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th style="color:#F2036C"> <span class="glyphicon glyphicon-record" aria-hidden="true" ></span> 
							        Seat type
							        </th>
							        <th>
							        	<center>
							        		Seats
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Charges
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <body>
						   		<?php require_once('data/get_all_accomodations.php'); ?>
						   		<tr>
						   			<td>
						   				<input value="<?= $getSit['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getSit['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getSit['acc_slot'] - $totalSit['sit']; ?>
						   			</td>
						   			<td align="center"><?= $getSit['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoA['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoA['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getEcoA['acc_slot'] - $totalEcoA['ecoA']; ?>
						   			</td>
						   			<td align="center"><?= $getEcoA['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getEcoB['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getEcoB['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getEcoB['acc_slot'] - $totalEcoB['ecoB']; ?>
						   			</td>
						   			<td align="center"><?= $getEcoB['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getTour['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getTour['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getTour['acc_slot'] - $totalTour['ecoT']; ?>
						   			</td>
						   			<td align="center"><?= $getTour['acc_price']; ?></td>
						   		</tr>
						   		<tr>
						   			<td>
						   				<input value="<?= $getDel['acc_id']; ?>" type="radio" name="acc">
						   				<?= $getDel['acc_type']; ?>
						   			</td>
						   			<td align="center">
						   				<?= $getDel['acc_slot'] - $totalDel['ecoD']; ?>
						   			</td>
						   			<td align="center"><?= $getDel['acc_price']; ?></td>
						   		</tr>
						    </tbody>
					    </table>
					    		
				      <div class="form-group">
					    <label for="" style="color:#F2036C">Total # of Passenger:</label>
					    <input type="number" min="1" class="form-control" name="totalPass" 
					    id="totalPass" plactreholder="Total # of Passenger" autocomplete="off">
					  </div>
					   <?php
/*$cn=mysqli_connect("localhost","root","","train");
if(!$cn)
{ die('could not connect');}
else
{	
$sql="SELECT acc_slot from accomodation where acc_id=1";
$res=mysqli_query($cn,$sql);
$b=$_POST['totalPass'];
//$d=$_POST['acc'];
//echo $d;
//echo $b;
	
while($row=mysqli_fetch_array($res))
{
	
echo $row['acc_slot'];
$a=$row['acc_slot'];

$c=$a-$b;
echo $c;
$sql1="UPDATE accomodation set acc_slot=$c where acc_id=1";
//$res=mysqli_query($cn,$sql1);


if ($cn->query($sql1)=== TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
}
*/
?>
					  <button type="submit" class="btn" style="background-color:#F2036C " > <span style="color: white">NEXT</span>
					  <span style="color: white" class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	</form>

	<div class="col-md-3"></div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).on('submit', '#form-acc', function(event) {
		event.preventDefault();
		/* Act on the event */
		var acc = $('input[name="acc"]:checked').val();
		var totalPass = $('input[name="totalPass"]').val();

		if(acc == null){
			alert('Please Select Seat Type!');
		}else{
			// console.log(acc);
			if(totalPass.length == 0){
				alert('Please Enter Number of Passenger!');
			}else{
				$.ajax({
						url: 'data/session_accomodation.php',
						type: 'post',
						dataType: 'json',
						data: {
							acc : acc,
							tp : totalPass
						},
						success: function (data) {
							console.log(data.slot);
							// 	window.location = "passenger.php";
							if(data.slot >= 0){
								window.location = "passenger.php";
							}else{
								alert('Not Enough Seats!');
							}
						},
						error: function(){
							alert('Error: L175+');
						}
					});
			}//end totalPass
		}//end acc == null
	});

</script>

</body>
</html>


<?php

 ?>