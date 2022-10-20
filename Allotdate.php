
<?php
  $Subid=($_GET['Subjec_Name']);
  $Sub=($_GET['Sub_Name']);

if(isset($_GET['Subjec_Name']))
{
 //$E=$_GET["Sub_id"]."<br>";
 $J=$_GET["Subjec_Name"];
 $x=$J*365;

$date=(date_create($_GET["Sub_Name"]));
//date_add($date,date_interval_create_from_date_string($_POST["e"].'days'));
date_add($date,date_interval_create_from_date_string($x.'days'));
 $y= date_format($date,"Y-m-d");
}
?>  

<input type="text" class="form-control" name="f" value="
<?php  
     

echo @$y;
 ?>" readonly="true"
 />