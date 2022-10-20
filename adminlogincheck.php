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
include ('include/modal/modal3.php');
$x=$_POST['USERID'];
$y=$_POST['PASSWORD'];
$que="select * from admin where binary USERID='$x' and binary PASSWORD='$y'";
$run=mysqli_query($con,$que);
$result=mysqli_num_rows($run);

        if($result==1)
     { 
	 $USERID=$_SESSION['USERID']=$_POST['USERID'];
	  $_SESSION['last_login_timestamp']=time();
       header('location:Admin.php');
	   
     }
     else
       {
	
	   
	    echo "<script> $('#modal3').modal('show') </script>";
    
		 }
  

?>
         