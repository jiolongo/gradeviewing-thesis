<?php 
	require_once("session.php");

	include("includes/datauser_teacher.php");
	
	if($num_rows)
	{
	include("header.php");
	include("sidebar.php");
    }
?>




              
<section class="home-section">
	<div class="mains">  
		<div class="container-fluid mx-1">
            <div class="row">	
							<div class="col-12">
									<div class="panel mx-auto " style="height:100%;">
									<div class="panel-heading1" ><i class="far fa-folder-open"></i> Teacher Records - School Year </div>
												<table class="table table-bordered table-hover ">
													<thead >
													<tr class="table-active">
													<th></th>
														<th>Parent</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
													</thead>
													<?php
													$query_acc=mysqli_query($con,"SELECT * FROM tblparent order by datecreated desc");
													while($row = $query_acc -> fetch_assoc())
													{
													$firstname = $row['firstname'];
													$lastname = $row['lastname'];
													$middlename = $row['middlename'];
													$studentid = $row['studentid'];
													
													
													?>
													
													<tr>
															<td></td>	
													<?php 	echo"<td value='$studentid'>  $lastname, $firstname $middlename</td>";?>
															<td>Unread</td>	
															<td>View</td>	
													</tr>

													<?php
													}

													?>



												</table>
									<div class="panel-body m-2">
									</div>
									</div>
								

							</div>

<!-- 							
							<div class="col-6">
								<div class="modal-dialog ">
									<div class="modal-content">
											<div class="modal-header">
												<h4>
												<p>Hi <?php //echo $usern;?></p>	
												</h4>			
											</div>
											<div class="modal-body" id="msgBody" style="height:250px; overflow=y: scroll; overflow-x:hidden;">
													
											<?php
													// if(isset($_GET[]))
											?>


											</div>	
											<div class="modal-footer">
												<textarea  id="message" class="form-control" style="height:70px;"></textarea>
												<button id="send" class="btn btn-primary" style="height70%">Send</button>				
											</div>					
									</div>
								</div>
							</div> -->
            </div>
		</div>
	</div>
</section>
						   
	   






				<?php
include("footer.php");
?>
