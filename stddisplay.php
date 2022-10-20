

<?php
include ('include/connection.php');
?>
<body>
<div id="bodypart">
 <div class="container-fluid text-center">
   <div class="table-responsive">
<table class="table table-hover table-responsive table-striped" >
 
 <!--<table id="p" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="TFtable">

					<br><table  width="970" border="1"  cellpadding="3" cellspacing="3" class="TFtable" >-->
								
								<tr class="danger" >
                                    
								<th  >STATION NAME</th>
                                <th >STATION CODE</th>
                              
                                
                                
                                
                                <th >EDIT</th>
                                 <th width="30">DELETE</th>
                                
                                
					  </tr>
                      <?php
					 

				$recordset = mysqli_query($con,"select * from add_station ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class=warning>
									
									<th>".$record["STDNAME"]."</th>
									<th  >".$record["STDCODE"]."</th>
									
									
										<th><a href='update2.php?STDNAME=".$record["STDNAME"],"'>Change</a></th>
										<th><a href='delstd.php?STDNAME=".$record["STDNAME"],"'>Delete</a></th>
								
								
									</tr>";
									}
								?>
                                
                                
                                 
                                  
         </table>
                                </div>
                                </div>
                                </div>
                                
                                </body>