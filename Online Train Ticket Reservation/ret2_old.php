<?php
$cn=mysqli_connect("localhost","root","","train");
if(!$cn)
{ die('could not connect');}
else

$sql="select * from reg";
$res=mysqli_query($cn,$sql);
echo "<br>";echo "<br>";echo "<br>";
	echo "<h1>User information</h1>
  <div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <thead>
        <tr>
<th> User id </th>
<th> Name</th>
<th> Username  </th>

<th> Email</th>
<th> Phone no</th>
<th> Gender</th>
<th> DOB</th>
<th> State</th>
<th> City</th>

</tr>
";
while($row=mysqli_fetch_array($res))
{
	
	echo"<div class='tbl-content'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <tbody>
        <tr> ";

echo "<td>".$row['userid']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['dob']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['city']."</td>";

echo "</tr>
";
echo "<br>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
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

</body>
</html>