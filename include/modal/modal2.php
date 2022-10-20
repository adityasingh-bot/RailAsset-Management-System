
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

<body>

 <div class="modal fade" id="modal2" role="dialog">
    <div class="modal-dialog" id="md">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" id="mh">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#ed1d24"><span class="glyphicon glyphicon-warning-sign"> </span>WARNING!!!</h4>
         
        </div>
        <div class="modal-body" id="mb">
        <h3 id="h3" >ASSET REPLACEMENT DATE COME SOON!!!</h3>
 <table class="table  table-responsive" >
                               <tr >
                                <th>STATION NAME</th>
                                <th >STATION CODE</th>
                                <th>ASSET NAME</th>
                                <th >ASSET CODE</th>
                                <th>SERIALNUM</th>
                                <th >INSTALLATION DATE</th>
                                <th>REPLACE </th>
                                <th >REPLACEMENT DATE </th>
                                 </tr>
                                
                                
  <?php include ('include/connection.php');
$a=$_POST["stdname"];
 $b=$_POST["stdcode"];
$c=strtotime($_POST["hd"]);
$recordset1 = mysqli_query($con,"select * from allot_asset where STATIONNAME='$a' and STATIONCODE='$b'");
									while($record1 = mysqli_fetch_array($recordset1))
									{
									

                                    $x=$record1["REPMDATE"];
									
					
						
	
								
$dal=strtotime($x);

  $diff=$dal-$c;
// echo $diff."</br>";
  $d=floor($diff/(60*60*24*365));
// echo $d."</br>";
											
								if($d<=1)
								{

/*$recordset = mysql_query("select * from allot_asset where STATIONNAME='$a' and STATIONCODE='$b'");*/
                 $recordset = mysqli_query($con,"select * from allot_asset where STATIONNAME='$a'and REPMDATE='$x' ");
									while($record = mysqli_fetch_array($recordset))
									{
   
                                    echo"<tr>
									
									<th >",$record["STATIONNAME"],"</th>
									<th >",$record["STATIONCODE"],"</th>
									<th >",$record["ASSETNAME"],"</th>
									<th >",$record["ASSETCODE"],"</th>
									<th >",$record["SERIALNUM"],"</th>
									<th >",$record["INITDATE"],"</th>
									<th >",$record["REP"],"</th>
							        <th >",$record["REPMDATE"],"</th>
					
									</tr>";
									}	
								}
								
								else
								{
								   // echo "<center><h1>No Asset is Going To Expire This Year</h1></center>";
								}
								
									}
	 ?>
                   </table>
           
        </div><!------modal body-->
        <div class="modal-footer">
        <form action="" method="post"  name="log" >
                      
            <div class="row">
                   
                    <div class="col-sm-12" style="margin-left:40px">
                   <button type="buttton" class="btn btn-lg btn-danger btn-block" data-dismiss="modal" >CLOSE</button > 
                   </div>
         </div>
                       </form>
        </div>
      </div>
      
    </div>
    </div>




</body>
</html>