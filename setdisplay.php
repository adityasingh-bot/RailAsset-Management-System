
<?php
include ('include/connection.php');
?>
<body>

 <div id="bodypart">
 <div class="container-fluid text-center">
   <div class="table-responsive">
<table class="table table-hover table-responsive table-striped " >
 <tr class="danger" >
                                    
								<th> ASSET NAME</th>
                                <th > ASSET CODE</th>
                              
                                
                                
                                
                                <th >EDIT</th>
                                 <th width="30">DELETE</th>
                                
                                
					  </tr>
                      <?php
					 
				$recordset = mysqli_query($con,"select * from add_asset ");
									while($record = mysqli_fetch_array($recordset))
									{
									echo"<tr class=warning>
									
									<th>",$record["ASSETNAME"],"</th>
									<th >",$record["ASSETCODE"],"</th>
									
									
							          <th><a href='update.php?ASSETNAME=".$record["ASSETNAME"],"'>Change</a></th>
										<th><a href='delset.php?ASSETNAME=".$record["ASSETNAME"],"'>Delete</a></th>
								
								
									</tr>";
									}
								?>
                                
                                
                                 
                                </table>    
                                </div>
                                </div>
                                </div>
                                </body>