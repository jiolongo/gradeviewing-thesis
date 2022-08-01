<?php 
	require_once("session.php");

	include("includes/datauser_parent.php");
	
	if($num_rows)
	{
	include("header.php");
	include("sidebar.php");
    }
?>


<?php
       
        $studentid=$_GET['studentid'];    

        $query_acc=mysqli_query($con,"SELECT * FROM tblparent WHERE username='$usern'");
      

        while($fetch=mysqli_fetch_assoc($query_acc))
        {
        $lname=$fetch['lastname'];
        $fname=$fetch['firstname'];
        $mname=$fetch['middlename'];
        $email=$fetch['email'];
       
        }

        
    
        
        $parentquery=mysqli_query($con,"SELECT * FROM tblstudentsdetail WHERE studentid='$studentid' order by schoolyear desc");
 

 ?>



              
<section class="home-section">


<div class="mains">                    
    <div class="container-fluid mx-1">
            
        
            <div class="panel mx-auto" style="height:auto;">
                <div class="panel-heading1" >  <i class="far fa-folder-open"></i>&nbsp; Student Records - School Year & Section </div>
                <div class="panel-body m-2">

                <div class="row">

                                <?php
                                while($fetch=mysqli_fetch_assoc($parentquery))
                                {
                                $schoolyear=$fetch['schoolyear'];
                                $gradesection=$fetch['gradesection'];
                                ?> 
                                
                                <div class="col-12 col-md-4 my-2">
                                <div class="thing" >	
                                  <h5><b></b></h5>
								
									
                                <h5> SY.<?php echo  $schoolyear ?></h5>
                                <h4><?php echo  $gradesection ?></h4>
                                   
                                <?php 
                                echo "  <a href='parentp2.php?studentid=$studentid&gradesection=$gradesection&schoolyear=$schoolyear'><input type='Submit' class='addbtn' value='View'>  </a>"; 
                                ?>

								</div>
							</div>

                          

                              

                                <?php                         
                                }
                                ?>


                    </div>

                         
                        <?php 
						echo "  <a href='parenthomepage.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
						?>













                </div>
            </div>


         
  


    </div>
    </div>






</section>
						   
	   






				<?php
include("footer.php");
?>
