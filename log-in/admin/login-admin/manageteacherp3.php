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
        $faculty=$_GET['faculty'];
        $sy=$_GET['schoolyear'];    

        $query_acc=mysqli_query($con,"SELECT * FROM tblteacher WHERE facultyid='$faculty'");
        $num_rows=mysqli_num_rows($query_acc);

        while($fetch=mysqli_fetch_assoc($query_acc))
        {
        $lname=$fetch['lastname'];
        $fname=$fetch['firstname'];
        $mname=$fetch['middlename'];
        $email=$fetch['email'];
        $gender=$fetch['gender'];	
        }
 ?>

     
 <section   class="home-section">
              <div class="mains">

 		

             
              <div class="container">
              <div class="panel panel-default"style="width:1080px;  ">
                <div class="panel-heading1" ><i class="fas fa-book"></i> Teacher Records - School Year - Subject Loads
                <span   style="float: right;" class="tool-small" data-tip="This page will display the list of subjects they will be assigned to teach in that school year. Click 'Assign Subjects' button to add the subjects. After assigning the subjects, you can appoint the section that they will be teaching. Click Assign. " tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">

                        
                  <table>			 
                    
                  <tbody>
                    <tr>
                      <td>
                        <p>
                          <?php echo "<b>Faculty ID No. : </b>".$faculty."</br>"; ?>
                          <?php echo "<b>Full Name : </b>".$fname.' '.$mname.' '.$lname."</br>"; ?>
                          <?php echo "	<b>School Year : </b>".$sy."</br>"; ?>            	
                        	
                        </p>
                      </td>
                    </tr>
                  </tbody>
               
            			</table>

                  <?php 
                  
                    $query = "SELECT * FROM tblsubjloadteacher WHERE facultyid IN ('$faculty') and schoolyear in ('$sy')";
                    $result = mysqli_query($con, $query);
                    
                      ?>

                    <div class="table-responsive" style="width:1050px; font-size:12px;">
            
                        <table  id="" class="table table-bordered table-striped table-hover"  style="width:1050px;">
                        
 

                           <thead>
                               <tr>
                                  <th> </th>
                                  <th>Subject </th>
                                  <th>Subject Description </th>                       
                                  <th>Grade Level </th>
                                  <th>Section  </th>
                               </tr>
                           </thead>
                        
                           <?php
                         
                            while($row = mysqli_fetch_array($result))
                            {
                              $subject=$row["subject"];

                              $gradelevel=$row["subjectgradelevel"];
                              ?>
                            <tr id="<?php echo $row["id"]; ?>" >
                                  <td style="width:15px;"><input type="checkbox" name="id[]"  value="<?php echo $row["id"]; ?>" /></td>
                                  <td><?php echo $row["subject"]; ?></td>
                                  <td><?php echo $row["subjectdesc"]; ?></td>
                                  <td><?php echo $row["subjectgradelevel"]; ?></td>
                                  <td><?php  echo "  <a href='manageteacherp4.php?faculty=$faculty&schoolyear=$sy&subject=$subject&level=$gradelevel'> Assign </a>"  ?></td>
                             </tr>
                          
                       <?php                         
                          }
                        ?>
                       </table>
                     
                   </div>
                
                  
                   <?php
                     echo "  <a href='manageteacherp2.php?faculty=$faculty'><input type='Submit' class='addbtn' value='Go Back'>  </a>";
                     ?>
                      
                   <button type="button" name="btn_deleteteachersubj" id="btn_deleteteachersubj" class="addbtn">Delete Selected</button>
                       <?php
                     echo "  <a href='teachersubjectlist.php?faculty=$faculty&schoolyear=$sy'><input type='Submit' class='addbtn' value='Assign Subjects'>  </a>";	 
                     ?>
                   
                 
              </div>
              </div>
       
            
         
          
                </div> 
               
                </div> 
    

</section>
    













<?php
    include("footer.php");
?>
