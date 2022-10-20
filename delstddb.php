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
include('include/connection.php');
	
include ('include/modal/modal15.php');
 $a=@$_GET['STDNAME'];

	 $a= $_POST["Nam"];
	$b= $_POST["stdcode"];;
$que="DELETE FROM add_station where STDNAME='$a'";
	  $del=mysqli_query($con,$que);
	  if($del==1)
	  {
	  
	  echo "<script> $('#modal15').modal('show') </script>";
	 echo"<script> window.open('Addstd.php','_self')</script>";
 }
	 
	 
	?>


