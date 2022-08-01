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
        $subject=$_GET['subject'];
        $sy=$_GET['schoolyear'];
        $level=$_GET['level']; 
       
        

        $sql="SELECT * FROM tblgradesection WHERE gradedesc = '$level' ";


    
        $result = mysqli_query($con, $sql);
       


?>

           
 <section class="home-section">
              <div  class="mains">

 		

              
              <div class="container">
              <div class="panel panel-default"style="width:1000px;  ">
                <div class="panel-heading1" ><i class="far fa-list-alt"></i> List of Section
                <span   style="float: right;" class="tool-small" data-tip="This page displays the list of sections enrolled in that subject. Tick the checkbox located on the left side and then click the Assign Selected button. If successful, it will direct you to the Teacher Subject Loads- Section page. " tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">      
                     <div class="table-responsive" style="width:970px; height:330px; font-size:12px; overflow-x:hidden;">    
                     <form action="insertsubject.php" method="GET">
                     <input type="hidden" name="facultyid" value=<?= $faculty ?> >
                     <input type="hidden" name="subject" value=<?= $subject ?> >
                     <input type="hidden" name="schoolyear" value=<?= $sy ?> >
                     <input type="hidden" name="level" value=<?= $level ?> >
                        <table id="" class="table table-bordered table-striped table-hover"  style="width:100%;  ">
                       
                        <thead>
                        <tr>
                        <th style="width:5px;" > </th>
                        <!-- <th style="text-align:center;width:45px;"><input type="checkbox" id="checkAll"/> </th> -->
                             <th>Section </th>
                             <th>Department </th>                       
                           
                                 
                        </tr>
                        </thead>
                        <tbody>
                        
                      <?php  
                                if(mysqli_num_rows($result) > 0)
                                {
                                    foreach($result as $resultrow)
                                    {
                                        $checked = [];
                                        if(isset($_GET['gradesectionid']))
                                        {
                                            $checked = $_GET['gradesectionid'];
                                        }
                      ?>
                    
                            <tr>
                            <?php 
                            $gradedesc=$resultrow['gradedesc'];
                            $sectiondesc=$resultrow['sectiondesc'];
                           
                            ?>
                              <td><input type="checkbox" class="checkItem" name="gradesectionid[]" value="<?= $resultrow['gradesectionid']; ?>" 
                              <?php if(in_array($resultrow['gradesectionid'], $checked)){ echo "checked"; } ?> /></td>
                              <td><?php echo "$gradedesc-$sectiondesc"?>  </td>
                              <td><?php echo $resultrow['departmentdesc']?> </td>
                              
                              <!-- <td> <select class="boxuser" name="addteacher[]" >
                                        
                                      //   $query_acc=mysqli_query($con,"SELECT facultyid FROM tblsubjloadteacher where schoolyear = '$sy' and subject = '$selectedsubject'");
                                      //   while($row = $query_acc -> fetch_assoc()){
                                      //   $selectedfaculty = $row['facultyid'];
                                      //   $query_acc1=mysqli_query($con,"SELECT * FROM tblteacher where facultyid = '$selectedfaculty' ");
                                          
                                      //   while($row1 = $query_acc1 -> fetch_assoc()){
                                      
                                      //     $sfname = $row1['firstname'];
                                      //     $slname = $row1['lastname'];
                                      //     $smname = $row1['middlename'];
                                      //   echo"<option value='$selectedfaculty'>$sfname $smname $slname</option>";
                                      // }
                                      // }
                                        
                                        </select>
                            </td>  -->

                                 
                                            
                            </tr>
                      <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                      ?>
                        </tbody>                        
                       </table>
                     
                      
                   </div>
                   <h3 style="font-size:10px">Note: If you have already added the section, you will be stuck on the List of Section page,  If this happens,  just click the Go Back button. There will be a pop-up message if the section is already taken by other teacher. </h3>

                   <?php 
                   echo "  <a href='manageteacherp4.php?faculty=$faculty&schoolyear=$sy&subject=$subject&level=$level'><input type='button' class='addbtn'  formnovalidate value='Go Back'>  </a>"; 
                   ?>
                 
                <button class="addbtn" type="Submit"  name="teachersubmitsection"  style="margin-top:10px;"  > Assign Selected</button> 
                
                       </form>




                 
                 
                  
              </div>
              </div>
       
            
         
          
                </div> 

                </div> 
    

</section>















<?php
    include("footer.php");
?>



