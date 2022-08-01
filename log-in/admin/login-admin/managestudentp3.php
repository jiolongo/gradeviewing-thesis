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
        $student=$_GET['student'];
        $gradesection=$_GET['gradesection'];
        $sy=$_GET['schoolyear'];
        $query_acc1=mysqli_query($con,"SELECT * FROM tblstudents WHERE studentid='$student'");

        while($fetch1=mysqli_fetch_assoc($query_acc1))
        {
        $lname=$fetch1['lastname'];
        $fname=$fetch1['firstname'];
        $mname=$fetch1['middlename'];  
        }


      

       


?>

     
 <section  id="teachersubjectload" class="home-section">
              <div class="mains">

 		

             
              <div class="container ">
              <div class="panel panel-default"style="width:1200px;  ">
                <div class="panel-heading1" ><i class="fas fa-book"></i> Student Subject Loads
                <span  style="float:right;"  class="tool-small" data-tip="This page will display the list of subjects they will take in that school year. Click 'Assign Subjects' button to add the subjects. " tabindex="1"><i   class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">

                                        
                        <table>	
                        <tbody>
                      <tr>
                        <td>
                          <p> 
                            <?php echo "<b>Student ID : </b>".$student."</br>"; ?>
                                    	
                            <?php echo "<b>Full Name : </b>".$fname.' '.$mname.' '.$lname."</br>"; ?>
                            <?php echo "<b>Grade and Section : </b>".$gradesection."</br>"; ?>	
                            <?php echo "<b>School Year : </b>".$sy."</br>"; ?>	
                          </p>
                        </td>
                      </tr>
                    </tbody>
                 
                          </table>    

                  <?php 
                  
                    $query = "SELECT * FROM tblsubjloadstudent WHERE studentid IN ('$student') and gradesection IN ('$gradesection') and schoolyear in ('$sy')";
                    $result = mysqli_query($con, $query);
                    
                      ?>

                    <div class="table-responsive" style="width:100%; font-size:12px;">
            
                        <table  id="" class="table table-bordered table-striped table-hover"  style="width:100%;">
                        
 

                           <thead>
                               <tr>
                                  <th> </th>
                                  <th>Subject </th>
                                  <th>Subject Description </th>                       
                                  <th>Grade Level </th>
                                 
                               </tr>
                           </thead>
                        
                           <?php
                         
                            while($row = mysqli_fetch_array($result))
                            {
                              ?>
                            <tr id="<?php echo $row["id"]; ?>" >
                                  <td style="width:15px;"><input type="checkbox" name="id[]"  value="<?php echo $row["id"]; ?>" /></td>
                                  <td><?php echo $row["subject"]; ?></td>
                                  <td><?php echo $row["subjectdesc"]; ?></td>
                                  <td><?php echo $row["subjectgradelevel"]; ?></td>
                                  
                             </tr>
                          
                       <?php                         
                          }
                        ?>
                       </table>
                     
                   </div>
                   <?php
                    echo "  <a href='managestudentp2.php?student=$student'><input type='Submit' class='addbtn' value='Go Back'>  </a>";	 
                    ?>
                   <button type="button" name="btn_deletestudentsubj" id="btn_deletestudentsubj" class="addbtn">Delete Selected</button>

                  
                    <?php
                    echo "  <a href='studentsubjectlist.php?student=$student&gradesection=$gradesection&schoolyear=$sy'><input type='Submit' class='addbtn' value='Assign Subjects'>  </a>";	 
                   
                   ?>
                  
              </div>
              </div>
       
            
         
          
                </div> 
               
                </div> 
    

</section>
    













<?php
    include("footer.php");
?>
