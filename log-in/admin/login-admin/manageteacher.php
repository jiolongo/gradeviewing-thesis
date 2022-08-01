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
                  
                  $query = "SELECT * FROM tblteacher";
                  $result = mysqli_query($con, $query);
                  
    
                    ?>








  <!------------------------teacher add page----------------------------->		  
  
			
            
<section id="Mteacher" class="home-section">
              <div class="mains">
              <div class="container">
           
          <div class="panel panel-default" style="width:880px;">
                <div class="panel-heading1" ><i class="fas fa-user-cog"></i> Manage Teacher
                <span   style="float: right;" class="tool-small" data-tip="After you create their Log-In account, you need to update their personal info. Click on Faculty ID. This will take you to the Edit Pofile page of the teacher. After editing their personal information on the Edit Profile page, you need to enroll the teachers. Click View. " tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body" style="height:500px;">
                    <div class="table-responsive" style="width:850px; height:400px; font-size:12px; overflow-x:hidden;">
                        <table id="manageteacher" class="table table-bordered table-striped table-hover"  style="width:850px;">
                        
 

                           <thead>
                               <tr >
                               <th style="width:15px;" ></th>
                                   <th>Faculty ID</th>
                                   <th style="width:150px; ">Full Name</th>
                                   <th>Birthdate</th>
                                  
                                   <th style="width:150px; ">Email Address</th>
                                   <th style="width:30px; ">Change Password</th>       
                                   <th >Option</th>                    

                                   
                               </tr>
                           </thead>

                           <?php
                         
                         while($row = mysqli_fetch_array($result))
                         {
                         
                            $lname=$row['lastname'];
                            $fname=$row['firstname'];
                            $mname=$row['middlename'];
                            $facultyid=$row['facultyid'];
                           ?>
                         <tr id="<?php echo $row['facultyid']; ?>" >
                                
                               <td style="width:15px;" > <input style="width:30px;"  type="checkbox" name="id[]"  value="<?php echo $row["facultyid"]; ?>" /></td>
                               <td><?php echo  "<a href='updateteach.php?teacher=$facultyid'> $facultyid </a>"; ?></td>
                               <td><?php echo $fname.' '.$mname.' '.$lname; ?></td>
                               <td><?php echo $row["birthdate"]; ?></td>
                            
                               <td><?php echo $row["email"]; ?></td>
                               <td style="text-align:center;" ><?php echo "<a href='updatepass.php?faculty=$facultyid'>  <i style=' color:#a80000; font-size:25px' class='fas fa-unlock-alt'></i> </a>";  ?></td>
                               <td><?php echo "<a href='manageteacherp2.php?faculty=$facultyid'> View </a>";  ?></td>
                              
                          </tr>
                       
                            <?php                         
                              }
                            ?>

                              </table>
                             
                              </div>  
                              <br>
                              <button type="button" name="btn_deleteteacher" id="btn_deleteteacher" class="addbtn">Delete Selected</button>
                            </div>
                            

          </div>
       


          <div class="adduser">
                        <div class="panel panel-default">
                        <div class="panel-heading2" >  <i class="fas fa-user-plus"></i> Add Teacher Account
                        <span   style="float: right;" class="tool-small" data-tip="Input the teacher's Faculty ID and their birthday as the password." tabindex="1"><i class="fas fa-question-circle"></i></span>
                      </div>
                        <div class="panel-body">
                        
                        <form id="form1" name="form1" method="post" action="../register-users/validation.php">
                            <table class="table" style="width:300px;height:200px;"> 
                                <tr>                 
                                      <td> Faculty ID:</td>   
                                      <td> <input class="form-control input-sm" type=text id=password name="txtUsername1" autocapitalize="word" placeholder="F-0000" maxlength="8" required></td> 
                                    </tr>

                              

                                <tr>                 
                                      <td> Password:</td>   
                                      <td> <input class="form-control input-sm" type=password id=confirmpassword2 name="txtPassword1" autocapitalize="word" placeholder="Password" maxlength="12" required>     
                                   </td> 
                                     
                                    </tr>

                                <tr>                 
                                      <td> Repeat Password:</td>   
                                      <td> <input class="form-control input-sm" type=password  id=password2 name="repassword1" autocapitalize="word" placeholder="Repeat Password" maxlength="12" required></td> 
                                    
                                    </tr>
                                      <tr>
                                      <td> </td> 
                                      <td><span id=message2></span> </td>  
                                      </tr>
                                    

                                </table>


                              
                      


                            

                        <input class=adduserbtn type="submit" id=btncreate name="btnsubmit2" value="Add Account" >

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