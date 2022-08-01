<?php 

include("session.php");
include("includes/data_user.php");

  

  

  if($num_rows)
  {
  include("header.php");
  include("sidebar.php");
  }
  
?>




<?php 
                  
                  $query = "SELECT * FROM tblparent";
                  $result = mysqli_query($con, $query);
                  
                    ?>


        

	  
		  
  <!------------------------parent add page----------------------------->		  
  
			
            
<section id="Mparent" class="home-section">
              <div class="mains">

            


		


              <div class="container">
           
              <div class="panel panel-default" style="width:880px;  ">
                <div class="panel-heading1" ><i class="fas fa-user-cog"></i> Manage Parent
                <span   style="float: right;" class="tool-small" data-tip="After you create their Log-In account, you need to update their personal info. Click on username. This will take you to the Edit Pofile page of the parent. After editing their personal information on the Edit Profile page, you need to assign the student to the parent . Click View. " tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">
                    <div class="table-responsive" style="width:850px; height:350px; font-size:12px;">
                        <table id="manageteacher" class="table table-bordered table-striped table-hover"  style="width:100%;">
                        
 

                           <thead>
                               <tr>
                                      <th style="width:15px;" ></th>
                                      <th style="width:80px;">Parent's Username</th>
                                      <th >Full Name</th>
                                      <th >Contact Number</th>  
                                      <th>Email</th>
                                      <th >Option</th>
                               </tr>
                           </thead>
                           

                           <?php
                         
                         while($row = mysqli_fetch_array($result))
                         {
                            $lname=$row['lastname'];
                            $fname=$row['firstname'];
                            $mname=$row['middlename'];
                            $username=$row['username'];
                           ?>
                         <tr id="<?php echo $row['username']; ?>" >
                                
                               <td style="width:15px;" > <input style="width:30px;"  type="checkbox" name="id[]"  value="<?php echo $row["username"]; ?>" /></td>
                               <td><?php echo  "<a href='updateparent.php?parent=$username'> $username </a>"; ?></td>
                               <td><?php echo $fname.' '.$mname.' '.$lname; ?></td>
                            
                               <td><?php echo $row["contactno"]; ?></td>
                               
                               <td><?php echo $row["email"]; ?></td>
                               <td><?php echo "<a href='manageparentp2.php?parent=$username'> View </a>";  ?></td>
                          </tr>
                       
                    <?php                         
                       }
                     ?>




                       </table>
                      
                   </div>
                   <button type="button" name="btn_deleteparent" id="btn_deleteparent" class="addbtn">Delete Selected</button>
               </div>
           </div>



           <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-user-plus"></i> Add Parent Account
                <span   style="float: right;" class="tool-small" data-tip="Input the parent's username and password that they will use to Log-in the system. " tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">
                
                <form id="form1" name="form1" method="post" action="../register-users/validation.php">
                    <table class="table" style="width:300px;height:200px;"> 
                        <tr>                 
                              <td> Username:</td>   
                              <td> <input class="form-control input-sm" type=text name="txtUsername1" maxlength="8" required></td> 
                            </tr>

                      

                        <tr>                 
                              <td> Password:</td>   
                              <td> <input class="form-control input-sm" type=password id=confirmpassword3 name="txtPassword1" maxlength="12"  required></td> 
                              
                            </tr>

                        <tr>                 
                              <td> Repeat Password:</td>   
                              <td> <input class="form-control input-sm" type=password  id=password3 name="repassword1" maxlength="12"  required></td> 
                            
                            </tr>
                              <tr>
                              <td> </td> 
                              <td><span id=message3></span> </td>  
                              </tr>
                            

                        </table>


                      
              


                     

                <input class=adduserbtn type="submit" id=btncreate name="btnsubmit3" value="Add Account" >

                </form>   

                </div> 

                </div> 
            </div> 









       </div>


       </div>  
</section>






<?php
include("footer.php");
?>





