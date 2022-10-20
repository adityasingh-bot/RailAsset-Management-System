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
 $Subid=($_GET['Subjec_Name']);

include('include/connection.php');
$q="SELECT ASSETCODE FROM add_asset WHERE ASSETNAME='$Subid'";
$re=mysqli_query($con,$q);
$re1=mysqli_fetch_array($re);
$re2=$re1['ASSETCODE'];


?>
<input type="text" class="form-control" name="assetcode" value="
<?php  
      

echo $re1['ASSETCODE'];
 ?>" readonly="true"
/>