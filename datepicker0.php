
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="include/jquery.ui.all.css" type="text/css">
<link rel="stylesheet" href="include/demos.css" type="text/css">

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="include/jquery-1.8.3.min.js"></script>
	<script src="include/jquery.ui.core.js"></script>
	<script src="include/jquery.ui.widget.js"></script>
<script src="include/jquery.ui.datepicker.js"></script>

	<script>
		$(function() 
		{
		$( "#datepicker" ).datepicker({changeMonth: true,
			changeYear: true,dateFormat: 'yy-mm-dd' , minDate:-2555, maxDate: "-36M +1D"});
	
	});
	
	</script>
    


</head>

<body>
<div id="wrapper">

<!----------------------------------------------------------body-------------------------------------------------------------->

<div class="container-fluid">
  <div class="row well" >
     <div class="col-sm-2">
          <img src="Picture/Logo1.png" class="img-circle" />
     </div>
     <div class="col-sm-8">
          <h2 align="center"><strong><font color="#FF0000" size="+3" class="text-primary" style="font-family:Algerian">INDIAN RAILWAY ASSET MANAGEMENT</font></strong></h2>
     </div>
     <div class="col-sm-2">
          <img src="Picture/r5.jpg"  class="img-circle"/>
     </div>

      
  </div>
</div>

<!-------------------------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
    <div class="row">
         <div class="col-sm-12 bg-primary">
            <marquee style="font-family:Stencil Std; font-weight:bold;">INDIAN RAILWAY ASSET MANAGEMENT</marquee>
         </div>
    
    </div>
</div>
<!------------------------------------------------------------------>
<div id="bodypart">
<h2> <h1>Welcome:<?php echo $_SESSION['USERID'];?></h1>
<!------<form action="" method="post" name="sa" onsubmit="return check();">-->
<?php 
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("railway",$con) or die(mysql_error());




?>

<div class="container">
<div class="row">
<div class=" col-md-12 well text-center ">


  <h3 id="h2" >ASSET ALLOT</h3><hr />

<form action="" method="post" name="sign" enctype="multipart/form-data"  >
<div id="reg">
<?php
if(isset($_POST['Submit']))

{

echo $E=$_POST["d"]."<br>";

echo $J=$_POST["e"]."<br>";
$x=$J*365;

$date=(date_create($_POST["d"]));
//date_add($date,date_interval_create_from_date_string($_POST["e"].'days'));
date_add($date,date_interval_create_from_date_string($x.'days'));
echo $y= date_format($date,"Y-m-d");
}
?>
<table  align="center">
<tr>
<td colspan="2"><h1>Candidate Registration</h1></td>
</tr>


<tr>
<td>Date of Installtion</td>
<td><div id="demos.css"><input name="d" type="text" size="30" placeholder="Date of Birth" id="datepicker" /></div></td>
</tr>
<label class="control-label col-sm-2" for="">REPLACE AFTER:</label>
 <input type="text" name="e" placeholder="Time in years" />
<label class="control-label col-sm-2" for="">REPLACEment date:</label>


   <input type="text" name="replace" value="<?php echo @$y;?>" />
   
    <tr>
    <td colspan="2">



    <?php
?>Today:<input type="text" name="DD" value="<?php 
$d=date_default_timezone_set('Asia/Kolkata'); 
echo  date("Y-m-d
");?>" />
</td>
</tr>
    
</table>
<table>
<tr>
<td><input name="Submit" type="submit"  value="Submit"></td>
</tr>
</table>

</form>

</div>

 
<?php

	/*$que="select * from register where Email='$C' ";
$run=mysql_query($que);
if(mysql_num_rows($run)>0)
{
echo"<script> alert('Candidate is already exists, Plz Try Something Different Candidate Name')</script>"."<br>";

echo"<script> window.open('reg.php','_self')</script>";
}
else 
{


$que="insert into register(Name,Father_Name,Email,Pass,dob,Gender,Education,Course,Address,location,Dat)values('$A','$B','$C','$D','$E','$F','$G','$H','$I','$Loc','$J')";
if(mysql_query($que))
{ 

 move_uploaded_file($_FILES["file"]["tmp_name"],"images/" .$_FILES["file"]["name"]);
 ?>
 <p style="color:#FF0000">
  "Candidate Information Saved Successfully";
</p>

}
else{
echo "not saved successfully";
}
}
}*/
?>
</div>

</body>
</html>
