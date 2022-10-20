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
     //header('location:logout1.php');
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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/bootstrap.js"> </script>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;}
	  
	
	
</style>
</head>

<body>
<?php include('imp/header.php');?>
<?php include('imp/loginmobilemenu.php');?>
    <?php  include('imp/loginnewnav.php');?>
<!------------------------------------------------------------------>

   

<h1 style="display: inline">Welcome:</h1><h2 style="color:#e21212;display: inline"><?php echo $_SESSION['USERID'];?></h2>


<div class="control-label">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
                        

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="slider/rl21.jpg" class="img-responsive">                      </div>
                
                      <div class="item">
                      <img src="slider/rl20.jpg" class="img-responsive">                      </div>
                    
                      <div class="item">
                        <img src="slider/rl22.jpg" class="img-responsive">                      </div>
			</div>
 		</div>
</div>





<?php require('imp/footer.php');?>

</body>
</html>
