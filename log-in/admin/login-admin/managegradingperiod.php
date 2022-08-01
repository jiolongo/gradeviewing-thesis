<?php 
include("session.php");
include("includes/data_user.php");
if($num_rows)
{
  include("header.php");
  include("sidebar.php");
}
?>



 


<!------------------------ Curriculum page----------------------------->		  
			
            
<section class="home-section">
              <div class="mains">

            


		

             <div class="container">
                                
              <div class="panel panel-default"style="width:880px;  ">
                <div class="panel-heading1" ><i class="far fa-clock"></i> Grading Period         
                    <span style="float: right;" class="tool-small" data-tip="This section will display the Grading Period  you  have added. Simply click the [icon] pen button to modify or edit the Grading Period then hit Save. Click the [icon] trash button if you want to delete the entire row then hit Confirm. Changes you make will be saved in the database." tabindex="1"><i class="fas fa-question-circle"></i></span>
            </div>
                <div class="panel-body">
                    <div class="table-responsive" style="width:850px;height:500px; font-size:12px;">
                        <table id="managegradingperiod" class="table table-bordered table-striped table-hover"  style="width:850px; text-transform:capitalize">

                           <thead>
                               <tr>
                                    <th ></th>
                                    <th>Grading Period</th>
                                    <th>Department</th>
                               
                                  
                                   
                               </tr>
                           </thead>
                           
                       </table>
                   </div>
               </div>
           </div>
       


       <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-plus"></i> Add Grading Period     
                <span style="float: right;" class="tool-small" data-tip="Input the Grading Period and then select the Department. An example is indicated in the textbox. " tabindex="1"><i class="fas fa-question-circle"></i></span>
            </div>
                <div class="panel-body">
                
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                    <table class="table" style="width:300px;height:200px;"> 
                        <tr>                 
                              <td> Grading Period:</td>   
                              <td> <input class="form-control input-sm"type=text  name="addgradingperiod" placeholder="1st Quarter"	required></td> 
                            </tr>         


                            <tr>                 
                              <td> Department:</td>   
                              <td> <select class="form-control input-sm" name="adddepartmentdesc" >
                              <?php
                              $query_acc=mysqli_query($con,"SELECT departmentdesc FROM tbldepartment order by educationlevel");
                              while($row = $query_acc -> fetch_assoc()){
                              $departmentdesc = $row['departmentdesc'];
                              echo"<option value='$departmentdesc'>$departmentdesc</option>";}
                              ?>
                              </select></td> 
                         
                              </tr>

                        </table>


                      
              


                     

                <input class=adduserbtn type="submit" name="btngradingperiod"value="Add" >

                </form>   

                </div> 
                </div> 
                </div> 







            </div>
       

             </div>  
</section>







<?php
include("footer.php");
?>



