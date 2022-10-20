<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>


    
  </head>
<body >

    <form action="" method="post" >
    
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" style="margin-top:10px;border:1px solid #e26228;border-left:3px solid #e26228;border-right:3px solid #e26228;" required="required">
                       
                       
                            <label>Email *</label>
                              <input type="email" name="email" class="form-control" style="margin-top:10px;border:1px solid #e26228;border-left:3px solid #e26228;border-right:3px solid #e26228;padding:0 10px 0 20px;" required="required">
       
                            <label>Phone *</label>
                            <input type="text" name="phone" class="form-control" style="margin-top:10px;border:1px solid #e26228;border-left:3px solid #e26228;border-right:3px solid #e26228;" required="required">
                     
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" style="margin-top:10px;border:1px solid #e26228;border-left:3px solid #e26228;border-right:3px solid #e26228;" required="required">
                  
                       
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="5" style="margin-top:15px;border:1px solid #e26228; border-left:3px solid #e26228;border-right:3px solid #e26228;padding:0 10px 0 20px;"></textarea>
                    
                       
                       
                            <input type="submit" name="submit" class="btn btn-success btn-lg" style="margin-left:80px; margin-top:20px;" >

    </form>
    
    <?php 
  if(isset($_POST['submit']))
{
    $name=$_POST['name'];
//	$headers="From:".$_POST['email'];
	$subject=$_POST['subject'];
  $num=$_POST['phone'];
  	$e=$_POST['email'];
  $m = nl2br($_POST['message']);
   // $txt=$name."<br>".$num.$_POST['message'];
    
    $txt = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
  //  $message=$m;
  
$from = $e;
$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";


 $to="programmersworld2018@gmail.com";
    mail($to,$subject,$txt,$headers);
 echo "message send succesfully";
 echo $txt;
}
    ?>
  </body>
</html>