<?php 
	require_once("session.php");

	include("includes/datauser_teacher.php");
	
	if($num_rows)
	{
	include("header.php");
	include("sidebar.php");
    }
?>



<?php
       
        $sy=$_GET['schoolyear'];    
        $subject=$_GET['subject']; 
        $level=$_GET['level']; 
        $gradesection=$_GET['gradesection']; 

        $query_acc=mysqli_query($con,"SELECT * FROM tblteacher WHERE facultyid='$usern'");
        $num_rows=mysqli_num_rows($query_acc);

        while($fetch=mysqli_fetch_assoc($query_acc))
        {
        $lname=$fetch['lastname'];
        $fname=$fetch['firstname'];
        $mname=$fetch['middlename'];
        $email=$fetch['email'];
        $gender=$fetch['gender'];	
        }


        $subjectsql="SELECT * FROM tblsubject WHERE subject = '$subject'";
        $resultsubject = mysqli_query($con, $subjectsql);
        while($rowsubject = mysqli_fetch_array($resultsubject))
        {
          $subjectdesc=$rowsubject['subjectdesc'];
        }
 ?>


              
<section class="home-section">
						


<div class="mains">

 		

             
<div class="container-fluid mx-1">
<div class="panel mx-auto " style="height:auto; width:1200px">
  <div class="panel-heading1" ><i class="far fa-folder-open"></i> Teacher Records - School Year (<?php echo $sy ?>) - Subject (<?php echo $subject ?>) - Student List</div>
  <div class="panel-body m-2">

  <table>			 
                    
                    <tbody>
                      <tr>
                        <td>
                          <p>       
                          <h2 style="color:#680000"> <b><?php echo $subjectdesc; ?> </b></h2>  
                           <h4><b> <?php echo $gradesection ?></b></h4>
                               
                          </p>
                        </td>
                      </tr>
                    </tbody>
                 
                    </table>
  

    <?php 
    
      $query = "SELECT * FROM tblsubjloadstudent WHERE subject IN ('$subject') and schoolyear in ('$sy') and gradesection = '$gradesection' ORDER BY studentid ASC";
      $result = mysqli_query($con, $query);
      
        ?>
      

      <?php
                     
                       $departquery = "SELECT * FROM tblgradesection WHERE gradedesc IN ('$level')";
                        $result1 = mysqli_query($con, $departquery);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                          $departmentdesc=$row1["departmentdesc"];
                        } 
                        $query = "SELECT *  FROM tblgradingperiod WHERE department IN ('$departmentdesc')";
                        $result2 = mysqli_query($con, $query);
                        
                    

     ?>


      <div class="table-responsive" >
          <table  id="manageteachersubjectload" class="table table-bordered table-striped table-hover"  style="width: 1180px; font-size:12px">



             <thead style="color:maroon;">
                 <tr>
                   
                    <th>Student ID </th>
                                 
                    <th>Name of Student </th>
                                <?php                        
                            if(mysqli_num_rows($result2) > 0)
                            {
                                foreach($result2 as $row)
                                { 
                            $gradingperiod=$row["gradingperiod"];    
                             ?>     
                           <th><?php echo $gradingperiod ?> </th>
                                   <?php     
                                 }
                             }
                            ?>
                 <th>Average </th>
               
                 </tr>
             </thead>
                                     <?php   $average=0; ?>

                                      <?php
                                     
                                      while($row = mysqli_fetch_array($result))
                                      {
                                        $student=$row["studentid"];
                                      
                                        ?>
                                      <tr >
                                            
                      <td><h7><?php echo $student; ?></h7></td>

                                    <?php   
                                     
                                    $query1 = "SELECT * FROM tblstudents WHERE studentid = '$student' ORDER BY lastname asc";
                                    $result1 = mysqli_query($con, $query1);


                                    while($row1 = mysqli_fetch_array($result1))
                                    {
                                    $studfname=$row1["firstname"];
                                    $studmname=$row1["middlename"];
                                    $studlname=$row1["lastname"];
                                  
                          
                                    ?>
                                    <td><h7><?php echo $studlname.', '.$studfname.' '.$studmname ?></h7></td>
                                              
                                                 
                                     <?php
                                    }
                                   
                                    $queryselect = "SELECT id FROM tblsubjloadstudent where studentid IN ('$student') and subject IN ('$subject') and  subjectgradelevel IN ('$level') and  gradesection IN ('$gradesection') and schoolyear IN ('$sy')";
                                    $stud = mysqli_query($con, $queryselect);



                            

                                    while($rowstud = mysqli_fetch_array($stud))
                                    {
                                      $studentsubjid=$rowstud["id"];
                                    }
                                    
                                 

                                    
                                      


                                      $select = "SELECT grade FROM tblgrade where studentsubjloadid IN ('$studentsubjid') ";
                                      $studgrade = mysqli_query($con, $select);
                                    
                                    
                                      $sum= 0;
                                      $multiplier =0; 
                                     
                                       while($rowstudgrade = mysqli_fetch_array($studgrade))
                                     {
                                       $grade=$rowstudgrade["grade"]; 
                                      

                                  

                                                  if($grade>=1){
                                                    $multiplier++; 
                                                    
                                                  }
                                                  
                                                
                                                
                                                  
                                              
                                                ?>
                                              <td><h7>  <?php echo $grade ?>  </h7></td>
                                          
                                             <?php
                                              
                                              $sum = $sum + $grade;
                                                
                                          
                                            $average=$sum /$multiplier;
                                }
                               
                                        ?>
                                  

                               
                                <td><h7>  <?php  echo round($average,0)   ?>  </h7></td>
                              
                               <?php   $average=0; ?>

                                 
                                  <?php    
                                  }                         
                             
                          ?>
     






        
     
               </tr>
           

         
         </table>
       
     </div>
  
    
     <?php
       echo "  <a href='teacherp3.php?schoolyear=$sy&subject=$subject&level=$level'><input type='Submit' class='addbtn' value='Go Back'>  </a>";
      
     
     ?>
  
</div>
</div>




  </div> 
 
  </div> 




</section>
						   
	   






				<?php
include("footer.php");
?>
