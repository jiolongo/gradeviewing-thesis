<?php 

include("session.php");
include("includes/data_user.php");

  
if($num_rows)
{
include("header.php");
include("sidebar.php");
}

?>







<!------------------------ subject page----------------------------->		  
  
			
            
<section id="Msubject" class="home-section">
              <div class="mains">

 		


              <div class="container">
           
              <div class="panel panel-default"style="width:880px;  ">
                <div class="panel-heading1" ><i class="fas fa-book"></i> Subject
                <span style="float: right;" class="tool-small" data-tip="This section will display the Subject you  have added. Simply click the [icon] pen button to modify or edit the subject or subject description then hit Save. Click the [icon] trash button if you want to delete the entire row then hit Confirm. Changes you make will be saved in the database." tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">
                    <div class="table-responsive" style="width:850px;height:500px; font-size:12px;">
                        <table id="managesubject" class="table table-bordered table-striped table-hover"  style="width:850px;">
                        
 

                           <thead>
                               <tr>
                                  <th></th>
                                  <th>Subject</th>
                                  <th>Subject Description</th>
                                  <th>Grade Level</th>
                                  
                               </tr>
                           </thead>
                          
                       </table>
                       </div>
               </div>
           </div>
       


       <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-plus"></i> Add Subject
                <span style="float: right;" class="tool-small" data-tip="Input the Subject and Subject Description and then select the grade  level. An example is indicated in the textbox. " tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">
                
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                    <table class="table" style="width:300px;height:200px;"> 
                        <tr>                 
                              <td> Subject:</td>   
                              <td> <input class="form-control input-sm"type=text name="addsubject" placeholder="ENG7" required></td> 
                            </tr>
                            <tr>                 
                              <td> Subject Description:</td>   
                              <td> <input class="form-control input-sm"type=text  name="addsubjectdesc" placeholder="English" required></td> 
                            </tr>
                           
                            <tr>                 
                              <td> Grade Level:</td>   
                              <td> <select class="form-control input-sm" name="addsubgradelevel" required>
                              <?php
                              $query_acc=mysqli_query($con,"SELECT gradeleveldesc FROM tblgradelevel");
                              while($row = $query_acc -> fetch_assoc()){
                              $gradelevel = $row['gradeleveldesc'];
                              echo"<option value='$gradelevel'>$gradelevel</option>";}
                              ?>
                              </select></td> 
                         
                            </tr>

                     
                            

                        </table>


                      
              


                     

                <input class=adduserbtn type="submit" id=btncreate name="btnsubject"value="Add" >

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

