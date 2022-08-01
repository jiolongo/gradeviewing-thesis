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
                  
                  $query = "SELECT * FROM tblstudents order by datecreated desc";
                  $result = mysqli_query($con, $query);
                  
                    ?>







        
                    
          
			 
<!------------------------student add page----------------------------->
 
    
		  
<section class="home-section">
              <div class="mains">
            
            
          <div class="container">
            
              <div class="panel panel-default"style="width:880px;  ">
                <div class="panel-heading1" ><i class="fas fa-user-cog"></i> Manage Student  
                            

                <span   style="float: right;" class="tool-small" data-tip="After you create their Log-In account, you need to update their personal info. Click on Student ID. This will take you to the Edit Profile page of the student. After editing their personal information on the Edit Profile page, you need to enroll the students. Click View. " tabindex="1"><i class="fas fa-question-circle"></i></span>
                         
                


                
                </div>
               
                  <div class="panel-body"  style="height:500px;">
 
                  <div class="table-responsive" style="width:850px; height:400px; font-size:12px; overflow-x:hidden; ">
                          <table id="managestud" class="table table-bordered table-striped table-hover"  style="width:850px;">
                          


                              <thead>
                                  <tr >
                                      <th style="width:15px;" ></th>
                                      <th style="width:80px;">Student ID</th>
                                      <th style="width:400px;">Full Name</th>
                                      <th >Birthdate</th>    
                                      <th >Gender</th>
                                   
                                      <th style="width:100px;">LRN No.</th>
                                      <th >Enroll</th>
                                  </tr >
                              </thead>


                              <?php
                         
                         while($row = mysqli_fetch_array($result))
                         {
                            $lname=$row['lastname'];
                            $fname=$row['firstname'];
                            $mname=$row['middlename'];
                            $studentid=$row['studentid'];
                           ?>
                           
                         <tr id="<?php echo $row['studentid']; ?>" >
                                
                               <td style="width:15px;" > <input style="width:30px;"  type="checkbox" name="id[]"  value="<?php echo $row["studentid"]; ?>" /></td>
                               <td><?php echo  "<a href='updatestud.php?student=$studentid'> $studentid </a>"; ?></td>
                               <td><?php echo $fname.' '.$mname.' '.$lname; ?></td>
                               <td><?php echo $row["birthdate"]; ?></td>
                               <td><?php echo $row["gender"]; ?></td>
                              
                               <td><?php echo $row["lrn"]; ?></td>
                               <td><?php echo "<a href='managestudentp2.php?student=$studentid'> View </a>";  ?></td>
                          </tr>
                       
                    <?php                         
                       }
                     ?>

                          </table>
                         
                      </div>

                      <br>
                    
                        
                        
                      <button type="button" name="btn_deletestudent" id="btn_deletestudent" class="addbtn">Delete Selected</button>
                  </div>

              </div>




              



        <div class="adduser">
              <div class="panel panel-default">
              <div class="panel-heading2" >  <i class="fas fa-user-plus"></i> Add Student Account  
              <span  style="float:right;"  class="tool-small" data-tip="Use student's Student Number as the username and Birthdate (YYYY-MM-DD) as the password." tabindex="1"><i   class="fas fa-question-circle"></i></span>
                         </div>
              <div class="panel-body">
              
            <form id="form1" name="form1" method="post" action="../register-users/validation.php">

                <table class="table"  style="width:300px;height:200px;"> 
                    <tr>                 
                            <td> Student ID:</td>   
                            <td> <input class="form-control input-sm" id="boxuser" type=text name="txtstudentid"  placeholder="K00-0000" maxlength="8" required></td> 
                        </tr>


                    <tr>                 
                            <td> Password:</td>   
                            <td> <input class="form-control input-sm"type=password id=password1  name="txtPassword1" autocapitalize="word" placeholder="Password"  maxlength="10" required></td> 
                        </tr>

                    <tr>                 
                            <td> Repeat Password:</td>   
                            <td> <input class="form-control input-sm"type=password  id=confirmpassword1 name="repassword1" autocapitalize="word" placeholder="Repeat Password"  maxlength="10" required></td> 
                        </tr>

                            <tr>
                            <td> </td> 
                            <td><span id=message1></span> </td>  
                            </tr>

                </table>
           
              
                 <input class=adduserbtn type="submit" id=btncreate name="btnsubmit1"value="Add Account" >
                
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

