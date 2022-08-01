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
	     
	
		
     $gradesectionquery=mysqli_query($con,"SELECT * FROM tblgradesection  order by gradedesc asc ");
     $gradelevelquery=mysqli_query($con,"SELECT * FROM tblgradelevel  order by gradeleveldesc asc ");
	?>




              
<section class="home-section">			
       
<div class="mains">                    
    <div class="container">
            
        
    <div class="panel panel-default mx-auto " style="height:auto; width:100%">
                <div class="panel-heading1" >  <i class="far fa-folder-open"></i>&nbsp; Records - Year - Grade & Section</div>
                <div class="panel-body">


                <select name="gradingperiod" onChange="selectChange(this.value)" id="selectgp"  class="form-select" >                
                                      <option id="option" value="select"   disabled="" >  Please Select </option>
                                                      <?php                        
                                      while($row = mysqli_fetch_array($gradelevelquery)){    
                                      $gradeleveldesc=$row["gradeleveldesc"];
                                                      ?>
                                      <option id="option" value=<?=$gradeleveldesc?> ><?php echo $gradeleveldesc ?> </option>
                                                      <?php     
                                                                                }                                    
                                                      ?>
                                      </select> 



                <div class="row">

                                <?php
                                while($rowgradesectiondetail = $gradesectionquery -> fetch_assoc()){ 
                                $section=$rowgradesectiondetail['sectiondesc'];
                                $grade=$rowgradesectiondetail['gradedesc'];
                                ?> 


                                
                                <div class="col-12 col-md-4 my-2">
								<div class="thing" >	
									<h5><b>School Year</b></h5>
									<h2 style="color:#680000"><b><?php echo "$grade-$section"?> </b></h2>
									
									<!-- <h5> <?php //echo $schoolyear?></h5> -->

									
                                    <!-- <h3><?php //echo  $schoolyear; ?></h3> -->
                                   
                                   
                                <?php 
                                echo "  <a href='teacherp2.php?schoolyear=$section'><input type='Submit' class='addbtn' value='View'>  </a>"; 
                                ?>

								</div>
							</div>



                              

                                <?php                         
                                }
                                ?>


                    </div>

                    <?php 
                   echo "  <a href='records_year.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
                   ?>


                </div>
            </div>


         
  


    </div>
    </div>





</section>
						   
	   












<?php
include("footer.php");
?>
