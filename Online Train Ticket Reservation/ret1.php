

<?php
$cn=mysqli_connect("localhost","root","","train");
if(!$cn)
{ die('could not connect');}
else

$sql="select A.book_by,A.book_contact,A.book_address,A.book_name,A.book_age,A.book_gender,C.origin_desc,B.dest_destination,A.book_departure,A.book_tracker from booked A,origin C,destination B where  A.origin_id=C.origin_id AND A.dest_id= B.dest_id";
$res=mysqli_query($cn,$sql);
echo "<br>";echo "<br>";echo "<br>";
	echo "<h1>Booking information</h1>
  <div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <thead>
        <tr>

<th> Boom by</th>
<th> Contact NO  </th>
<th> Address</th>
<th> book Name </th>
<th> Gender</th>
<th> Date </th>
<th> Source </th>
<th> Destination</th>	



<th width=''> tracker</th>

</tr>
";
while($row=mysqli_fetch_array($res))
{
	
	echo"<div class='tbl-content'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <tbody>
        <tr> ";

echo "<td>".$row['book_by']."</td>";
echo "<td>".$row['book_contact']."</td>";
echo "<td>".$row['book_address']."</td>";
echo "<td>".$row['book_name']."</td>";
echo "<td>".$row['book_gender']."</td>";
echo "<td>".$row['book_departure']."</td>";
echo "<td>".$row['origin_desc']."</td>";
echo "<td>".$row['dest_destination']."</td>";

echo "<td width='-5'>".$row['book_tracker']."</td>";

echo "</tr>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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


h1{
  font-size: 30px;
  color: #000;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:10px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #000;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #000;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
	</style>
</head>
<body>
<script type="text/javascript">
  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</body>
</html>