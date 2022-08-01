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
                  
                $sy=$_GET['sy'];    
                $gradesection=$_GET['gradesection'];  
                $studentid=$_GET['studentid'];  
             
            


                $query_acc1=mysqli_query($con,"SELECT * FROM tblstudents WHERE studentid='$studentid'");

                while($fetch1=mysqli_fetch_assoc($query_acc1))
                {
                $lname=$fetch1['lastname'];
                $fname=$fetch1['firstname'];
                $mname=$fetch1['middlename'];  
                }


                $studsubjloadquery=mysqli_query($con,"SELECT * FROM tblsubjloadstudent where studentid='$studentid' and schoolyear = '$sy' and gradesection='$gradesection'");
?>







        
                    
          
			 
<!------------------------student add page----------------------------->
 
    
		  
<section class="home-section">
              <div class="mains">
            
            
          <div class="container">
            
              <div class="panel panel-default"style="width:100%;  ">
                 <div class="panel-heading1" ><i class="fas fa-user-cog"></i> Records - Year(<?php echo $sy?>) - Grade & Section (<?php echo $gradesection?>) - Student (<?php echo $studentid?>) - Subjects</div>
               

                  <div class="panel-body"  >

                  <table>	
                        <tbody>
                      <tr>
                        <td>
                          <p> 
                            <?php echo "<b>Student ID : </b>".$studentid."</br>"; ?>
                                    	
                            <?php echo "<b>Full Name : </b>".$fname.' '.$mname.' '.$lname."</br>"; ?>
                            <?php echo "<b>Grade and Section : </b>".$gradesection."</br>"; ?>	
                            <?php echo "<b>School Year : </b>".$sy."</br>"; ?>	
                          </p>
                        </td>
                      </tr>
                    </tbody>
                 
                          </table> 


                  <div class="table-responsive" style="width:100%;  font-size:12px; overflow-x:hidden; ">
                          <table id="managestud" class="table table-bordered table-striped table-hover"  >
                            <thead>
                                <tr >                          
                                      <th >Subject</th>    
                                      <th >1st Quarter</th> 
                                      <th >2nd Quarter</th> 
                                      <th >3rd Quarter</th> 
                                      <th >4th Quarter</th> 
                                  </tr >
                            </thead>


                                    <?php
                                    while($row = mysqli_fetch_array($studsubjloadquery))
                                    {
                                        $subjectdesc=$row['subjectdesc'];
                                        $studsubjloadid=$row['id'];
                                    ?>      
                                <tr >
                                
                              
                                <td><?php echo $subjectdesc; ?></td>

                                <?php   


                                   
                                    $query1 = "SELECT * FROM tblgrade WHERE studentsubjloadid = '$studsubjloadid'";
                                    $gradequery = mysqli_query($con, $query1);
                                    while($row = mysqli_fetch_array($gradequery))
                                    {
                                        $grades=$row['grade'];
                                      



                                ?>   

                                <td><?php echo $grades; ?></td>
                                   
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
                   echo "  <a href='records_students.php?sy=$sy&gradesection=$gradesection'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
                   ?>
                  </div>

              </div>




              





          </div>
          </div>

       
</section>
		  
  









<?php
include("footer.php");
?>

