
<?php
 $Subid=($_GET['Subjec_Name']);

include ('include/connection.php');
$q="SELECT STDCODE FROM add_station WHERE STDNAME='$Subid'";
$re=mysqli_query($con,$q);
$re1=mysqli_fetch_array($re);
$re2=$re1['STDCODE'];


?>
<input type="text" class="form-control" name="stdcode" value="
<?php  
     

echo $re1['STDCODE'];
 ?>" readonly="true"
/>