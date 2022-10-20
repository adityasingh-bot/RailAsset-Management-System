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
function makeUppercase() {
document.aa.assetname.value = document.aa.assetname.value.toUpperCase();
document.aa.assetcode.value = document.aa.assetcode.value.toUpperCase();
}
function ValidateAlpha(evt) {
debugger;
var keyCode = (evt.which) ? evt.which : evt.keyCode
if ((keyCode >= 65 && keyCode <= 97) || keyCode == 32 || (keyCode >= 97 && keyCode <= 122 ||keyCode ==8 ))
return true;
return false;
}
</script>
<script language="javascript">
function close()
	{
	
	$('#modal9').modal('show');
	
	}
function check()
{
 if(document.aa.assetname.value=="")
  {close();
   // alert("Plese Enter Station Name");
   
	document.aa.assetname.focus();
	return false;
  }
  if(document.aa.assetcode.value=="")
  {close();
    //alert("Plese Enter Station Code");
	
	document.aa.assetcode.focus();
	return false;
  }
  
   return true;
 }
  </script>      
</head>

<body>


<div id="wrapper">

<?php include('imp/header.php');?>
<?php include('imp/loginmobilemenu.php');?>
    <?php include('imp/loginnewnav.php');?>
<!------------------------------------------------------------------>
<div>
<h1 style="display: inline">Welcome:</h1><h2 style="color:#e21212;display: inline"><?php echo $_SESSION['USERID'];?></h2></div>
<!------<form action="" method="post" name="sa" onsubmit="return check();">-->

    <label for="assetname" style="font-size:36px;margin-left:550px;"> ADD ASSET</label>

 <div class="jumbotron text-center">
   <div class="container-fluid text-center">
 
   <form action="" method="post" name="aa" onsubmit="return check();" class="form-inline">
  <div class="form-group">
    <label for="assetname" style="font-size:20px"> ASSET NAME:</label>
    <input type="text" class="form-control" id="assetname" placeholder="ENTER ASSET NAME" style="font-size:18px" name="assetname" onkeypress="return ValidateAlpha(event);" onkeyup="makeUppercase();">
  </div>
  <div class="form-group">
    <label for="assetcode" style="font-size:20px">ASSET CODE:</label>
    <input type="text" class="form-control" id="assetcode" placeholder="ENTER ASSET CODE" style="font-size:18px" name="assetcode" onkeyup="makeUppercase();">
  </div>
  <button type="submit" class="btn btn-success" style="font-size:18px" name="submit">OK</button>
</form>


<?php
include ('include/modal/modal12.php');
if(@$_GET['error']!='')
{

	echo "<script> $('#modal12').modal('show') </script>";
	}
?>
</div>
</div>
<!------<div id="add">
<table class="table table-hover table-responsive">
<tr>
<td align="center">Station Name</td>
<td align="center"> <input name="stdname" type="text"  /></td>
</tr>
<tr>
<td align="center">Station Code</td>
<td align="center"><input name="stdcode" type="text"  /></td>
</tr>

    <tr>
    <td colspan="2" align="center"><input name="submit" type="submit" value="OK" /></td>
    
    
    </tr>
</table>
</div>

</form>-->
<?php
include ('include/connection.php');
include ('include/modal/modal7.php');
include  ('include/modal/modal8.php');
include  ('include/modal/modal9.php');
if(isset($_POST['submit']))
{
$a=$_POST["assetname"];
$b=$_POST["assetcode"];

                                                                                               
$que="select * from add_asset where ASSETNAME='$a' OR ASSETCODE='$b'";
$run=mysqli_query($con,$que);
if(mysqli_num_rows($run)>0)
{
echo "<script> $('#modal7').modal('show') </script>";}
else 
{
$que="insert into add_asset( ASSETNAME, ASSETCODE)values('$a','$b')";
if(mysqli_query($con,$que))
{
echo "<script> $('#modal8').modal('show') </script>";


}
}
}
	?>
    <?php include ('setdisplay.php');?>	
    
</div>
<?php require('imp/footer.php');?>

</body>
</html>