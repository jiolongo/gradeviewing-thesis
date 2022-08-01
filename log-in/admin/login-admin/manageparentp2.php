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
             $parent=$_GET['parent'];  
             $sy=$_GET['schoolyear'];    
             $query_acc=mysqli_query($con,"SELECT * FROM tblparent WHERE username='$parent'");
             while($fetch=mysqli_fetch_assoc($query_acc))
             {
             $lname=$fetch['lastname'];
             $fname=$fetch['firstname'];
             $mname=$fetch['middlename'];
            	
             }

             $num_rows=mysqli_num_rows($query_acc);
     

            
            
               
             $parentquery=mysqli_query($con,"SELECT * FROM tblparentdetail WHERE username='$parent'  order by datecreated desc");
           
     
              
                  
?>







        
                    
          
			 
<!------------------------Teacher add school year----------------------------->
 
    
		  
<section class="home-section">
    <div class="mains">                    
    <div class="container">
            
            <div class="panel panel-default"style="width:830px;  ">

                  <div class="panel-heading1" ><i class="fas fa-users"></i> Parent Records 
                  <span   style="float: right;" class="tool-small" data-tip="This page will display the Students that are assigned to the parent. " tabindex="1"><i class="fas fa-question-circle"></i></span>
                </div>
                  <div class="panel-body"  style="height:100%;">
                          
                  <table>			 
                    
                  <tbody>
                    <tr>
                      <td>
                        <p> 
                          <?php echo "<b>Parent's Username : </b>".$parent."</br>"; ?>
                          <?php echo "<b>Full Name : </b>".$fname.' '.$mname.' '.$lname."</br>"; ?>
                                  	
                      
                          
                        </p>
                      </td>
                    </tr>
                  </tbody>
               
            			</table>


                      <div class="table-responsive" style="width:800px; height:350px; font-size:12px;">
                          <table id="" class="table table-bordered table-striped table-hover"  style="width:100%;">
                          


                              <thead>
                                  <tr >
                                      <th style="width:15px;"></th></th>
                                  
                                   
                                      <th style="width:200px;">Student</th>   
                                      <th style="width:200px;">Student Name</th>  
                                      
                                  </tr >
                              </thead>
                          

                              <?php
                  
             
                           while($rowparentdetail = $parentquery -> fetch_assoc()){
                          
                            $id=$rowparentdetail['id'];
                            $username=$rowparentdetail['username'];
                            $studentid=$rowparentdetail['studentid'];

                                  $studquery=mysqli_query($con,"SELECT * FROM tblstudents WHERE studentid='$studentid'");
                                  while($rowstud = mysqli_fetch_array($studquery))
                                  {
                                    $firstname=$rowstud['firstname'];
                                    $lastname=$rowstud['lastname'];
                                    $middlename=$rowstud['middlename'];
                                  }		
                           
                           ?>
                         <tr id="<?php echo $id; ?>" >
                                
                               <td style="width:15px;" > <input style="width:30px;"  type="checkbox" name="id[]"  value="<?php echo $id; ?>" /></td>
                               
                               <td><?php echo  $studentid; ?></td>
                               
                               <td><?php echo  $firstname.' '. $middlename.' '.$lastname; ?></td>
                               
                            
                          </tr>
                       
                    <?php                         
                       }
                     ?>



                          </table>
                       

                      </div>
                      <?php 
                   echo "  <a href='manageparent.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
                   ?>
                      <button type="button" name="btn_deleteparentdetail" id="btn_deleteparentdetail" class="addbtn">Delete Selected</button>
                      
                  </div>
                
            </div>




  
        
            
            <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-user-plus"></i> Assign Student
                <span   style="float: right;" class="tool-small" data-tip="Search Student's name in the search box to assign them to the parents." tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
             
                    <table class="table"  style="width:350px;height:200px;"> 
                    <input type=hidden name="parent"   value="<?= $parent ?>"  >
                            <tr>                 
                                <td> Parent's Username:</td>   
                                <td> <input class="form-control input-sm"type=text  value="<?= $parent ?>" readonly></td> 
                            </tr>
                       
                           
                            <tr>                 
                                <td> Name:</td>   
                                <td>  <input  class="form-control input-sm"type=text  value="<?= $fname.' '.$lname.' '.$mname; ?>"  readonly></td> 
                            </tr>
                      

                            

                        

                            <tr>                 
                                <td colspan='2'> <i class="fas fa-search"></i> Search Students:
                                <select  id='select_stud' style='width: 90%;'  name="addstudent" > 
                                <option value="">Select a Student </option>
                                        <?php
                                        $query_acc=mysqli_query($con,"SELECT * FROM tblstudents order by studentid desc");
                                        while($row = $query_acc -> fetch_assoc()){
                                        $firstname = $row['firstname'];
                                        $lastname = $row['lastname'];
                                        $middlename = $row['middlename'];
                                        $studentid = $row['studentid'];
                                        
                                        echo"<option value='$studentid'> $studentid -  $lastname, $firstname $middlename</option>";}
                                        ?>
                                        </select>
                                 </td>
                              
                            </tr>

                       


                    </table>
                    <input class=adduserbtn type="submit" id=btncreate name="btnparentdetail"value="Assign" >
                  
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

