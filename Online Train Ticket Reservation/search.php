/*college registration*/
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="search.php" method="post">
	<div>
	<input type="text" name="search"  ><br>
	<input type="submit"  style="border-width: 5px" class="button"value="button">

	</div>
</form>
</body>
</html>

<?php
$cn=mysqli_connect("localhost","root","","train");
if(!$cn)
{ die('could not connect');}
else
{
	echo "hello";
$p=$_POST['search'];

$sql="select * from booked where book_by='$p'";
$res=mysqli_query($cn,$sql);

while($row=mysqli_fetch_array($res))
{
	echo "<table border='1'>
<tr>
<th> book_by </th>
<th> book_contact</th>
<th> book_name</th>
</tr>";

	echo"<tr>";

echo "<td>".$row['book_by']."</td>";
echo "<td>".$row['book_contact']."</td>";
echo "<td>".$row['book_name']."</td>";

echo "</tr>";
}
echo "</table>";

}
		
?>
