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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAILWAYS|ASSET</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mycss.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
 <link rel="stylesheet" href="css/w3.css">
 <link rel="stylesheet" href="include/demos.css" type="text/css">
 <link rel="stylesheet" href="include/jquery.ui.all.css" type="text/css">
 <script src="js/bootstrap.min.js"> </script>
<script src="js/jquery-3.1.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/bootstrap.js"> </script>

<script src="include/jquery-1.8.3.min.js"></script>
	<script src="include/jquery.ui.core.js"></script>
	<script src="include/jquery.ui.widget.js"></script>
<script src="include/jquery.ui.datepicker.js"></script>

	

<script>

$(function() 
		{
		$( "#datepicker" ).datepicker({changeMonth: true,
			changeYear: true,dateFormat: 'yy-mm-dd' , minDate:-2555, maxDate: "+0D"});
	
	});
	
	$(function() 
		{
		$( "#datepicker1" ).datepicker({changeMonth: true,
			changeYear: true,dateFormat: 'yy-mm-dd' , minDate:-2555, maxDate: "+20Y"});
	
	});
</script>
<!--------------------------------------MAIN AJAX CONNECT--------------------------------------->
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
/* STATION CODE */
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
		
			
	}
/* ASSEST CODE */
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
/* REPLACEMENT DATE*/

function getRep(e,txt) {		
	debugger;
	////alert(countryId);
//var x=	document.getElementById('datepicker');
		//var strURL="findState.php?country="+countryId;
		var txt= document.getElementById("datepicker1").value;
		var strURL='Allotdate.php?Subjec_Name='+e+'&Sub_Name='+txt;
		
		//var strURL="Allotdate.php?Sub_Name="+d;
	
		
		var xhr = new XMLHttpRequest();
xhr.open("GET", strURL, true);
xhr.onreadystatechange = function() {
//alert(xhr.readyState +  '----'+xhr.status);
//alert('response----'+xhr.responseText);
  if (parseInt( xhr.readyState )== 4 && parseInt( xhr.status )== 200) {
  debugger;
    // JSON.parse does not evaluate the attacker's scripts.
	//alert('response----'+xhr.responseText);
    document.getElementById('TTT').innerHTML=xhr.responseText;	
  }
}
xhr.send();
		
			
	}
/* ----------- */

	
	
	
	
	</script>
</head>

<body>

<div id="wrapper">
<?php include('imp/header.php');?>
<?php include('imp/loginmobilemenu.php');?>
    <?php include('imp/loginnewnav.php');?>
<!------------------------------------------------------------------>
<?php

if(@$_GET['error']!='')
 echo " <div class=col-lg-12>
<div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong><center><h2>".@$_GET['error']."</h2></center></strong>
</div></div> ";
?>
<div>
<h1 style="display: inline">Welcome:</h1><h2 style="color:#e21212;display: inline"><?php echo $_SESSION['USERID'];?></h2></div>
<!------<form action="" method="post" name="sa" onsubmit="return check();">-->
<?php 
include ('include/connection.php');?>
    <div class="container">
     <label for="stdname" style="font-size:36px;margin-left:450px;">ASSET ALLOT</label>
<div class="row">
<div class=" col-md-12 well text-center " >


 <div class="container-fluid">
 
 
  <form class="form-horizontal" action="Allotdb.php" method="post"   class="table-responsive" style="margin-left:300px;" id="myform" >
   <!----php code------------------------------------------------------------------------------------------->
   <?php
/*if(isset($_POST['e']))


{

 $E=$_POST["d"]."<br>";

 $J=$_POST["e"]."<br>";
$x=$J*365;

$date=(date_create($_POST["d"]));
//date_add($date,date_interval_create_from_date_string($_POST["e"].'days'));
date_add($date,date_interval_create_from_date_string($x.'days'));
 $y= date_format($date,"m-d-Y");
 echo $y;
}*/
?>  


