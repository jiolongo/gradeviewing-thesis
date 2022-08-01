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
			
            
<section id="Mcurriculum" class="home-section">
              <div class="mains">

            


		

             <div class="container">
                                
              <div class="panel panel-default"style="width:880px;  ">
                <div class="panel-heading1" ><i class="fas fa-chalkboard"></i> Curriculum
            
            
                <span   style="float: right;" class="tool-small" data-tip="This section will display the curriculum you  have added. Simply click the [icon] pen button to modify or edit the curriculum then hit Save. Click the [icon] trash button if you want to delete the entire row then hit Confirm. Changes you make will be saved in the database." tabindex="1"><i class="fas fa-question-circle"></i></span>
                         
            </div>
                <div class="panel-body">
                    <div class="table-responsive" style="width:850px;height:500px; font-size:12px;">
                        <table id="managecurriculum" class="table table-bordered table-striped table-hover"  style="width:850px; text-transform:capitalize">

                           <thead>
                               <tr>
                                    <th ></th>
                                    <th>Curriculum</th>
                                   
                               
                                  
                                   
                               </tr>
                           </thead>
                           
                       </table>
                   </div>
               </div>
           </div>
       


       <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-plus"></i> Add Curriculum
                <span style="float: right;" class="tool-small" data-tip="Input the Curriculum Name. An example is indicated in the textbox. " tabindex="1"><i class="fas fa-question-circle"></i></span>

            </div>
                <div class="panel-body">
                
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                    <table class="table" style="width:300px;height:200px;"> 
                        <tr>                 
                              <td> Curriculum Name:</td>   
                              <td> <input class="form-control input-sm"type=text  name="addcur" placeholder="K-12 Curriculum"	required></td> 
                            </tr>         

                        </table>


                      
              


                     

                <input class=adduserbtn type="submit" name="btncur"value="Add" >

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



