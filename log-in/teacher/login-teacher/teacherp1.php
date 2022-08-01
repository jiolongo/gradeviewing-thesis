<?php 
	require_once("session.php");

	include("includes/datauser_teacher.php");
	
	if($num_rows)
	{
	include("header.php");
	include("sidebar.php");
    }
?>



<?php 
           
             $query_acc=mysqli_query($con,"SELECT * FROM tblteacher WHERE facultyid='$usern'");
             while($fetch=mysqli_fetch_assoc($query_acc))
             {
             $lname=$fetch['lastname'];
             $fname=$fetch['firstname'];
             $mname=$fetch['middlename'];	
             }
             $num_rows=mysqli_num_rows($query_acc);
     

            
            
               
             $teachquery=mysqli_query($con,"SELECT * FROM tblteacherdetail WHERE facultyid='$usern'  order by schoolyear desc");
           
     
              
                  
?>

              
<section class="home-section">
<div class="mains">                    
    <div class="container-fluid mx-1">
            
        
    <div class="panel mx-auto " style="height:auto; width:1000px">
                <div class="panel-heading1" >  <i class="far fa-folder-open"></i>&nbsp; Teacher Records - Past Submitted Grades</div>
                <div class="panel-body m-2">

                <div class="row">

                                <?php
                                while($rowteacherdetail = $teachquery -> fetch_assoc()){ 
                                $schoolyear=$rowteacherdetail['schoolyear'];
                                ?> 


                                
                                <div class="col-12 col-md-4 my-2">
								<div class="thing" >	
									<h5><b>School Year</b></h5>
									<!-- <h2 style="color:#680000"><b><?php //echo $subjectdescselectgrade?> </b></h2> -->
									
									<!-- <h5> <?php// echo $gradesectionselectgrade?></h5> -->

									
                                    <h3><?php echo  $rowteacherdetail['schoolyear']; ?></h3>
                                   
                                   
                                <?php 
                                echo "  <a href='teacherp2.php?schoolyear=$schoolyear'><input type='Submit' class='addbtn' value='View'>  </a>"; 
                                ?>

								</div>
							</div>



                              

                                <?php                         
                                }
                                ?>


                    </div>

                         
                        <?php 
						echo "  <a href='teacherhomepage.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
						?>













                </div>
            </div>


         
  


    </div>
    </div>



</section>
						   
	   






				<?php
include("footer.php");
?>
