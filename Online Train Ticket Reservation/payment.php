	

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse" style="background-color: #FFF">
  <div class="container-fluid" style="background-color: #FFF">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:#F2036C">Train Ticket Reservation System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="log1.php" style="color:#F2036C"><span class="glyphicon glyphicon-backward"></span> Back </a></li>
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

<div > 
<div class="container-fluid" >
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body" id="print" >
			 <h2>
			 	<center style="color:#F2036C">Ticket</center>
			 </h2>
			 <br />
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title"><center></center></h3>
			 	</div>
			 	<div class="panel-body">
			 		<strong>
			 			<i>Train Ticket Reservation System</i>
			 			<h3>
			 			<?php require_once('data/depart_from_to.php'); 
			 				echo $origin['origin_desc'];
			 			?>
			 			 - 
			 			 <?= $dest['dest_destination']; ?>
			 			 </h3>
			 			<p>Departure Date: <?= $_SESSION['departure_date']; ?> @9:00AM</p>
			 		</strong>
			 		<strong>	Estimated Arrival Time: The Next Day @3:00PM </strong><br/><br>

			 			<strong>
			 				Type:
			 				<?php require_once('data/get_accomodation.php'); 
			 					echo $accomodation['acc_type'];
			 				?>
			 			</strong>
			 	</div>
			 </div>

			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">CONTACT INFO</h3>
			 	</div>
			 	<div class="panel-body">
			 	<?php require_once('data/getBooked.php'); ?>
			 	<strong>Book By:</strong> <?= ucwords($bookByInfo['book_by']);  ?><br /> 
			 	<strong>Contact #:</strong> <?= $bookByInfo['book_contact']; ?><br />
			 	<strong>Address:</strong> <?= $bookByInfo['book_address']; ?><br />
			 	</div>
			 </div>
				<div class="container-fluid">
				<strong>
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				PASSENGERS</strong>
					<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th>
							        	<center>
							       			Name
							        	</center> 
							        </th>
							        <th>
							        	<center>
							        		Age
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Gender
							        	</center>
						        	</th>
						        	 <th>
							        	<center>
							        		Departure Price
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
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
						    	<tr align="center">
						    		<td><?= $name; ?></td>
						    		<td><?= $bp['book_age']; ?></td>
						    		<td><?= $bp['book_gender']; ?></td>
						    		<td><?= $price; ?></td>
						    	</tr>
						    <?php endforeach; ?>
						    	<tr>
						    		<td></td>
						    		<td></td>
						    		<td align="right"><strong>TOTAL:</strong></td>
						    		<td align="center"><strong><?= $totalPayment; ?></strong></td>
						    	</tr>
						    </tbody>
						    <strong>- Booked ID: <?= $tracker; ?></strong>
						   </table>
						</div>
						   <center>

						   </center>

				</div>
			</div>
		</div>
	</div>
	<div class="col-md"></div>
</div>
<div align="">
<center >							  
							    <center>
							    	 <a href="view.php" class="btn "  style="background-color: white" style="color:black">Return Home
								   <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
							   </a>&nbsp;<input type="button" id="create_pdf" class="btn " value="Get PDF">
							    <button onclick="myFunction()" class="btn "  style="align-items: center" style="color: black">Get Print</button>
							    </center>

</center></div>
<br><br>
<script>
function myFunction() {
  var prtContent = document.getElementById("print");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=1');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>  


<script>  
    (function () {  
        var  
         form = $('#print'),  
         cache_width = 980, //form.width(),  
         a4 = [595.28, 841.89]; // for a4 size paper width and height  
  
        $('#create_pdf').on('click', function () {  
            $('body').scrollTop(0);  
            createPDF();  
        });  
        //create pdf  s
        function createPDF() {  
            getCanvas().then(function (canvas) {  
                var  
                 img = canvas.toDataURL("image/png"),  
                 doc = new jsPDF({  
                     unit: 'px',  
                     format: 'a4'  
                 });  
                doc.addImage(img, 'JPEG', 1.2, 1);  
                doc.save('Ticket.pdf');  
                form.width(cache_width);  
            });  
        }  
  
        // create canvas object  
        function getCanvas() {  
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
            return html2canvas(form, {  
                imageTimeout: 2000,  
                removeContainer: true  
            });  
        }  
  
    }()); 


</script> 

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>



</body>
</html>

<?php

 ?>