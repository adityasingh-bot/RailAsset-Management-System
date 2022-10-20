<!-------------CONNECTION TO DATABASE------------------------->
<?php
$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$db=mysqli_select_db($con,"railway") or die(mysqli_error());
?>