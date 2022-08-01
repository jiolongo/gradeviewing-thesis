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
        $subject=$_GET['subject']; 
        $level=$_GET['level']; 

        $gradesection=$_GET['gradesection']; 
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

     
 <section  id="teachersubjectload" class="home-section">
              <div class="mains">

 		

             
              <div class="container">
              <div class="panel panel-default"style="width:1080px;  ">
                <div class="panel-heading1" ><i class="fas fa-book"></i> Teacher Records - School Year - Subjects Loads - Section - Student List</div>
                <div class="panel-body">

                        
                  <table>			 
                    
                  <tbody>
                    <tr>
                      <td>
                        <p>
                          <?php echo "<b>Faculty ID No. : </b>".$faculty."</br>"; ?>
                          <?php echo "<b>Full Name : </b>".$fname.' '.$mname.' '.$lname."</br>"; ?>
                          <?php echo "	<b>School Year : </b>".$sy."</br>"; ?>            	
                          <?php echo "	<b>Subject : </b>".$subject."</br>"; ?> 
                          <?php echo "	<b>Grade & Section : </b>".$gradesection."</br>"; ?> 
                        </p>
                      </td>
                    </tr>
                  </tbody>
               
            			</table>

                  <?php 
                  
                    $query = "SELECT * FROM tblsubjloadstudent WHERE subject IN ('$subject') and schoolyear in ('$sy') and gradesection = '$gradesection'";
                    $result = mysqli_query($con, $query);
                    
                      ?>
                    
                    <div class="table-responsive" style="width:1050px; height:350px; font-size:12px;">
                        <table  id="manageteachersubjectload" class="table table-bordered table-striped table-hover"  style="width:1050px;">

 

                           <thead>
                               <tr>
                                 
                                  <th>Student ID </th>
                                               
                                  <th>Fullname </th>
                                  <th>Learner Referenece Number </th>
                               
                               </tr>
                           </thead>
                        
                           <?php
                         
                            while($row = mysqli_fetch_array($result))
                            {
                              $student=$row["studentid"];
                              ?>
                            <tr >
                                  
                                  <td><?php echo $student; ?></td>

                                  <?php   

                                        $query1 = "SELECT * FROM tblstudents WHERE studentid = '$student'";
                                        $result1 = mysqli_query($con, $query1);


                                        while($row1 = mysqli_fetch_array($result1))
                                        {
                                        $fname=$row1["firstname"];
                                        $mname=$row1["middlename"];
                                        $lname=$row1["lastname"];
                                        $lrn=$row1["lrn"];
                                        ?>
                                                <td><?php echo $fname.' '.$mname.' '.$lname ?></td>
                                                <td><?php echo $lrn?></td>
                                                
                                                <?php                         
                                        }
                                        ?>







                      
                   
                             </tr>
                             <?php                         
                          }
                          ?>

                       
                       </table>
                     
                   </div>
                
                  
                   <?php
                     echo "  <a href='manageteacherp4.php?faculty=$faculty&schoolyear=$sy&subject=$subject&level=$level'><input type='Submit' class='addbtn' value='Go Back'>  </a>";
                   ?>
                
              </div>
              </div>
       
            
         
          
                </div> 
               
                </div> 
    

</section>
    













<?php
    include("footer.php");
?>
