<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	/* Font Loading */
@font-face {
	font-family: 'Monaco';
	/* src: url(''); */
}

#main {
	max-width: 960px;
}

span {
	display: inline-block;
}

/* Sections of Ticket */

.ticket-main {
	width: 580px;
	height: 368px;
	font-family: Monaco;
}

.ticket-top {
	border-top-left-radius: 19px;
	border-top-right-radius: 19px;
	background-color: rgb(255,94,3);
	height: 62px;
}

.ticket-middle {
	position: relative;
	background-color: rgb(255,255,244);
/* 	background-image: url('./images/ticket-bg.png');  */
	height: 238px;
}

.ticket-bottom {
	border-bottom-left-radius: 19px;
	border-bottom-right-radius: 19px;
	background-color: rgb(255,94,3);
	height: 68px;
}

/* Top Strip Positioning */

/* stuff only goes here on advance tickets ("VALID ONLY WITH RESERVATION[S]") or on new style tickets ("Off-Peak Day Return") */

/* Middle Area Positioning - 4 rows */

.middle-row {
	width: 93%;
	/*width: 539px;*/
	margin-left: 20.5px;
	height: ;
}

.ticket-label {
	font-size: 10px;
	text-transform: none;
}

.ticket-detail {
	font-size: 16px;
	text-transform: uppercase;
}

.ticket-detail-large {
	font-size: 18px;
	font-weight: 700;
	text-transform: uppercase;
}

.ticket-detail-small {
	font-size: 10px;
	font-weight: 700;
	text-transform: uppercase;
}

.middle-1 {
	display: inline-block;
	padding-top: 6px; /* Initial padding from top */
}

.middle-1-1 {
	display: inline-block;
	padding-bottom: 12px;
}

.middle-class {
	width: 88px;
}

.middle-type {
	width: 213px;
}

.middle-adult {
	width: 76px;
}

.middle-child {
	width: 91px;
}

.middle-rtn {

}

.middle-2 {
	display: inline-block;
}

.middle-2-2 {
	display: inline-block;
	padding-bottom: 22px; /* More padding between the two sets of rows */
}

.middle-railcard-spacer {
	width: 150px;
}

.middle-startdate {
	width: 150px;
}

.middle-number {
	width: 114px;
}

.middle-longnumber {
	text-align: right;
	display: inline-block;
	/* don't actually need to set a width here - need to right align this */
}

.middle-3 {
	display: inline-block;
}

.middle-3-3 {
	display: inline-block;
	padding-bottom: 12px;
}

.middle-from {
	width: 226px;
}

.middle-valid {
	width: 234px;
}

.middle-price {
	/* don't actually need to set a width here - need to right align this */
}

.middle-4 {
	display: inline-block;
}

.middle-4-4 {
	display: inline-block;
	padding-bottom: 12px;
}

.middle-to {
	width: 226px;
}

.middle-route {
	width: 156px;
}

.middle-validity {
	/* don't actually need to set a width here */
}

/* Bottom Strip Positioning */

.ticket-printed {
	text-align: right;
	margin-right: 20.5px;
	margin-top: -16px; /* because margin-bottom doesn't work for some reason */
}

/* Logo Stuff */

.ticket-logo-container {
	padding-top: 12px;
}

.ticket-logo-2-container {
	padding-top: 6px;
}

.ticket-logo {
/* 	background-image: url('./images/ticket-logo-2-small-transparent.png'); */
	height: 55px;
	width: 55px;
	margin-left: 4.7%;
}
</style>
<body>

</body><html>
<head>
	<title>Ticket Thing</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="UTF-8">
</head>
<body>

	<div id="main" align="center" style="padding:200px 30px 0px 300px ">
		<div class="ticket-main">
			<div class="ticket-top">
			</div>

			<div class="ticket-middle">

				<div class="middle-row middle-1">
					<span class="ticket-label middle-class">Class</span>
					<span class="ticket-label middle-type">Ticket Type</span>
					<span class="ticket-label middle-adult">Adult</span>
					<span class="ticket-label middle-child">Child</span>
				</div>
					<div class="middle-row middle-1-1">
					<span class="ticket-detail-large middle-class">STD</span>
					<span class="ticket-detail middle-type">Anytime Day R</span>
					<span class="ticket-detail middle-adult">One</span>
					<span class="ticket-detail middle-child">Nil</span>
					<span class="ticket-detail-large middle-rtn">RTN</span>
				</div>
				<div class="middle-row middle-2">
					<span class="middle-railcard-spacer"></span>
					<span class="ticket-label middle-startdate">Start Date</span>
					<span class="ticket-label middle-number">Number</span>
				</div>
				<div class="middle-row middle-2-2">
					<span class="ticket-detail-large middle-railcard-spacer">16-25</span>
					<span class="ticket-detail middle-startdate">23&middot;MCH&middot;16</span>
					<span class="ticket-detail middle-number">01234</span>
					<span class="ticket-detail middle-longnumber">0123456789</span>
				</div>
				<div class="middle-row middle-3">
					<span class="ticket-label middle-from">From</span>
					<span class="ticket-label middle-valid">Valid Until</span>
					<span class="ticket-label middle-price">Price</span>
				</div>
				<div class="middle-row middle-3-3">
					<span class="ticket-detail middle-from">Tamworth *</span>
					<span class="ticket-detail middle-valid">23&middot;MCH&middot;16</span>
					<span class="ticket-detail middle-price">£5.30X</span>
				</div>
				<div class="middle-row middle-4">
					<span class="ticket-label middle-to">To</span>
					<span class="ticket-label middle-route">Route</span>
					<span class="ticket-label middle-validity">Validity</span>
				</div>
				<div class="middle-row middle-4-4">
					<span class="ticket-detail middle-to">Birmingham Stns</span>
					<span class="ticket-detail-small middle-route">Any Permitted</span>
					<span class="ticket-detail-small middle-validity">On Date Shown</span>
				</div>
			</div>

			<div class="ticket-bottom">
				<div class="ticket-logo-2-container">
					<div class="ticket-logo"></div>
				</div>
				<div class="ticket-printed">
					<span class="ticket-label">Printed 09:48 on 23-MCH-16</span>
				</div>
			</div>
		</div>
		<button onclick="myFunction()" class="btn "  style="align-items: center" style="color: black">Print</button
	</div>
<button onclick="myFunction()" class="btn "  style="align-items: center" style="color: black">Print</button>
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
</body>
</html>
</html>