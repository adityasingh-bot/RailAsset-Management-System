<div class="container-fluid hard" id="hard">

	

	<ul id="ul_id">

		<!---<li> <a href="Home.php" id="link"> Home</a> </li>

		<li> <a href="" id="link"> A </a></li>

		<li> <a href="" id="link"> Gallery</a> </li>

        <li> <a href="" id="link"> Contact Us</a> </li>

        <li style="float:right;"> <a href="" data-toggle="modal" data-target="#adminlog" id="link"> Login</a> </li>-->

        <li ><a href="Admin.php" id="link"> Home </a></li>

          <li ><a href="Addstd.php" id="link"> Add Station </a></li>

          <li ><a href="Addset.php" id="link"> Add Asset </a></li>

         <li ><a href="Allot.php" id="link"> Allot Asset </a></li> 

          <li ><a href="Assetsearch.php" id="link"> Alloted Asset</a></li>

            

                

  <li style="float:right;"><a href="" data-toggle="modal" data-target="#myModal" id="link"> Logout </a> </li>

	</ul>

	

    



         <div class="modal fade" id="myModal" >

    <div class="modal-dialog">

   

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          <h4 class="modal-title">ARE YOU SURE WANT TO LOGOUT?</h4>

        </div>

        <div class="modal-body">

          <h3>Logout Redirect you to Home Page!!!!!!!!!!!!</h3>

           <form action="logout1.php" method="post"  name="log" >

                      

            <div class="row">

                    <div class="col-sm-6">

                    <button type="submit" class="btn btn-danger btn-block">LOGOUT</button>

                   </div>

                    <div class="col-sm-6">

                   <button type="buttton" class="btn btn-success btn-block" data-dismiss="modal">CLOSE</button >

                   </div>

         </div>

                       </form>

        </div><!------modal body-->

       <div class="modal-footer">

        <form class="form-control" action="logout1.php"> 

        <button type="submit" class="btn btn-danger" data-dismiss="modal">Logout</button>

         <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>

          </form>

      </div>

      </div>

      

    </div>

   </div>

   </div>
    