<?php 

include("session.php");
include("includes/data_user.php");

  



if($num_rows)
{
include("header.php");
include("sidebar.php");
}
?>






<?php 
             $faculty=$_GET['faculty'];  
             $sy=$_GET['schoolyear'];    
             $query_acc=mysqli_query($con,"SELECT * FROM tblteacher WHERE facultyid='$faculty'");
             while($fetch=mysqli_fetch_assoc($query_acc))
             {
             $lname=$fetch['lastname'];
             $fname=$fetch['firstname'];
             $mname=$fetch['middlename'];
            	
             }

             $num_rows=mysqli_num_rows($query_acc);
     

            
            
               
             $teachquery=mysqli_query($con,"SELECT * FROM tblteacherdetail WHERE facultyid='$faculty'  order by schoolyear desc");
           
     
              
                  
?>







        
                    
          
             
<!------------------------Teacher add school year----------------------------->
             
             
		  
<section class="home-section">
    <div class="mains">                    
    <div class="container">
            
            <div class="panel panel-default"style="width:830px;  ">

                  <div class="panel-heading1" ><i class="fas fa-chalkboard-teacher"></i> Teacher Records - School Year 
                  <span   style="float: right;" class="tool-small" data-tip="After the enrollment, click Enrolled Subjects. This will display the Teacher Subject Loads. " tabindex="1"><i class="fas fa-question-circle"></i></span>
                </div>
                  <div class="panel-body"  style="height:100%;">
                          
                  <table>			 
                    
                  <tbody>
                    <tr>
                      <td>
                        <p> 
                          <?php echo "<b>Faculty ID : </b>".$faculty."</br>"; ?>
                          <?php echo "<b>Full Name : </b>".$fname.' '.$mname.' '.$lname."</br>"; ?>
                                  	
                      
                          
                        </p>
                      </td>
                    </tr>
                  </tbody>
               
            			</table>


                      <div class="table-responsive" style="width:100%; height:350px; font-size:12px;">
                          <table id="manageteacherdetail" class="table table-bordered table-striped table-hover"  style="width:750px;">
                          


                              <thead>
                                  <tr >
                                      <th style="width:15px;"></th></th>
                                  
                                      <th >School Year</th>
                                      <th >Date Added</th>   
                                     
                                      <th >Option</th>
                                  </tr >
                              </thead>
                          

                              <?php
                  
             
                           while($rowteacherdetail = $teachquery -> fetch_assoc()){
                            
                            $schoolyear=$rowteacherdetail['schoolyear'];
                           ?>
                         <tr id="<?php echo $rowteacherdetail['id']; ?>" >
                                
                               <td style="width:15px;" > <input style="width:30px;"  type="checkbox" name="id[]"  value="<?php echo $rowteacherdetail["id"]; ?>" /></td>
                               
                               <td><?php echo  $rowteacherdetail['schoolyear']; ?></td>
                               
                               <td><?php echo  $rowteacherdetail['dateadded']; ?></td>
                              
                               <td><?php echo "  <a href='manageteacherp3.php?faculty=$faculty&schoolyear=$schoolyear'> Enrolled Subjects </a>";  ?></td>
                          </tr>
                       
                    <?php                         
                       }
                     ?>



                          </table>
                       

                      </div>
                      <?php 
                   echo "  <a href='manageteacher.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
                   ?>
                      <button type="button" name="btn_deleteteacherdetail" id="btn_deleteteacherdetail" class="addbtn">Delete Selected</button>
                      
                  </div>
                
            </div>




  
        
            
            <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-user-plus"></i> Enroll Teacher
                <span   style="float: right;" class="tool-small" data-tip="You will enroll the teacher in the current school year." tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
             
                    <table class="table"  style="width:350px;height:200px;"> 
                    <input type=hidden name="facultyid"   value="<?= $faculty ?>"  >
                            <tr>                 
                                <td> Faculty ID:</td>   
                                <td> <input class="form-control input-sm"type=text  value="<?= $faculty ?>"    disabled></td> 
                            </tr>
                       
                           
                            <tr>                 
                                <td> Name:</td>   
                                <td>  <input   class="form-control input-sm"type=text  value="<?= $fname.' '.$lname.' '.$mname; ?>"  disabled></td> 
                            </tr>
                       

                            

                        

                            <tr>                 
                                <td> School Year:</td>   
                                <td> <select class="form-control input-sm" name="addteacherdetailschoolyear" >
                                        <?php
                                        $query_acc=mysqli_query($con,"SELECT * FROM tblschoolyear order by sy desc");
                                        while($row = $query_acc -> fetch_assoc()){
                                        $items = $row['sydesc'];
                                       
                                        echo"<option value='$items'>$items</option>";}
                                        ?>
                                        </select>
                                </td> 
                                    
                            </tr>




                    </table>
                    <input class=adduserbtn type="submit" id=btncreate name="btnteacherdetail"value="Assign" >
                  
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

