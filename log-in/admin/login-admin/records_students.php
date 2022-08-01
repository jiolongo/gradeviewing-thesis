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

             
                $studdetailquery=mysqli_query($con,"SELECT * FROM tblstudentsdetail where schoolyear='$sy' and gradesection = '$gradesection' ");
?>







        
                    
          
			 
<!------------------------student add page----------------------------->
 
    
		  
<section class="home-section">
              <div class="mains">
            
            
          <div class="container">
            
              <div class="panel panel-default"style="width:100%;  ">
                 <div class="panel-heading1" ><i class="fas fa-user-cog"></i> Records - Year(<?php echo $sy?>) - Grade & Section (<?php echo $gradesection?>) - Student</div>
               

                  <div class="panel-body"  >
                  <div class="table-responsive" style="width:100%;  font-size:12px; overflow-x:hidden; ">
                          <table id="managestud" class="table table-bordered table-striped table-hover"  >
                            <thead>
                                <tr >                          
                                      <th >Student ID</th>    
                                      <th >Full Name</th>
                                      <th >LRN</th>
                                      <th >Subjects</th>
                                  </tr >
                            </thead>


                                    <?php
                                    while($row = mysqli_fetch_array($studdetailquery))
                                    {
                                        $studentid=$row['studentid'];
                                       
                                    ?>      
                                <tr >
                                
                              
                                <td><?php echo $studentid; ?></td>

                                    <?php   

                                    $query1 = "SELECT * FROM tblstudents WHERE studentid = '$studentid'";
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


                                <td><?php echo "<a href='records_subject.php?sy=$sy&gradesection=$gradesection&studentid=$studentid'> View </a>";  ?></td>
                          </tr>
                       
                    <?php                         
                       }
                     ?>

                          </table>
                         
                      </div>

                    
                    
                        
                        
                      <?php 
                   echo "  <a href='records_gradesection.php?sy=$sy'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
                   ?>
                  </div>

              </div>




              





          </div>
          </div>

       
</section>
		  
  









<?php
include("footer.php");
?>

