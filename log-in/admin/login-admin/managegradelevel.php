<?php 
include("session.php");
include("includes/data_user.php");

if($num_rows)
{
include("header.php");
include("sidebar.php");
}


?>



<!------------------------ gradelevel page----------------------------->		  
  
			
            
<section id="Mgradelevel" class="home-section">
              <div class="mains">

            


		


              <div class="container">
           
              <div class="panel panel-default"style="width:880px;  ">
                <div class="panel-heading1" ><i class="fas fa-list-ol"></i> Grade Level          
                    <span style="float: right;" class="tool-small" data-tip="This section will display the grade level and section  you  have added. Simply click the [icon] pen button to modify or edit the grade level or section then hit Save. Click the [icon] trash button if you want to delete the entire row then hit Confirm. Changes you make will be saved in the database." tabindex="1"><i class="fas fa-question-circle"></i></span>
            </div>
                <div class="panel-body">
                    <div class="table-responsive" style="width:850px;height:500px; font-size:12px;">
                        <table id="managegradelevel" class="table table-bordered table-striped table-hover"  style="width:850px;">
                        
 

                           <thead>
                               <tr>
                                  <th>No.</th>
                                   <th>Grade Level</th>
                                  
                               </tr>
                           </thead>
                           
                       </table>
                   </div>
               </div>
           </div>
       


       <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-plus"></i> Add Grade Level          
                    <span style="float: right;" class="tool-small" data-tip="Select the Grade Level and input the Section name then select the Department. An example is indicated in the textbox. " tabindex="1"><i class="fas fa-question-circle"></i></span>
            </div>
                <div class="panel-body">
                
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                    <table class="table" style="width:300px;height:200px;"> 
                        <tr>                 
                              <td> Grade Level:</td>   
                              <td> <input class="form-control input-sm"type=number name="addgradelevel" placeholder="7" required></td> 
                            </tr>
                           
                          
                     
                            

                        </table>


                      
              


                     

                <input class=adduserbtn type="submit" id=btncreate name="btngradelevel"value="Add" >

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




