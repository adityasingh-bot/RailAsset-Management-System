<?php
ob_start();
session_start();
if(!($_SESSION['USERID']))
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
			form1.action = "delsetpass.php?ASSETNAME=<?php echo $a ?>";
			form1.submit();
	}
function cancel() {
	form1.action ="Addset.php?ASSETNAME=<?php echo $a?>";
	form1.submit();
	}
	</script>
</head>

<body>
<div id="wrapper">

<?php include('imp/header.php');?>
<?php include('imp/loginmobilemenu.php');?>
    <?php include('imp/loginnewnav.php');?>
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


    <label for="stdname" style="font-size:36px;margin-left:550px;"> DELETE ASSET</label>

 <div class="jumbotron text-center">
 
   <div class="container-fluid text-center">
 
   <form action="" method="post" name="form1"  class="form-inline">
  <div class="form-group">
    <label for="stdname" style="font-size:20px"> ASSET NAME:</label>
    <input type="text" class="form-control"  onkeyup="isalpha(this)" style="font-size:18px" name="Nam">
  </div>
  <div class="form-group">
    <label for="stdcode" style="font-size:20px">ASSET CODE:</label>
    <input type="text" class="form-control"  style="font-size:18px" name="setcode">
  </div>
  <button type="button" class="btn btn-success" style="font-size:18px" name="button1" onclick="del()">DELETE</button>
  <button type="button" class="btn btn-danger" style="font-size:18px" name="button" onclick="cancel()">CANCEL</button>
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
				$recordset = mysql_query("select * from add_asset where ASSETNAME= '$a' ");
								
								while($record = mysql_fetch_array($recordset))
								{
								echo"<script>
								form1.Nam.value ='",$record["ASSETNAME"],"';
								form1.setcode.value ='",$record["ASSETCODE"],"';
								
								
								</script>";
								}
						?>   
                        </form>
                    
 </table></center></p>
 </div><!---ends here bodypart here---->
 </div>
 </div>
 <?php require('imp/footer.php');?>
 
</body>
</html>