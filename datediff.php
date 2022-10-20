<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$d=date_default_timezone_set('Asia/Kolkata'); 
echo  date("Y-m-d
");
 echo $rd=strtotime($d);
  $dal=strtotime("2017-10-26");
  $diff=$rd-$dal;
  $a=floor($diff/(60*60*24*365));
  echo $a;
?>
</body>
</html>
