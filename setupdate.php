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
<title>Railways|ASSET</title>
<link href="css/sty.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<?php 
	
include ('include/connection.php');


 $a=@$_GET['ASSETNAME'];

	$b= $_POST["Nam"];
	$B= $_POST["assetcode"];
	
	

	
	$query ="update add_asset set ASSETNAME ='$b', ASSETCODE='$B' where ASSETNAME='$a'";
	
	$af = mysqli_query($con,$query);
	if($af>=1)
	{
header('Location:Addset.php?error=Success');
	}

?>



</body>
</html>
