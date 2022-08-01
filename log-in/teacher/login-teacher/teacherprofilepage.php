<?php 
	require_once("session.php");
	
	include("includes/datauser_teacher.php");
	
	if($num_rows)
	{
	include("header.php");
	include("sidebar.php");
?>



              
<section class="home-section">
        
	
		<div class="mains">  	
			
		<div class="panel panel-default"style="width:1250px;  ">
             
                <div class="panel-body"  style="height:auto;">

						<ul class=_profile2>
									<li class="_profile-info1"> <?php echo ' '.$u_fname.' '.$u_mname.' '.$u_lname ;?></li>
									<li class="_profile-info2"> Teacher </li>         
									<div class="profile3">
									<table class="table">
															<tr>                 
														<td> Birth Date:</td>   
														<td> <?php echo $u_birthdate; ?></td> 
																</tr>
										
																<tr>                 
														<td> Email:</td>   
														<td STYLE="text-transform:lowercase"> <?php echo $u_email; ?></td> 
																</tr> 

																<tr>                 
														<td> Birth Place:</td>   
														<td> <?php echo $u_birthplace; ?></td> 
																</tr>

																<tr>                 
														<td> Gender:</td>   
														<td> <?php echo $u_gender; ?></td> 
																</tr>

																<tr>                 
														<td> Contact:</td>   
														<td> <?php echo $u_contactno; ?></td> 
																</tr>


																<tr>                 
														<td> Religion:</td>   
														<td> <?php echo $u_religion; ?></td> 
																</tr>

																<tr>                 
														<td> Civil Status:</td>   
														<td> <?php echo $u_civilstatus; ?></td> 
																</tr>

																<tr>                 
														<td> Nationality:</td>   
														<td> <?php echo $u_nationality; ?></td> 
																</tr>

																<tr>                 
														<td> Address:</td>   
														<td> <?php echo $u_address; } ?></td> 
																</tr>


														
										
								</table>
								</div>
					</ul>
	  
		
				</div>   
				</div>   
		</div>
	  
	 
		 
	  </section>
						   
	   






				<?php
include("../../admin/login-admin/footer.php");
?>
