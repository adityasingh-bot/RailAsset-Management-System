<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <li ><a href="Admin.php" id="link"> Home </a></li>
          <li ><a href="Addstd.php" id="link"> Add Station </a></li>
          <li ><a href="Addset.php" id="link"> Add Asset </a></li>
         
          <li ><a href="Assetsearch.php" id="link"> Search Alloted Asset</a></li>
            
            <li ><a href="Allot.php" id="link"> Allot Asset </a></li>     
        <li ><a href="" data-toggle="modal" data-target="#myModal" id="link"> Logout </a> </li>
     </div>
</div>
<span id="mobile_menu" onclick="openNav()">&#9776;  Menu</span>

<!--<div class="modal fade" id="mdlt" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content--
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class='fa fa-graduation-cap'></i> Time Table</h4>
        </div>
        <div class="modal-body">
          <p><i class="fa fa-warning"></i> Time Table is not available. we are update it as soon as possible. !</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ARE SURE WANT TO LOGOUT!!!!!!</h4>
        </div>
        <div class="modal-body">
          <h3>Logout Redirect you to Home Page!!!!!!!!!!!!</h3>
           <form action="logout1.php" method="post"  name="log" >
                      
            <div class="row">
                    <div class="col-sm-6">
                    <button type="submit" class="btn btn-danger btn-block">LOGOUT</button>
                   </div>
                    <div class="col-sm-6">
                   <button type="buttton" class="btn btn-success btn-block" data-dismiss="modal" >CLOSE</button >
                   </div>
         </div>
                       </form>
        </div><!------modal body-->
        <div class="modal-footer">
        <!--<form class="form-control" action="logout1.php"> 
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Logout</button>
         <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </form>-->
        </div>
      </div>
      
    </div>
    </div>