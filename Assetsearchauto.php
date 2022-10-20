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

include ('include/connection.php');
$q="SELECT STDCODE FROM add_station WHERE STDNAME='$Subid'";
$re=mysqli_query($con,$q);
$re1=mysqli_fetch_array($re);
$re2=$re1['STDCODE'];


?>
<input type="text" class="form-control"  placeholder="ENTER STATION CODE" style="font-size:18px" name="stdcode" value="
<?php  
     

echo $re1['STDCODE'];
 ?>" readonly="true"
 />