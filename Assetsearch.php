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
 <script src="js/bootstrap.min.js"> </script>
<script src="js/jquery-3.1.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/bootstrap.js"> </script>
<script language="javascript">
function close()
	{
	
	$('#modal1').modal('show');
	document.sa.stdname.focus();
	}
function check()
{
 if(document.sa.stdname.value=="")
  {
  close();
    //alert("Plese Enter Station Name");
	document.sa.stdname.focus();
	return false;
	
	 
  }
  if(document.sa.stdcode.value=="")
  {
    close();
   //alert("Plese Enter Station Code");
	document.sa.stdcode.focus();
	return false;
	
  }
  
   return true;
 }
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
		var strURL="Assetsearchauto.php?Subjec_Name="+STDNAME;
		
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
	/* ------------- */
	</script>
	
	<style type="text/css">
    @media screen and (min-width: 768px) {
        #md {
          width: 1200px; /* New width for default modal */
        }
        .modal-sm {
          width: 350px; /* New width for small modal */
        }
    }
    @media screen and (min-width: 992px) {
        .modal-lg {
          width: 950px; /* New width for large modal */
        }
    }
	#h3
	{
	font-family:Open Sans-SemiBold;
	color:#FF0000;
	margin-left:250px;
	font-size:40px;
	
	
	}
	#mb{
	background-color:#ed1d24}
	.modal-title{
	font-size:30px;
	}
	

.table,#mh{
   
    -webkit-animation: mymove 1s infinite; /* Chrome, Safari, Opera */
    animation: mymove 1s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
       from {background-color: #f56358;}
    to {background-color:#FFFFFF;}
}

/* Standard syntax */
@keyframes mymove {
    from {background-color: #f56358;}
    to {background-color:#FFFFFF;}
	
}
</style>
</head>

<body><!---------------BODY-->


<div id="wrapper"><!---------------WRAPPPER-->

<?php include('include/modal/modal.php');?>
<?php include('include/modal/modal2.php');?>


<!----------------------------------------------------------body-------------------------------------------------------------->
<?php include('imp/header.php');?>
<?php include('imp/loginmobilemenu.php');?>
    <?php include('imp/loginnewnav.php');?>
<!------------------------------------------------------------------>
<div>
<h1 style="display: inline">Welcome:</h1><h2 style="color:#e21212;display: inline"><?php echo $_SESSION['USERID'];?></h2></div>

<?php 
include ('include/connection.php');
?>
    <label for="stdname" style="font-size:36px;margin-left:550px;"> SEARCH ASSET</label>

 <div class="jumbotron text-center">
 
  <!---------------BODY- <div class="container-fluid text-center">-->
 
   <form action="" method="post" name="sa" onsubmit="return check()" class="form-inline">
  <div class="form-group">
    <label for="stdname" style="font-size:20px"> STATION NAME:</label>
   <select class="form-control"  name="stdname" onChange="getTest(this.value)" style="font-size:18px" >
  <option selected="true" value="">Select Station</option>
 <?php $que=mysqli_query($con,"select * from add_station");
  while($row=mysqli_fetch_array($que))
  {
  echo"<option>",$row['STDNAME'],"</option>";
  }
        ?>
    </select>
    
  </div>
  <div class="form-group" >
  <label for="stdcode" style="font-size:20px">STATION CODE:</label></div>
<div class="form-group" id="T" >  <input type="text" class="form-control" id="stdcode" placeholder="ENTER STATION CODE" style="font-size:18px" name="stdcode" readonly="true"></div>
    <input type="hidden" name="hd" value="<?php 
date_default_timezone_set('Asia/Kolkata'); 
echo date("Y-m-d");?>" />
<button type="submit" class="btn btn-success" style="font-size:18px" name="submit">OK</button>
</form>
</div>
</div>
<!---------------</div>-->
<div>
<table class="table table-hover table-responsive table-striped" >
 
 
								
								<tr class="danger" >
                                    
								<th>STATION NAME</th>
                                <th >STATION CODE</th>
                              <th>ASSET NAME</th>
                                <th >ASSET CODE</th>
                                <th>SERIAL NUM</th>
                                <th >INSTALLATION DATE</th>
                                <th>REPLACE </th>
                                <th >REPLACEMENT DATE </th>
                                
                                
                                
                                
                                
					  </tr>
					 
<?php




//include'/storage/ssd5/667/3754667/public_html/include/connection.php';
if(isset($_POST['submit']))
{
 $a=$_POST["stdname"];
$b=$_POST["stdcode"];
$c=strtotime($_POST["hd"]);
$recordset = mysqli_query($con,"select * from allot_asset where STATIONNAME='$a' and STATIONCODE='$b'");
									while($record = mysqli_fetch_array($recordset))
									{
									

             echo"<tr class=warning>
									
									<th >",$record["STATIONNAME"],"</th>
									<th >",$record["STATIONCODE"],"</th>
									<th >",$record["ASSETNAME"],"</th>
									<th >",$record["ASSETCODE"],"</th>
									<th >",$record["SERIALNUM"],"</th>
									<th >",$record["INITDATE"],"</th>
									<th >",$record["REP"],"</th>
							        <th >",$record["REPMDATE"],"</th>
					
									</tr>";
								
								
								
//////////////

/*$d=date_default_timezone_set('Asia/Kolkata'); 
echo  date("Y-m-d
");
 echo $rd=strtotime($d);
  $dal=strtotime("2017-10-26");
  $diff=$rd-$dal;
  $a=floor($diff/(60*60*24*365));
  echo $a;*/




///////////////

$dal=strtotime($record["REPMDATE"]);

  $diff=$dal-$c;
// echo $diff."</br>";
  $d=floor($diff/(60*60*24*365));
 //echo $d."</br>";
						 
						 
						if($d<=1)
					//	if($dal<=$c)
						 {
						
						
				
				echo "<script> $('#modal2').modal('show') </script>";
		
			   
			
						 }
								else{
								
							//echo "<script> $('#modal2').modal('show') </script>";
								
								}
  } //isset braces........                
      
}	
	?>
    </table>
</div>
<?php require('imp/footer.php');?>
</div>
</body>
</html>