<!------------------------------ <label for="stdname" style="font-size:20px"> STATION NAME:</label>
    <input type="text" class="form-control" id="stdname" placeholder="ENTER STATION NAME" style="font-size:18px" name="stdname">------------------------------------------------------------------- -->

    <div class="form-group" style="font-size:17px">
      <label class="control-label col-sm-3" for="" >STATION NAME:</label>
      <div class="col-sm-4" >
  <select class="form-control"   name="stdname" onChange="getTest(this.value)" required>
  <option selected="true" value="">Select Station</option>
  <?php $que=mysqli_query($con,"select * from add_station");
  while($row=mysqli_fetch_array($que))
  {
  echo"<option>",$row['STDNAME'],"</option>";
  }
        ?>
    </select>
</div>
    </div>
        <div class="form-group" style="font-size:17px">
        <label class="control-label col-sm-3" >STATION CODE:</label>
    <div class="col-sm-4" id="T">
 <input type="text" class="form-control" name="stdcode" readonly="true"  required />
 
  <!--<div id="T"><input type="text" name="stdcode" /></div>-->
  
  </div>
    </div>
    <div class="form-group" style="font-size:17px" >
      <label class="control-label col-sm-3" for="">ASSET NAME: </label>
      <div class="col-sm-4">
  <select class="form-control"   name="assetname" onChange="getAsset(this.value)" required>
  <option selected="true">Select Asset Name</option>
   <?php $que=mysqli_query($con,"select * from add_asset");
  while($row=mysqli_fetch_array($que))
  {
  echo"<option>",$row['ASSETNAME'],"</option>";
  }
        ?>
    
  </select>
</div>
    </div>
    <div class="form-group" style="font-size:17px">
      <label class="control-label col-sm-3" for="">ASSET CODE: </label>
      <div class="col-sm-4" id="TT">
    <input type="text" class="form-control"   name="assetcode" readonly="true" required />
    <!-----------<div id="TT"><input type="text" name="assetcode" /></div>-->
  </div>
    </div>
    
    <div class="form-group" style="font-size:17px">
      <label class="control-label col-sm-3" for="">SERIAL NUM: </label>
      <div class="col-sm-4">
    <input type="text" class="form-control" placeholder="Serial No"  name="serialnum"required />
  </div>
    </div>
    
    
   
    
   
    <div class="form-group" style="font-size:17px">
      <label class="control-label col-sm-3" for="">INSTALLATION DATE</label>
      <div class="col-sm-4">
  <!--   <input type="date" class="form-control" placeholder="Installation Datte" name="d" id="datepicker" required />-->
   <div id="demos.css"><input name="d" type="text" class="form-control"  placeholder="Installation Date" id="datepicker1" required /></div>
   
  </div>
    </div>
     <div class="form-group" style="font-size:17px">
    <label class="control-label col-sm-3" for="">REPLACE AFTER:</label>
  <div class="col-sm-4" >
  <!---  <input type="text" class="form-control" placeholder="Replace After in Years" name="e" required />
    <select class="form-control"   name="e"  required>--->
     <select class="form-control"   name="e" onChange="getRep(this.value)"  required>
  <option  selected="true" value="" >Select Years</option>
  <option value="1">1 YEARS</option>
  <option value="2">2 YEARS</option>
  <option value="3">3 YEARS</option>
  <option value="4">4 YEARS</option>
  <option value="5">5 YEARS</option>
  <option value="6">6 YEARS</option>
  <option value="7">7 YEARS</option>
  <option value="8">8 YEARS</option>
  <option value="9">9 YEARS</option>
  <option value="10">10 YEARS</option>
    </select>
    
  </div>
  </div>
    <div class="form-group" style="font-size:17px">
     <label class="control-label col-sm-3" for=""> REPALCEMENT DATE:</label>
     <div class="col-sm-4" id="TTT">



<div id="demos.css"><input name="f" type="text" class="form-control" id="datepicker1" readonly="readonly" required/></div>
  
  </div>
  </div>

    <div class="form-group col-md-9" >       
   
      <!--<button type="button" class="btn btn-primary" style="width:200px" name="btn0">ALLOT</button>-->
<input type="submit" class="btn btn-primary btn-lg active" style="width:300px;" value="ALLOT" name="Submit" />
      </div>
  
    
</form>


</div>
</div>
</div>
</div>
    
</div>
<?php require('imp/footer.php');?>



</body>
</html>