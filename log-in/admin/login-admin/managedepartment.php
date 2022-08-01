<?php 

  include("session.php");
  include("includes/data_user.php");
if($num_rows)
{
  include("header.php");
  include("sidebar.php");

}
?>




<!------------------------ department page----------------------------->		  
  
			
            
<section id="Mdepartment" class="home-section">
              <div class="mains">

            


		


              <div class="container">
           
              <div class="panel panel-default"style="width:880px;  ">
                <div class="panel-heading1" ><i class="fas fa-building"></i> Department
                 <span style="float: right;" class="tool-small" data-tip="This section will display the Department you  have added. Simply click the [icon] pen button to modify or edit the department or department description then hit Save. Click the [icon] trash button if you want to delete the entire row then hit Confirm. Changes you make will be saved in the database.
" tabindex="1"><i class="fas fa-question-circle"></i></span>
               </div>
                <div class="panel-body">
                    <div class="table-responsive" style="width:850px;height:500px; font-size:12px;">
                        <table id="managedepartment" class="table table-bordered table-striped table-hover"  style="width:850px; text-transform:capitalize;">
                        
 

                           <thead>
                               <tr>
                               <th></th>
                               <th>Department</th>
                              <th>Department Description</th>
                              <th>Education Level</th>
                                  
                               
                                  
                                   
                               </tr>
                           </thead>
                           
                       </table>
                   </div>
               </div>
           </div>
       


       <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" > <i class="fas fa-plus"></i> Add Department
                <span style="float: right;" class="tool-small" data-tip="Input the Department and Department Description and then select the education level. An example is indicated in the textbox. " tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">
                
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                    <table class="table" style="width:300px;height:200px;"> 
                        <tr>                 
                              <td> Department:</td>   
                              <td> <input class="form-control input-sm"type=text  name="adddept"  placeholder="JHS" required></td> 
                            </tr>
                            <tr>                 
                              <td> Department Description:</td>   
                              <td> <input class="form-control input-sm"type=text  name="adddeptdesc" placeholder="Junior High School" required></td> 
                            </tr>




                            <tr>     
                                          
                              <td> Education Level:</td>   
                              <td> <select class="boxuser"type=text  name="educlevel"  required>

                              <option value='Primary'>Primary</option>
                              <option value='Secondary'>Secondary</option>
                              <option value='Tertiary'>Tertiary</option>
                              </select> </td> 
                            </tr>
                      

                        

                            

                        </table>


                      
              


                     

                <input class=adduserbtn type="submit"  name="btndept"value="Add" >

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


