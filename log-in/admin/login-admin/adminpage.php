<?php 
  require_once("session.php");
  include("includes/data_user.php");

  if($num_rows)
  {
  include("header.php");
  include("sidebar.php");
?>

<!------------------------My account page----------------------------->

         
<section class="home-section">
<div class="mains">  	
			




        <div class="panel"style="width:1250px;  ">               
          <div class="panel-body"  style="height:500px;">
          <div class="profile3 ">
           
              <div class="container">
                <div class="con1"  style="height:300px; width:500px;">
                      <div class="con2">
                      <div class="_profile-info1">   <?php echo ' '.$u_fname.' '.$u_mname.' '.$u_lname ;?> </div>
                      </div>


                  <div class="_profile-info2"> Administrator <a class="_profile-info1" href='updateadmin.php' ><i class="fas fa-edit"  style="font-size:30px;  " ></i></a> </div> 
                      <table class="table table-borderless" style="height:100px; width:500px;">
                                  <tr>                 
                                  <td> <h5>Birthdate</h5></td>   
                                  <td> <h5><?php echo $u_birthdate; ?></h5></td> 
                                  </tr>
                                  <tr>                 
                                  <td> <h5>Email:</h5></td>   
                                  <td STYLE="text-transform:lowercase"> <h5> <?php echo $u_email; ?></h5></td> 
                                  </tr> 
                                  <tr>                 
                                  <td> <h5> Contact Number:</h5></td>   
                                  <td>  <h5><?php echo $u_contactno; }?></h4></td> 
                                  </tr>
                      </table>
                </div>


                <div class="article">
                <div class="fyi">
                  <h2><i class="fas fa-info-circle"></i> For your information</h2>
                  <div class="infotext">


                          
                          <h5>
                           <a href="managestudent.php"><div class="info"><i class="fas fa-users-cog"></i>
                          Manage Accounts</div></a>
                          &nbsp &nbsp &nbsp In this section, you can create accounts for teachers, students, and parents to use as a means of gaining access to the portal. You can add or update each user's primary details or their personal information once you have created their accounts. This is also where you will assign the teachers' or students' records in each school year. 
                          </h5>

                        
                          <h5> 
                          <a href="managecurriculum.php"><div class="info">   <i class="fas fa-wrench"></i>
                          Maintenance</div></a>
                          &nbsp &nbsp &nbsp In this section, you can manually add existing curriculum, departments, school years, grading periods, grade levels, sections, and subjects that you'll use to manage teachers, students, and parents later on.
                          </h5>
                        
                          <h5> 
                          <a href="control.php">
                          <div class="info">   <i class="fas fa-cogs"></i>
                          Control</div></a>
                          &nbsp &nbsp &nbsp In this section, you can set the time limit or deadline for the teacher's portal availability to encode the student's grades.
                          </h5>
                        
                  
                  
                  
                  
                  </div>









                    <br>
                  <div class="note">
                    <h5><b>
                     Note: To add or update your personal information, click the  <i class="fas fa-edit"></i> next to the word 'Administrator'. This will take you to the edit profile page.</b>
                    </h5></div>

                </div>
                </div>




              </div>   
                        
          </div>            
	        </div>   
        </div>
</div>

             
    




</section>
                     
 



<?php
include("footer.php");
?>
