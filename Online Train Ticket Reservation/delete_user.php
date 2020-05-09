<?php
$search1='Null';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		body {
	margin: 0;
	width: 100%;
	height: 100vh;
	font-family: "Exo", sans-serif;
	color: #fff;
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

.sbx-custom {
  display: inline-block;
  position: relative;
  width: 300px;
  height: 51px;
  white-space: nowrap;
  box-sizing: border-box;
  font-size: 14px;
}

.sbx-custom__wrapper {
  width: 100%;
  height: 100%;
}

.sbx-custom__input {
  display: inline-block;
  -webkit-transition: box-shadow .4s ease, background .4s ease;
  transition: box-shadow .4s ease, background .4s ease;
  border: 0;
  border-radius: 26px;
  box-shadow: inset 0 0 0 2px #CCCCCC;
  background: #FFFFFF;
  padding: 0;
  padding-right: 41px;
  padding-left: 51px;
  width: 100%;
  height: 100%;
  vertical-align: middle;
  white-space: normal;
  font-size: inherit;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.sbx-custom__input::-webkit-search-decoration, .sbx-custom__input::-webkit-search-cancel-button, .sbx-custom__input::-webkit-search-results-button, .sbx-custom__input::-webkit-search-results-decoration {
  display: none;
}

.sbx-custom__input:hover {
  box-shadow: inset 0 0 0 2px #b3b3b3;
}

.sbx-custom__input:focus, .sbx-custom__input:active {
  outline: 0;
  box-shadow: inset 0 0 0 2px #FF2E83;
  background: #FFFFFF;
}

.sbx-custom__input::-webkit-input-placeholder {
  color: #BBBBBB;
}

.sbx-custom__input::-moz-placeholder {
  color: #BBBBBB;
}

.sbx-custom__input:-ms-input-placeholder {
  color: #BBBBBB;
}

.sbx-custom__input::placeholder {
  color: #BBBBBB;
}

.sbx-custom__submit {
  position: absolute;
  top: 0;
  right: inherit;
  left: 0;
  margin: 0;
  border: 0;
  border-radius: 25px 0 0 25px;
  background-color: rgba(255, 255, 255, 0);
  padding: 0;
  width: 51px;
  height: 100%;
  vertical-align: middle;
  text-align: center;
  font-size: inherit;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.sbx-custom__submit::before {
  display: inline-block;
  margin-right: -4px;
  height: 100%;
  vertical-align: middle;
  content: '';
}

.sbx-custom__submit:hover, .sbx-custom__submit:active {
  cursor: pointer;
}

.sbx-custom__submit:focus {
  outline: 0;
}

.sbx-custom__submit svg {
  width: 31px;
  height: 31px;
  vertical-align: middle;
  fill: #FF2E83;
}

.sbx-custom__reset {
  display: none;
  position: absolute;
  top: 12px;
  right: 12px;
  margin: 0;
  border: 0;
  background: none;
  cursor: pointer;
  padding: 0;
  font-size: inherit;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  fill: rgba(0, 0, 0, 0.5);
}

.sbx-custom__reset:focus {
  outline: 0;
}

.sbx-custom__reset svg {
  display: block;
  margin: 4px;
  width: 19px;
  height: 19px;
}

.sbx-custom__input:valid ~ .sbx-custom__reset {
  display: block;
  -webkit-animation-name: sbx-reset-in;
          animation-name: sbx-reset-in;
  -webkit-animation-duration: .15s;
          animation-duration: .15s;
}

@-webkit-keyframes sbx-reset-in {
  0% {
    -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
    opacity: 0;
  }
  100% {
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes sbx-reset-in {
  0% {
    -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
    opacity: 0;
  }
  100% {
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

input
{
  color: #000;
}


	</style>
</head>
<body>
 
	<div align="center" style="margin: 350px 50px 75px 100px" >

	
<form  class="searchbox sbx-custom" action="" method="post">
  <div class="sbx-custom__wrapper">
    <input type="text" name="search1" placeholder="Enter the user Id"  required="required" class="sbx-custom__input" ><br><br>
    
    <button type="submit" class="sbx-custom__submit" value="submit">  </button>

     </div>
</form>

</div>
</form>
</body>
</html>	
<?php
$cn=mysqli_connect("localhost","root","","train");
if(!$cn)
{
  die('could not connect');
}
else
{
 error_reporting(0); 
$p=$_POST['search1'];
		
if($p == ""){
  echo "<script>alert('Enter the user Id')</script>";
  exit();
}

//$row=mysqli_fetch_array($res);
//print_r($row);
$sql1="SELECT * from reg where userid='$p' ";
$res1=mysqli_query($cn,$sql1);
$row=mysqli_num_rows($res1);
//echo $res1;

if($row>=1) 
{
  $sql="delete from reg where userid='$p' ";
#echo $sql;
//$res = $cn->$sql;
//echo $res;
$res=mysqli_query($cn,$sql);
  echo"<script> alert('sucessfully  Delete User ')</script>";

}
else
{
echo"<script> alert(' User Doesnot Exist ')</script>";
}
}
/*while($row=mysqli_fetch_array($res))
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
echo"<input type='text' name='search2' placeholder='Enter your ID'  required='required' class='sbx-custom__input' >";

*/

    
?>
