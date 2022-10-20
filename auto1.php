<?php 
/*session_start();
if(!($_SESSION['Id']))
{
header('location:login.php?error=you are not administrator please login again');
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--<link href="../Admin-user css/Question.css" rel="stylesheet" type="text/css" />-->
<?php include ('include/connection.php');?>
<script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	<!----->
	function getTest(STDNAME) {		
	debugger;
	////alert(countryId);
	
		//var strURL="findState.php?country="+countryId;
		var strURL="Allotauto.php?Subjec_Name="+STDNAME;
		
		var xhr = new XMLHttpRequest();
xhr.open("GET", strURL, true);
xhr.onreadystatechange = function() {
//alert(xhr.readyState +  '----'+xhr.status);
//alert('response----'+xhr.responseText);
  if (parseInt( xhr.readyState )== 4 && parseInt( xhr.status )== 200) {
  debugger;
    // JSON.parse does not evaluate the attacker's scripts.
	//alert('response----'+xhr.responseText);
    document.getElementById('T').innerHTML=xhr.responseText;	
  }
}
xhr.send();
		
			
	}<!-->
	
	
	function getAsset(ASSETNAME) {		
	debugger;
	////alert(countryId);
	
		//var strURL="findState.php?country="+countryId;
		var strURL="Allotasset.php?Subjec_Name="+ASSETNAME;
		
		var xhr = new XMLHttpRequest();
xhr.open("GET", strURL, true);
xhr.onreadystatechange = function() {
//alert(xhr.readyState +  '----'+xhr.status);
//alert('response----'+xhr.responseText);
  if (parseInt( xhr.readyState )== 4 && parseInt( xhr.status )== 200) {
  debugger;
    // JSON.parse does not evaluate the attacker's scripts.
	//alert('response----'+xhr.responseText);
    document.getElementById('TT').innerHTML=xhr.responseText;	
  }
}
xhr.send();
		
			
	}
	
	
	
	
	
</script>


</head>

<body>
<div id="wrapper">
<div id="header">
<?php 

 ?>
</div><!--end of header-->
<div id="q">
<form name="Que" action="" method="post" onsubmit="return check();"> <table><tr>
<td><h4>Question form</h4></td></tr>
<tr><td>Select Station Name</td>
 <td><select name="Station_Name" onChange="getTest(this.value)">
	<option selected="selected">Select Station</option>
	<?php
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$db=mysqli_select_db($con,"railway") or die(mysqli_error());
	$que=mysqli_query($con,"select * from add_station");
while($row=mysqli_fetch_array($que))
{
echo"<option value=",$row['STDNAME'],">",$row['STDNAME'],"</option>";}?>
</select></td></tr>
<tr><td><div id="T"><input type="text" name="stdcode" /></div></td>
<!----------------------------------------->
tr><td>Select Asset Name</td>
 <td><select name="Asset_Name" onChange="getAsset(this.value)">
	<option selected="selected">Select Asset</option>
	<?php
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$db=mysqli_select_db($con,"railway") or die(mysqli_error());
	$que=mysqli_query($con,"select * from add_asset");
while($row=mysqli_fetch_array($que))
{
echo"<option value=",$row['ASSETNAME'],">",$row['ASSETNAME'],"</option>";}?>
</select></td></tr>
<tr><td><div id="TT"><input type="text" name="assetcode" /></div></td>
<!-------------------------------------------->

<div id="r"><input name="Submit" type="submit" value="Insert"/>
<a href="ShowData.php"> <input type="button" name="show" value="show all" /></a></div><!--r--><br />

</form>
</div><!--q-->
</div><!--wrapper-->

</body>
</html>