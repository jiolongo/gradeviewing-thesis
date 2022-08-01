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

     
 <section  class="home-section">
              <div class="mains">

 		

             
              <div class="container">
              <div class="panel panel-default"style="width:1080px;  ">
                <div class="panel-heading1" ><i class="fas fa-book"></i> Teacher Records - School Year - Subjects Loads - Section
                <span   style="float: right;" class="tool-small" data-tip="This page displays the list of sections enrolled in that subject. Tick the checkbox located on the left side and then click the Assign Selected button. If successful, it will direct you to the Teacher Subject Loads- Section page. " tabindex="1"><i class="fas fa-question-circle"></i></span>
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
                          <?php echo "	<b>Subject : </b>".$subject."</br>"; ?> 
                        </p>
                      </td>
                    </tr>
                  </tbody>
               
            			</table>

                  <?php 
                    $querysection = "SELECT * FROM tblsectionloadteacher WHERE subject IN ('$subject') and schoolyear in ('$sy') and facultyid in ('$faculty')";
                    $resultsection = mysqli_query($con, $querysection);
                   
                 
                   
                    
                      ?>

                    <div class="table-responsive" style="width:1050px; font-size:12px;">
            
                        <table  id="" class="table table-bordered table-striped table-hover"  style="width:1050px;">
                        
 

                           <thead>
                               <tr >
                                  <th>  </th>      
                                  <th>Grade Section </th>
                                  <th> Students </th>
                               </tr>
                           </thead>
                        
                           <?php
                         
                         while($rowsection = mysqli_fetch_array($resultsection))
                         {
     
                           
                          $gradesection=$rowsection["gradesection"];
                              ?>

                    
                            <tr id="<?php echo $rowsection["id"]; ?>">
                            <td style="width:15px;"><input type="checkbox" name="id[]"  value="<?php echo $rowsection["id"]; ?>" /></td>

                                  <td><?php echo $gradesection; ?></td>
                                  
                                  <td><?php  echo "  <a href='manageteacherp5.php?faculty=$faculty&schoolyear=$sy&subject=$subject&level=$level&gradesection=$gradesection'> View </a>"  ?></td>

                                 
                             </tr>
                                    
                             <?php                         
                          }
                        ?>
                       </table>
                     
                   </div>
                
                  
                   <?php
                     echo "  <a href='manageteacherp3.php?faculty=$faculty&schoolyear=$sy'><input type='Submit' class='addbtn' value='Go Back'>  </a>";
                     ?>
                       <button type="button" name="btn_deleteteachersection" id="btn_deleteteachersection" class="addbtn">Delete Selected</button>
                   <?php      
                     echo "  <a href='teachersectionlist.php?faculty=$faculty&schoolyear=$sy&subject=$subject&level=$level'><input type='Submit' class='addbtn' value='Assign Section'>  </a>";	 

                   
                   ?>
                     
            
              </div>
              </div>
       
            
         
          
                </div> 
               
                </div> 
    

</section>
    













<?php
    include("footer.php");
?>
