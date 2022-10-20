<?php
ob_start();
session_start();
if(!isset($_SESSION['USERID']))
{
  header('location:index.php?error=you are not administrator please login again');   
}		
		
 if( (time()- $_SESSION['last_login_timestamp'])>600)
	   {
    header('location:index.php?error=you are not administrator please login again');
      }
     else
        {
       $_SESSION['last_login_timestmap']=time();
        }  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAILWAYS|ASSET</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mycss.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
 <link rel="stylesheet" href="css/w3.css">
<script src="js/bootstrap.min.js"> </script>
<script src="js/jquery-3.1.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/bootstrap.js"> </script>
<script type="text/javascript">


function ValidateAlpha(evt) {
debugger;
var keyCode = (evt.which) ? evt.which : evt.keyCode
if ((keyCode >= 65 && keyCode <= 97) || keyCode == 32 || (keyCode >= 97 && keyCode <= 122 ||keyCode ==8 ))
return true;
return false;
}

function makeUppercase()
   {
      document.sa.stdname.value=document.sa.stdname.value.toUpperCase();
   }
   function makeUppercase1()
   {
      document.sa.stdcode.value=document.sa.stdcode.value.toUpperCase();
   }
</script>
<script language="javascript">
function close()
	{
	
	$('#modal5').modal('show');
	}
function check()
{
 if(document.sa.stdname.value=="")
  {
    close();
    //alert("Plese Enter Station Name");
	document.sa.stdname.focus();
	return false;
	
	 
  }
  if(document.sa.stdcode.value=="")
  {
    close();
   //alert("Plese Enter Station Code");
	document.sa.stdcode.focus();
	return false;
	
  }
  
   return true;
 }
  </script>      
</head>

<body>
<div id="wrapper">
<?php include ('imp/header.php');?>
<?php include ('imp/loginmobilemenu.php');?>
    <?php include ('imp/loginnewnav.php');?>
    
<!------------------------------------------------------------------>
<div>
<h1 style="display: inline">Welcome:</h1><h2 style="color:#e21212;display: inline"><?php echo $_SESSION['USERID'];?></h2></div>
<!------<form action="" method="post" name="sa" onsubmit="return check();">-->

    <label for="stdname" style="font-size:36px;margin-left:550px;"> ADD STATION</label>

 <div class="jumbotron text-center">
 
   <div class="container-fluid text-center">
 
   <form action="" method="post" name="sa" onsubmit="return check()" class="form-inline">
  <div class="form-group">
    <label for="stdname" style="font-size:20px"> STATION NAME:</label>
    <input type="text" class="form-control" id="stdname" placeholder="ENTER STATION NAME" style="font-size:18px" name="stdname"   onkeyup="makeUppercase();" onkeypress="return ValidateAlpha(event);" >
  </div>
  <div class="form-group">
    <label for="stdcode" style="font-size:20px">STATION CODE:</label>
    <input type="text" class="form-control" id="stdcode" placeholder="ENTER STATION CODE" style="font-size:18px" name="stdcode" onkeypress="return ValidateAlpha(event);" onkeyup="makeUppercase1();" >
  </div>
  <button type="submit" class="btn btn-success" style="font-size:18px" name="submit">OK</button>
</form>
<?php
include  ('include/modal/modal13.php');
if(@$_GET['error']!='')
{
/* echo " <div class=col-lg-12>
<div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2>".@$_GET['error']."</h2></center></strong>
</div></div> ";*/
	echo "<script> $('#modal13').modal('show') </script>";
	}
?>
</div>
</div>
<!------<<label for="assetname" style="font-size:36px;margin-left:550px;"> ADD ASSET</label>

 <div class="jumbotron text-center">
   <div class="container-fluid text-center">
 
   <form action="" method="post" name="aa" onsubmit="return check();" class="form-inline">
  <div class="form-group">
    <label for="assetname" style="font-size:20px"> ASSET NAME:</label>
    <input type="text" class="form-control" id="assetname" placeholder="ENTER ASSET NAME" style="font-size:18px" name="assetname">
  </div>
  <div class="form-group">
    <label for="assetcode" style="font-size:20px">ASSET CODE:</label>
    <input type="text" class="form-control" id="assetcode" placeholder="ENTER ASSET CODE" style="font-size:18px" name="assetcode">
  </div>
  <button type="submit" class="btn btn-success" style="font-size:18px" name="submit">OK</button>
</form>-->
<?php

include ('include/connection.php');
include ('include/modal/modal4.php');
include ('include/modal/modal5.php');
include ('include/modal/modal6.php');
if(isset($_POST['submit']))
{
 $a=$_POST["stdname"];
$b=$_POST["stdcode"];


$que="select * from add_station where STDNAME='$a' OR STDCODE='$b'";
$run=mysqli_query($con,$que);
if(mysqli_num_rows($run)>0)
{

echo "<script> $('#modal6').modal('show') </script>";

}
else 
{
$que="insert into add_station(STDNAME,STDCODE)values('$a','$b')";
if(mysqli_query($con,$que))
{
echo "<script> $('#modal4').modal('show') </script>";

}
}
}
	?>
    <?php include('stddisplay.php');?>	
    
</div>
<?php require('imp/footer.php');?>
</body>
</html>