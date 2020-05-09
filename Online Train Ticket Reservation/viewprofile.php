<?php
session_start();
$cn=mysqli_connect("localhost","root","","blood");
 if(!$cn)
  {
   die('could not be connect'. mysqli_error());
  }
  
$id=$_SESSION['id'];
$s="SELECT *,bloodgroup.b_name FROM don_register
    INNER JOIN bloodgroup
    ON don_register.b_id=bloodgroup.b_id 
	WHERE don_id=$id ";
$res=mysqli_query($cn,$s);
$row=mysqli_fetch_assoc($res);
?>

<html>
<head>
	 <link rel="stylesheet" href="/blood/mainstyle.css">
	 <style type="text/css">
	 	
		div.division{
			border-radius:30px;
			background-color: white;
			box-shadow:10px 10px 13px black;
			margin:30px 30%;
      padding:10px 5px;
		}

		div.container {
             position: relative;
        }

		img.profile{
			border-radius: 30px;
		    width:230px; 
			height:230px;
			border:1px solid #ff1a1a;
		}
		
		.container .file{
            position: absolute;
            top:200px;
            left:55px;
            transform: translate(-50%, -50%);
            border:none;
        }

        input[type=file]{
            display:none;
        }

        img.icon:hover{
            content:url('/blood/img/screenshot-512blue.png'); 
        }

        table {
            border-collapse: collapse;
        }

        td.inner{
			color:rgba(128,0,0,1);
			font-family: 'Karla', sans-serif;
		}
		th.inner{
			color:#ff1a1a;
		}
	 </style>
	
</head>
<body>
<br>
<h1 align="center">Donor Profile</h1>
<div align="center" class="division">
<table align="center" cellpadding='10'>
<tr>
  <th colspan="2">
  <form action="#" method="post" enctype="multipart/form-data">
  <div class="container">
        <?php
        $gender=$_SESSION['gender'];
        if($row['image'])
          echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="profile"/>';
        else
        {	if($gender=='Male')
               echo '<img src="/blood/img/head-659651_1920.png" class="profile"/>';
             else
               echo '<img src="/blood/img/femalehead.png" class="profile"/>';
        }
        ?>
  <label class="file" title="upload your profile picture">
    <input type="file" name="img"/>
    <img src="/blood/img/screenshot-512.png" width="36px" height="36px" class="icon"/>
  </label>&nbsp;&nbsp;
  <button type="submit" name="sub" style="border:none" title="click here to upload"><img src="/blood/img/upload-2-256.png" width="20px" height="20px"/></button>
   </div>
  </form>
  </th>
</tr>
<?php
echo "
<tr>
<th class='inner' align='left'>Name of Doner:</th>
<td class='inner'>".$row['name']."</td>
</tr>

<tr>
<th class='inner' align='left'>Blood group:</th>
<td class='inner'>".$row['b_name']."</td>
</tr>

<tr>
<th class='inner' align='left'>Gender:</th>
<td class='inner'>".$row['gender']."</td>
</tr>

<tr>
<th class='inner' align='left'>Age:</th>
<td class='inner'>".$row['age']."</td>
</tr>

<tr>
<th class='inner' align='left'>Mobile-No:</th>
<td class='inner'>".$row['mobile']."</td>
</tr>

<tr>
<th class='inner' align='left'>Email:</th>
<td class='inner'>".$row['email']."</td>
</tr>
</table>
";
?>
</div>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
 $cn=mysqli_connect("localhost","root","","blood");
 if(!$cn)
 {
  die("not connected");
 }
 else
 {
   $id=$_SESSION["id"] ;
   $filename=addslashes($_FILES["img"]["name"]);
   $tmpname=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
   $filetype=addslashes($_FILES["img"]["type"]);
   $array=array('jpg','JPG','JPEG','jpeg','png','PNG','jfif');
   $ext=pathinfo($filename,PATHINFO_EXTENSION);

	 if(in_array($ext,$array))
	 {
	  $sql="UPDATE don_register
     SET img_name='$filename',image='$tmpname'
     WHERE don_id='$id'";
	 $check=mysqli_query($cn,$sql);
	 }
	 else
	 {
	     echo "<script>
               alert('unsupported format of image uploaded');
              </script>";
	 }

     if ($check)
     {
        echo "<script>
              alert('profile picture added successfully');
             </script>";
      }
   else
      {
         echo "<script>
               alert('Error in uploading (image must be less than 100kb)');
              </script>";
      }

   }	   
 }	
?>