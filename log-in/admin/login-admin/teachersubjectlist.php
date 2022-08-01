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
        $num_rows=mysqli_num_rows($query_acc);

        while($fetch=mysqli_fetch_assoc($query_acc))
        {
       
        $lname=$fetch['lastname'];
        $fname=$fetch['firstname'];
        $mname=$fetch['middlename'];
        $email=$fetch['email'];
        $gender=$fetch['gender'];	
        }
        

        $sql='SELECT * FROM tblsubject order by subjectgradelevel asc';


    
        $result = mysqli_query($con, $sql);
       


?>

           
 <section class="home-section">
              <div  class="mains">

 		

              
              <div class="container">
              <div class="panel panel-default"style="width:1000px;  ">
                <div class="panel-heading1" ><i class="far fa-list-alt"></i> List of Subjects
                <span   style="float: right;" class="tool-small" data-tip="This page displays all of the subjects available for high school department. Use the Search box on the right side to search the subject or the grade level. Tick the checkbox located on the left side and then click the Assign Selected button. If successful, it will direct you to the Teacher Subject Loads page." tabindex="1"><i class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">      
                     <div class="table-responsive" style="width:970px; height:330px; font-size:12px; overflow-x:hidden;">    
                     <form action="insertsubject.php" method="GET">
                     <input type="hidden" name="facultyid" value=<?= $faculty ?> >
                     <input type="hidden" name="schoolyear" value=<?= $sy ?> >
                        <table id="subjectlist" class="table table-bordered table-striped table-hover"  style="width:100%;">
                       
                        <thead>
                        <tr>
                        <!-- <input type="checkbox" id="checkAll"/> -->
                        <th style="text-align:center;width:5px;"> </th>
                        <!-- <th style="text-align:center;width:45px;"><input type="checkbox" id="checkAll"/> </th> -->
                             <th>Subject </th>
                             <th>Subject Description </th>                       
                             <th>Grade Level </th>
                                 
                        </tr>
                        </thead>
                        <tbody>
                        
                      <?php  
                                if(mysqli_num_rows($result) > 0)
                                {
                                    foreach($result as $resultrow)
                                    {
                                        $checked = [];
                                        if(isset($_GET['subjectid']))
                                        {
                                            $checked = $_GET['subjectid'];
                                        }
                      ?>
                    
                            <tr>
                              <td><input type="checkbox" class="checkItem" name="subjectid[]" value="<?= $resultrow['subjectid']; ?>" 
                              <?php if(in_array($resultrow['subjectid'], $checked)){ echo "checked"; } ?> /></td>
                              <td><?php echo $resultrow['subject']?>  </td>
                              <td><?php echo $resultrow['subjectdesc']?> </td>
                              <td><?php echo $resultrow['subjectgradelevel']?> </td>                      
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
                   <h3 style="font-size:10px">Note: If you have already added the subject, you will be stuck on the List of Subjects page,  If this happens,  just click the Go Back button.  </h3>

                  
                   <?php 
                   echo "  <a href='manageteacherp3.php?faculty=$faculty&schoolyear=$sy'><input type='button' class='addbtn' formnovalidate value='Go Back'>  </a>"; 
                   ?>
                <button class="addbtn" type="Submit"  name="teachersubmit"  style="margin-top:10px;"  > Assign Selected</button> 
                
                       </form>




                
                 
                 
                  
              </div>
              </div>
       
            
         
          
                </div> 

                </div> 
    

</section>















<?php
    include("footer.php");
?>



