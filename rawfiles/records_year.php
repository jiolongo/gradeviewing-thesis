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
	     
	
		
     $syquery=mysqli_query($con,"SELECT * FROM tblschoolyear  order by sy desc ");

	?>




              
<section class="home-section">			
       
<div class="mains">                    
    <div class="container">
            
        
    <div class="panel panel-default mx-auto " style="height:auto; width:100%">
                <div class="panel-heading1" >  <i class="far fa-folder-open"></i>&nbsp; Records - Year</div>
                <div class="panel-body">

                    



                <div class="row">

                                <?php
                                while($rowrecorddetail = $syquery -> fetch_assoc()){ 
                                $schoolyear=$rowrecorddetail['sydesc'];
                                ?> 


                                
                                <div class="col-12 col-md-4 my-2">
								<div class="thing" >	
									<h5><b>School Year</b></h5>
									<h2 style="color:#680000"><b><?php echo $schoolyear?> </b></h2>
									
									<!-- <h5> <?php //echo $schoolyear?></h5> -->

									
                                    <!-- <h3><?php //echo  $schoolyear; ?></h3> -->
                                   
                                   
                                <?php 
                                echo "  <a href='records_section.php?schoolyear=$schoolyear'><input type='Submit' class='addbtn' value='View'>  </a>"; 
                                ?>

								</div>
							</div>



                              

                                <?php                         
                                }
                                ?>


                    </div>

      


                </div>
            </div>


         
  


    </div>
    </div>





</section>
						   
	   












<?php
include("footer.php");
?>
