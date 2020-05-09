	<?php 
require_once('data/source.php');
require_once('data/destination.php');
//$login=$_GET['username'];
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
<link rel="stylesheet" type="text/css" href="css/ani.css">

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
#demo {
-webkit-box-shadow: 0px 0px 0px 5px #A0A0A0, inset 0px 10px 27px -8px #141414, inset 0px -10px 27px -8px #A31925, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 0px 0px 0px 5px #A0A0A0, inset 0px 10px 27px -8px #141414, inset 0px -10px 27px -8px #A31925, 5px 5px 15px 5px rgba(0,0,0,0);
}
</style>
	</head>
<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse" style="background-color: white">
  <div class="container-fluid" style="background-color: #FFF">
    <div class="navbar-header" >
      <a class="navbar-brand" href="index.php" style="color:#F2036C">Train Ticket Reservation System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a <?php echo"href='http://localhost/train/view.php'";?> style="color:#F2036C"><span class="glyphicon glyphicon-backward" ></span> Back</a></li>
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

<br/><br/><br/>
<div class="section-header wow jackInTheBox"  data-wow-offset="1208" data-wow-duration="1.5s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 10.5s; animation-duration: 5s;">
	<div class="fluid" >
		<div class="col-md-4"></div>
		<div class="col-md-4">
				<div class="panel-body" id="demo">
				 <h2>
			 	<center style="color:#FFF">PLAN JOURNEY	</center><br>
			 </h2>
				<div class="container-fluid" align="center">
					<form class="form-horizontal" role="form" id="form-itinerary">
					  <div class="form-group" align="center">
					    <label for="" style="color:#FFF" >Source:</label>
					    <select class="btn btn-default" id="orig-id" style="width:220px " >
					    <?php foreach($origins as $o): ?>

					    	<option value="<?= $o['origin_id']; ?>"><?= $o['origin_desc']; ?></option>
				    	<?php endforeach; ?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="" style="color:#FFF">Destination:</label>
					    <select class="btn btn-default" id="dest-id" style="width:220px ">
				    	<?php foreach($destinations as $d): ?>
					    	<option value="<?= $d['dest_id']; ?>"><?= $d['dest_destination']; ?></option>
				    	<?php endforeach; ?>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="" style="color:#FFF">Departure Date:</label>
					    <input type="date" class="btn btn-default" id="dept-date" style="width:220px ">
					  </div><br>
					  <button type="submit" class="btn">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-itinerary', function(event) {
		event.preventDefault();
		/* Act on the event */
		var validate = "";
		var origin = $('select[id=orig-id]').val();
		var dest = $('select[id=dest-id]').val();
		var dept = $('input[id=dept-date]').val();

		var dateOne = new Date(2019, 10,03 );  
       var dateTwo = new Date(dept); 
       if(origin!=dest)
       {
       
       if (dateOne >= dateTwo) {  
            alert("Please Enter The Corect Date!!! ");  
        }else {  
           

		if(dept.length == 0 ){
			alert('Please Select Departure Date!');
		}else{
			$.ajax({
					url: 'data/Journey.php',
					type: 'post',
					dataType: 'json',
					data: {
						oid : origin,
						did : dest,
						dd : dept
					},
					success: function (data) {
						console.log(data);
						if(data.valid == true){
							window.location = data.url;
							console.log('sss');
						}
					},
					error: function(){
						alert('Error: L161+');
					}
				});
		}
		}
		}
		else
		{
				alert("Please Enter correct details!!! ");  
       
		}
	});

</script>

</body>
</html>