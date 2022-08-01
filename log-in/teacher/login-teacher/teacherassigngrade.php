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


        $sy=$_GET['sy'];    
        $subject=$_GET['subject']; 
        $gradesection=$_GET['gradesection']; 
        $gp=$_GET['gp']; 




        $subjectsql="SELECT * FROM tblsubject WHERE subject = '$subject'";
        $resultsubject = mysqli_query($con, $subjectsql);
        while($rowsubject = mysqli_fetch_array($resultsubject))
        {
          $subjectdesc=$rowsubject['subjectdesc'];
        }



        $querystudload = "SELECT * FROM tblsubjloadstudent WHERE subject IN ('$subject') and schoolyear in ('$sy') and gradesection = '$gradesection' ORDER BY studentid ASC";
        $resultstudload = mysqli_query($con, $querystudload); 

 ?>


              
<section class="home-section">
						


<div class="mains">          
 <div class="container">
  <div class="panel panel-default">
   <div class="panel-heading1" ><i class="far fa-keyboard"></i> Encoding of Grades</div>
    <div class="panel-body m-2">

        <table style="width:1200px;">			           
                        <tbody>
                          <tr>
                            <td>
                              <p>
                              
                                <h2 style="color:#680000"> <b><?php echo $subjectdesc.' ('.$subject.')'; ?> </b></h2>  
                                <h4><b><?php echo $gradesection ?></b> </h4>
                                <h6><b>School Year : </b><?php echo $sy ?> • <b style="color:maroon; text-transform: uppercase;"><?php echo $gp; ?> </div> </b> </h5>
                               
                              </p>
                            </td>
                          </tr>
                        </tbody>     
        </table>
      

        <div class="table-responsive">
              <table  id="manageteachersubjectload" class="table table-bordered table-striped table-hover"  style="width:1200px; font-size:12px">
                    <thead >
                          <tr>
                              <th>Student ID </th>           
                              <th style="width:500px"> Name of Student </th>  
                              <th style="width:200px">Grade </th> 
                              <th>Notes </th>     
                          </tr>
                    </thead> 
                    



        <?php 
              
              while($fetchstudload=mysqli_fetch_assoc($resultstudload))
              {
              $studsubjloadid=$fetchstudload['id'];
              $studentid=$fetchstudload['studentid'];
             
            
              

              $querystudname = "SELECT * FROM tblstudents WHERE studentid = '$studentid'";
              $resultstudname = mysqli_query($con, $querystudname);
              while($rowstudname = mysqli_fetch_array($resultstudname))
              {
              $studfname=$rowstudname["firstname"];
              $studmname=$rowstudname["middlename"];
              $studlname=$rowstudname["lastname"];
              
              ?>


                            
                                   
                                   
                           
                             
                                     


                      
                    <tr>

                        <form action="insert/insertgrades.php" method="POST">
                        
                        <input type="hidden" name="subject" value=<?= $subject ?> >
                        <input type="hidden" name="gradesection" value=<?= $gradesection ?> >
                        <input type="hidden" name="sy" value=<?= $sy ?> >
                        <input type="hidden" name="gp" value=<?= $gp ?> >

                        <input type="hidden" name="studentid[]" value=<?= $studentid ?> >      
                        <td><h7><?php echo $studentid; ?></h7></td>
                        <td style="text-transform: uppercase;"><h7><?php echo $studlname.', '.$studfname.' '.$studmname ?></h7></td>
                      
                        <?php 

                     
                        $querygradetable = "SELECT * FROM tblgrade WHERE studentsubjloadid = '$studsubjloadid' and gradingperiod='$gp' and schoolyear='$sy'";
                        $resultgradetable = mysqli_query($con, $querygradetable);
                        while($rowgradetable = mysqli_fetch_array($resultgradetable))
                        {
                        $grade=$rowgradetable["grade"];
                        $notes=$rowgradetable["notes"];
                        }
                        ?>



                        <td><h7>  <input style="height:30px;" class="form-control input-sm" step="any" name="grade[]" type=
                                                "number" placeholder="Input Grade" value="<?= $grade ?>" required></h7></td>
                        <td><h7>  <input style="height:30px;" class="form-control input-sm"  name="notes[]" type=
                                                "text" placeholder="Notes" value="<?= $notes ?>"></h7></td>
                                               
                     
                    </tr >
                    <?php
                      }
                      }
                    ?>


               </table>
        </div>
      
              


       
        <a href='teacherhomepage.php'><input type='button' class='addbtn' value='Go Back' formnovalidate>  </a>
        <input type='Submit'name="btnaddgrades" class='addbtn' value='Save'>  
        </form>
   </div> <!--panel body -->
  </div> <!--panedefault -->
 </div>  <!--container -->
</div> <!--end mains -->




</section>
						   
	   






				<?php
include("footer.php");
?>
