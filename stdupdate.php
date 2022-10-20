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

 $a=@$_GET['STDNAME'];

	$b= $_POST["Nam"];
	$B= $_POST["stdcode"];
	
	

	
	$query ="update add_station set STDNAME ='$b', STDCODE='$B' where STDNAME='$a'";
	
	$af = mysqli_query($con,$query);
	if($af>=1)
	{
	//echo"<script> window.open('Addstd.php','$('#modal13').modal('show')')
	

	
           header('Location:Addstd.php?error=Success');
	}

?>




