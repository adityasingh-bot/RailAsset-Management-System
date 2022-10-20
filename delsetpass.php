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




<?php
include ('include/connection.php');
$a=@$_GET['ASSETNAME'];

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
<script>
function del() {
			form1.action = "delstddb.php?STDNAME=<?php echo $a ?>";
			form1.submit();
	}
function cancel() {
	form1.action ="Addstd.php?STDNAME=<?php echo $a?>";
	form1.submit();
	}
	</script>
	<style type="text/css">
    @media screen and (min-width: 768px) {
        #md {
          width: 1200px; /* New width for default modal */
        }
        .modal-sm {
          width: 350px; /* New width for small modal */
        }
    }
    @media screen and (min-width: 992px) {
        .modal-lg {
          width: 950px; /* New width for large modal */
        }
    }
	#h3
	{
	font-family:Open Sans-SemiBold;
	color:#FF0000;
	margin-left:250px;
	font-size:40px;
	
	
	}
	.#mb{
	background-color:#ed1d24}
	.modal-title{
	font-size:30px;
	}
	

.table,#mh{
   
    -webkit-animation: mymove 1s infinite; /* Chrome, Safari, Opera */
    animation: mymove 1s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
       from {background-color: #f56358;}
    to {background-color:#FFFFFF;}
}

/* Standard syntax */
@keyframes mymove {
    from {background-color: #f56358;}
    to {background-color:#FFFFFF;}
	
}
</style>
</head>

<body>
<div id="wrapper">
<?php include ('imp/header.php');?>
<?php include ('imp/loginmobilemenu.php');?>
    <?php include ('imp/loginnewnav.php');?>
<!----------------------------------------------------------body--------------------------------------------------------------
<br />

<div class="container-fluid">
  <div class="row well" >
     <div class="col-sm-2">
          <img src="Picture/Logo1.png" class="img-circle" />
     </div>
     <div class="col-sm-8">
          <h2 align="center"><strong><font color="#FF0000" size="+3" class="text-primary" style="font-family:Algerian">INDIAN RAILWAY ASSET MANAGEMENT</font></strong></h2>
     </div>
     <div class="col-sm-2">
          <img src="Picture/pg.jpg"  class="img-circle"/>
     </div>

      
  </div>
</div>

<!-------------------------------------------------------------------------------------------------------------------------------------------
<div class="container-fluid">
    <div class="row">
         <div class="col-sm-12 bg-primary">
            <marquee style="font-family:Stencil Std; font-weight:bold;">INDIAN RAILWAY ASSET MANAGEMENT</marquee>
         </div>
    
    </div>
</div>
<!------------------------------------------------------------------>
<div>
<h1 style="display: inline">Welcome:</h1><h2 style="color:#e21212;display: inline"><?php echo $_SESSION['USERID'];?></h2></div>
<br /><br />
<div>
    <label for="stdname" style="font-size:36px;margin-left:500px;"> HIGH SECURITY PASSWORD</label>
</div>
 <div class="jumbotron text-center">
 
   <div class="container-fluid text-center">
 
<form action="" method="post" name="s"  class="form-inline">
  <div class="form-group">
    <label style="font-size:20px"> ENTER PASSWORD:</label>
    <input type="password" class="form-control" style="font-size:18px" name="c">
  </div>
 <!-- <input type="submit" name="submit" style="font-size:18px" value="DELETE"  />-->
  <button type="submit" class="btn btn-danger" style="font-size:18px" name="submit">DELETE</button>
</form>
</div>
<!--<form action="" method="post" name="s" onsubmit="return check();">
<table  class="TFtable">
<tr> 
<td colspan="2" align="center"><h1>High Security Password</h1></td>
</tr>
<tr>
<td align="center">Enter Password</td><br />
<br />
<td align="center"><input type="password" name="c" Place holder="Enter  Password" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input name="submit" type="submit" /></td>
</tr>
<tr>
<td colspan="2"></td>
</tr>
</table>
</form>

<!-----------------------------<form name="form1" action="" method="post">
<center><table   border="0" align="center"   >
    <tr><td colspan="2"><h1>EDIT STATION</h1></td>
    </tr>
    
    
    <tr><td >Station Name</td><td width="144">
    <input name="Nam" type="text" onkeyup="isalpha(this)" size="25" ></td></tr>
    <tr><td>Station Code</td>
    <td >
    <input name="stdcode" type="text" size="25" ></td></tr>
    
   
   <tr><td align="center">
      <input name="button1" type="button" onclick="Update()" value="Update"/>
    </td>
	      <td align="center">
            
              <input name="button" type="button" onClick="cancel()" value="Cancel">          
            </td>
    </tr>
  </table></center>
  </table></center>-->
                    
 <?php
  include ('include/modal/modalsetpass.php');
 $a=@$_GET['ASSETNAME'];
 $x= $_SESSION['USERID'];
 if(isset($_POST['submit']))
{
   $z=$_POST['c'];

   
$que="select * from admin where binary USERID='$x' AND binary PASSWORD='$z'";
   $run=mysqli_query($con,$que);
   
   if(mysqli_num_rows($run)==1)
  {
       
   $quer="DELETE FROM add_asset where ASSETNAME='$a'";
$af = mysqli_query($con,$quer);
         
	if($af>=1)
	{
	echo "<script> $('#modalpass').modal('show') </script>";
	//header("location:Addstd.php?=$a");
	//echo "ok";
	//exit();
	}
	
   	
}
else
{

//header('location:Addstd.php?error=either Email Id or Password is incorrect');
}
}


?>
 </div><!---ends here bodypart here---->
 </div>
 </div>
 <?php require('/imp/footer.php');?>
</body>
</html>