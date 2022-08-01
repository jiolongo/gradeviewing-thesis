<?php 
	require_once("session.php");

	include("includes/datauser_parent.php");
	
	if($num_rows)
	{
	include("header.php");
	include("sidebar.php");
    }



	

	$query_acc=mysqli_query($con,"SELECT * FROM tblparent WHERE username='$usern'");
	$num_rows=mysqli_num_rows($query_acc);

	while($fetch=mysqli_fetch_assoc($query_acc))
	{
	$lname=$fetch['lastname'];
	$fname=$fetch['firstname'];
	$mname=$fetch['middlename'];
	$email=$fetch['email'];
	
	}
   
    $query = "SELECT * FROM tblparentdetail WHERE username IN ('$usern') order by id desc";
    $result = mysqli_query($con, $query);
	



?>




              
<section class="home-section">
			<div class="mains">  	          
			<div class="container-fluid mx-1">
			<div class="row">
			<div class="col">
						<div class="panel" style="height:100%;">
						<div class="panel-heading2" ><i class="fas fa-user-graduate"></i> Student</div>
						<div class="panel-body m-2">
					

						<div class="row mx-2">  

						<h4><b></b></h4> 
						<?php
						
						while($row = mysqli_fetch_array($result))
						{
							$studentid=$row["studentid"];
							


							$studquery=mysqli_query($con,"SELECT * FROM tblstudents WHERE studentid='$studentid'");
							while($rowstud = mysqli_fetch_array($studquery))
							{
							  $firstname=$rowstud['firstname'];
							  $lastname=$rowstud['lastname'];
							  $middlename=$rowstud['middlename'];
							}		
							?>


						<div class="col-12 col-md-12 my-2">
								<a style="color:black; text-decoration:none;" href='parentp1.php?studentid=<?=$studentid?>'> 							       
									<div class="thing1" >	
										<div><b>  <?php echo $studentid?></b></div>   
										<div class="info-studentname" style="color:#680000"><b> <?php  echo $firstname.' '.substr($middlename,0, 1).'. '.$lastname?> </b></div>
										
										      
									</div>
								</a>
								</div>

						
						
				

							


					
							
							
						<?php                         
							}
						?>
						
						<!-- </div>
					 -->
				
				
					
				















						</div>
						</div>
				</div>
				</div>



  </div> 



	</div>
</section>
						   
	   






				<?php
include("footer.php");
?>
