
<div class="container-fluid hard" id="hard">
	<ul id="ul_id">
		<li> <a href="index.php" id="link"> Home</a> </li>
		<li> <a href="" id="link"> About Us </a></li>
		<li> <a href=" " id="link"> Gallery</a> </li>
        <li> <a href="" id="link"> Contact Us</a> </li>
        <li style="float:right;"> <a href="" data-toggle="modal" data-target="#adminlog" id="link"> Login</a> </li>
	</ul>
	
</div>
    

    <div class="modal fade" id="adminlog"  >
       
          <div class="modal-dialog" >
             <div class="modal-content">
            
               <div class="modal-header" style="background-color: #5cb85c; text-align:center; color:#FFFFFF">
               <button type="buttton" class="close" data-dismiss="modal" onclick="location.href='index.php'">&times;</button>
            <h4><span class="glyphicon glyphicon-lock" style="font-size:40px"></span><h2> ADMIN LOGIN</h2>
                           </h4>   
               </div>
               <div class="modal-body">
               <div style="margin-left:180px">
              <!-- <img src="../../images/rail.jpg" class="img-thumbnail img-responsive text-center"  />-->
               </div>
               <div class="well">
                      <form action="adminlogincheck.php" method="post"   name="log" >
                      
                      <div class="form-group">
                      <label  for="a" >USERID:</label>
                        <input type="text" class="form-control" placeholder="ENTER YOUR USERID" name="USERID" id="a" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="ENTER UNIQUE USER_ID!!!"   required />
                        </div>
                        <div class="form-group">
                      <label for="b" >PASSWORD:</label>
                        <input type="Password" class="form-control" placeholder="ENTER YOUR PASSWORD" name="PASSWORD" id="b" data-toggle="popover" data-trigger="hover" data-placement="top"  required  />
                        </div>
            <div class="row">
                    <div class="col-sm-6">
                    <button type="submit" name="submit" class="btn btn-success btn-block">LOGIN</button>
                   </div>
                    <div class="col-sm-6">
                   <button type="buttton" class="btn btn-danger btn-block" data-dismiss="modal" onclick="location.href='index.php'">CLOSE</button >
                   </div>
         </div>
                       </form>
                         </div> <!--well closes-->
                    
                    </div>
                    <div class="modal-footer">
                 
                    
                    </div><!--modal footer closes-->
                    
</div>
</div>
</div>

               