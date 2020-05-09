/*college registration*/
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
	<input type="text" name="search" id="search" ><br>
	<input type="submit"  style="border-width: 5px" class="button"value="button">

	</div>
</body>
</html>

<?php
$cn=mysqli_connect("localhost","root","","train");
if(!$cn)
{ die('could not connect');}
else
{
$p=$_POST['search'];
echo $p;
$sql="select * from booked where book_by='$p'";
$res=mysqli_query($cn,$sql);

while($row=mysqli_fetch_array($res))
{
	echo "<table border='1'>
<tr>
<th> username </th>
<th> mobile</th>
<th> email</th>
</tr>";

	echo"<tr>";

echo "<td>".$row['username']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['email']."</td>";

echo "</tr>";
}
echo "</table>";

}
		
?>
