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
             $v=$_GET['student'];      
             $query_acc=mysqli_query($con,"SELECT * FROM tblstudents WHERE studentid='$v'");
             while($fetch=mysqli_fetch_assoc($query_acc))
             {
             $lname=$fetch['lastname'];
             $fname=$fetch['firstname'];
             $mname=$fetch['middlename'];
             $lrn=$fetch['lrn'];
             $gender=$fetch['gender'];	
             }

             $num_rows=mysqli_num_rows($query_acc);
     

            
            
               
             $studquery=mysqli_query($con,"SELECT * FROM tblstudentsdetail WHERE studentid='$v' order by schoolyear desc");
           
     
              
                  
?>







        
                    
          
			 
<!------------------------student add page----------------------------->
 
    
		  
<section class="home-section">
    <div class="mains">                    
    <div class="container">
            
            <div class="panel panel-default"style="width:830px;  ">

                  <div class="panel-heading1" ><i class="fas fa-user-graduate"></i> Student Enrollment Records
                  <span  style="float:right;"  class="tool-small" data-tip="After the enrollment, click Enrolled Subjects. This will display the Student Subject Loads. " tabindex="1"><i   class="fas fa-question-circle"></i></span>
                </div>
                  <div class="panel-body"  style="height:100%;">
                          
                  <table>			 
                    
                  <tbody>
                    <tr>
                      <td>
                        <p> 
                          <?php echo "<b>Student ID : </b>".$v."</br>"; ?>
                          <?php echo "<b>Full Name : </b>".$fname.' '.$mname.' '.$lname."</br>"; ?>
                          <?php echo "	<b>Gender : </b>".$gender."</br>"; ?>            	
                      
                          <?php echo "	<b>LRN No. : </b>".$lrn."</br>"; ?>	
                        </p>
                      </td>
                    </tr>
                  </tbody>
               
            			</table>


                      <div class="table-responsive" style="width:800px;  font-size:12px;">
                          <table id="" class="table table-bordered table-striped table-hover"  style="width:100%;">
                          


                              <thead>
                                  <tr >
                                      <th style="width:15px;"></th></th>
                                      <th>Grade and Section</th>
                                      <th>School Year</th>
                                      <th>Date Added</th>   
                                 
                                      <th>Option</th>
                                  </tr >
                              </thead>
                          

                              <?php
                  
             
                           while($rowstudentdetail = $studquery -> fetch_assoc()){
                            $sy=$rowstudentdetail['schoolyear'];
                            $gradesection=$rowstudentdetail['gradesection'];
                           ?>
                         <tr id="<?php echo $rowstudentdetail['id']; ?>" >
                                
                               <td style="width:15px;" > <input style="width:30px;"  type="checkbox" name="id[]"  value="<?php echo $rowstudentdetail["id"]; ?>" /></td>
                               <td><?php echo  $gradesection; ?></td>
                               <td><?php echo  $sy; ?></td>
                               
                               <td><?php echo  $rowstudentdetail['dateenroll']; ?></td>
                             
                               <td><?php echo "  <a href='managestudentp3.php?student=$v&gradesection=$gradesection&schoolyear=$sy'> Enrolled Subjects </a>";  ?></td>
                          </tr>
                       
                    <?php                         
                       }
                     ?>



                          </table>
                       

                      </div>
                      <?php 
                   echo "  <a href='managestudent.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
                   ?>
                      <button type="button" name="btn_deletestudentdetail" id="btn_deletestudentdetail" class="addbtn">Delete Selected</button>
                    
                  </div>
                
            </div>




  
        
            
            <div class="adduser">
                <div class="panel panel-default">
                <div class="panel-heading2" >  <i class="fas fa-user-plus"></i> Enroll Student
                <span  style="float:right;"  class="tool-small" data-tip="You will enroll the student in the current school year and their grade and section." tabindex="1"><i   class="fas fa-question-circle"></i></span>
                </div>
              
              </div>
                <div class="panel-body">
                <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
             
                    <table class="table"  style="width:350px;height:200px;"> 
                    <input type=hidden name="studentid"   value="<?= $v ?>"  >
                            <tr>                 
                                <td> Student ID:</td>   
                                <td> <input class="form-control input-sm"type=text name="txtstudentid"  value="<?= $v ?>"  disabled></td> 
                            </tr>
                       
                           
                            <tr>                 
                                <td> Name:</td>   
                                <td>  <input   class="form-control input-sm"type=text name="txtstudentaccess"  value="<?= $fname.' '.$mname.' '.$lname; ?>"  disabled></td> 
                            </tr>
                       

                            <tr>                 
                                <td> Grade level and Section:</td>   
                                <td> <select class="form-control input-sm" name="addstudentdetailgradesection" >
                                        <?php
                                        $query_acc=mysqli_query($con,"SELECT * FROM tblgradesection order by gradedesc asc");
                                        while($row = $query_acc -> fetch_assoc()){
                                        $itemgrade = $row['gradedesc'];
                                        $itemsection = $row['sectiondesc'];
                                        $id=$row['gradesectionid'];
                                        echo"<option value='$id'>$itemgrade-$itemsection</option>";}
                                        ?>
                                        </select>
                                </td>     
                            </tr>

                        

                            <tr>                 
                                <td> School Year:</td>   
                                <td> <select class="form-control input-sm" name="addstudentdetailschoolyear" >
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
                    <h5 style="font-size:10px"> Note: You can only enroll one section per school year.  </h5>
                    <input class=adduserbtn type="submit" id=btncreate name="btnstudentdetail"value="Enroll" >
                  
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

