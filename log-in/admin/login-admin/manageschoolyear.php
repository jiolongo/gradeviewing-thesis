<?php 

include("session.php");
include("includes/data_user.php");

  


  if($num_rows)
  {
  include("header.php");
  include("sidebar.php");
  }
?>




<!------------------------ Schooyear page----------------------------->		  
 
            
<section id="Mschoolyear" class="home-section">
              <div class="mains">

            


		


              <div class="container">
           
              <div class="panel panel-default"style="width:880px;  ">
                <div class="panel-heading1" ><i class="fas fa-calendar-alt"></i> School Year
                <span style="float: right;" class="tool-small" data-tip="This section will display the year  you  have added.The system-generated school year will also be displayed. Simply click the [icon] pen button to modify or edit the year or school year then hit Save. Click the [icon] trash button if you want to delete the entire row then hit Confirm. Changes you make will be saved in the database." tabindex="1"><i class="fas fa-question-circle"></i></span>
            </div>
                <div class="panel-body">
                    <div class="table-responsive" style="width:850px;height:500px; font-size:12px;">
                        <table id="manageschoolyear" class="table table-bordered table-striped table-hover"  style="width:850px; text-transform:capitalize;">
                        
 

                           <thead>
                               <tr>
                                    <th></th>
                                    <th>Year</th>
                                    <th>School Year</th>
                                    <th>Curriculum</th>
                                  
                               
                                  
                                   
                               </tr>
                           </thead>
                           
                       </table>
                   </div>
               </div>
           </div>
       
 
         

       <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-plus"></i> Add School Year
                <span style="float: right;" class="tool-small" data-tip="Input the year. The system will automatically create the school year,  and then select the Curriculum. An example is indicated in the textbox. " tabindex="1"><i class="fas fa-question-circle"></i></span>
            </div>
                <div class="panel-body">
                
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                    <table class="table" style="width:300px;height:200px;"> 
                        <tr>                 
                              <td> Year:</td>   
                              <td> <input class="form-control input-sm"type=number name="addsy"  placeholder= 2021 required>    </i></td> 
                           
                            </tr>
                           
                            <tr>                 
                              <td> Curriculum:</td>   
                              <td> <select class="form-control input-sm" name="addcursy" required >
                              <?php
                              $query_acc=mysqli_query($con,"SELECT curriculumdesc FROM tblcurriculum");
                              while($row = $query_acc -> fetch_assoc()){
                              $curriname = $row['curriculumdesc'];
                              echo"<option value='$curriname'>$curriname</option>";}
                              ?>
                              </select></td> 
                         
                              </tr>
                                        
                
                                    
                            

                        </table>


                      
              


                     

                <input class=adduserbtn type="submit"  name="btnsy"value="Add" >

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

