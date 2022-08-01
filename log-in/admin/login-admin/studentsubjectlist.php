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
        $student=$_GET['student'];
        $gradesection=$_GET['gradesection'];
        $sy=$_GET['schoolyear'];
        $query_acc=mysqli_query($con,"SELECT * FROM tblstudentsdetail WHERE studentid='$student' and gradesection='$gradesection' and  schoolyear = '$sy'");
      
        while($fetch=mysqli_fetch_assoc($query_acc))
        {
       
        $gradelevel=$fetch['gradelevel'];
      
        }
        

        $sql="SELECT * FROM tblsubject WHERE subjectgradelevel = '$gradelevel' ";


    
        $result = mysqli_query($con, $sql);
       


?>

           
 <section class="home-section">
              <div  class="mains">

 		

              
              <div class="container ">
              <div class="panel panel-default" style="width:1000px;  ">
                <div class="panel-heading1" ><i class="far fa-list-alt"></i> List of Subjects
                <span  style="float:right;"  class="tool-small" data-tip="This page displays the list of subjects available for their grade level. 
Tick the checkbox located on the left side and then click the Assign Selected button. If successful, it will direct you to the Student Subject Load page. " tabindex="1"><i   class="fas fa-question-circle"></i></span>
              </div>
                <div class="panel-body">      
                     <div class="table-responsive" style="width:970px; height:330px; font-size:12px;">    
                     <form action="insertsubject.php" method="GET">
                     <input type="hidden" name="studentid" value=<?= $student ?> >
                     <input type="hidden" name="gradesection" value=<?= $gradesection ?> >
                     <input type="hidden" name="schoolyear" value=<?= $sy ?> >
                        <table id="" class="table table-bordered table-striped table-hover"  style="width:1080px;  ">
                       
                        <thead>
                        <tr>
                      
                       <th style="text-align:center;width:5px;"><input type="checkbox" id="checkAll"/> </th>
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
                              <?php if(in_array($resultrow['subjectid'], $checked)){ echo "Checked"; } ?> /></td>
                              <td><?php echo $resultrow['subject']?>  </td>
                              <td><?php echo $resultrow['subjectdesc']?> </td>
                              <td><?php echo $resultrow['subjectgradelevel']?> </td>   
                            
                                       
                                    
                                        </select>
                            </td> 

                                 
                                            
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
                                     <div style="font-size:10px">Note: If you have already added the subject, you will be stuck on the List of Subjects page,  If this happens,  just click the Go Back button.  </div>

                                    </div>
                  
                 
                   <?php 
                   echo "  <a href='managestudentp3.php?student=$student&gradesection=$gradesection&schoolyear=$sy'><input type='button' formnovalidate class='addbtn' value='Go Back'>  </a>"; 
                   ?>
                   
                <button class="addbtn" type="Submit"  name="studentsubmit"  style="margin-top:10px;"  > Assign Selected</button> 
                
                       </form>




                 
                 
                  
              </div>
              </div>
       
            
         
          
                </div> 

                </div> 
    

</section>















<?php
    include("footer.php");
?>



