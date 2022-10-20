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
include ('include/modal/modal10.php');

 $p=$_POST['stdname'];
 $q=$_POST['stdcode'];
 $r=$_POST['assetname'];
 $s=$_POST['assetcode'];
 $t=$_POST['serialnum'];
 $u=$_POST['d'];
 $v=$_POST['e'];
 $w=$_POST['f'];

// to check weather user name already exist or not
 $que="select SERIALNUM from allot_asset where binary SERIALNUM='$t'";
 $run=mysqli_query($con,$que);
//to check weather any row exist or not in table
$result=mysqli_num_rows($run);
if($result==1)
{ 
  echo "<script> $('#modal10').modal('show') </script>";

//echo"<script> window.open('Allot.php','_self')
   }
   else
   {
  //query string
  
  /*$qe="insert into allot_asset (STATIONNAME,STATIONCODE,ASSETNAME,ASSETCODE,SERIALNUM,INITDATE,REPLACE,REPMDATE) values('$p','$q','$r','$s','$t','$u',$v,'$w')";*/
  $qe="insert into allot_asset (STATIONNAME,STATIONCODE,ASSETNAME,ASSETCODE,SERIALNUM,INITDATE,REP,REPMDATE) values('$p','$q','$r','$s','$t','$u','$v','$w')";
  //to execute the query
  mysqli_query($con,$qe);
 
    
header('location:Allot.php?error=ASSET ALLOTED SUCCESSFULLY!!!!!!!!!!!!');

//echo"<script> window.open('Allot.php','_self')
  
 
}
?>

