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

        $querysection = "SELECT * FROM tblsectionloadteacher WHERE subject IN ('$subject') and schoolyear in ('$sy') and facultyid in ('$usern')";
        $resultsection = mysqli_query($con, $querysection);
       
        
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

<div class="row">
  <div class="col">





  <div class="panel mx-auto " style="height:auto; width:1100px">
  <div class="panel-heading1" ><i class="far fa-folder-open"></i> Teacher Records - School Year (<?php echo $sy ?>) - Subject (<?php echo $subjectdesc ?>) - Section</div>
  <div class="panel-body m-2">
 
        <div class="row m-2"> 
       
           <?php
           while($rowsection = mysqli_fetch_array($resultsection))
           {         
            $gradesection=$rowsection["gradesection"];
                ?>



          <div class="col-6 my-2">
                            <a style="color:black; text-decoration:none;" href='teacherp4.php?schoolyear=<?=$sy?>&subject=<?=$subject?>&level=<?=$level?>&gradesection=<?=$gradesection?>'> 							       
                              <div class="thing1" >	
                                  <h5><b>Grade and Section</b></h5>
                                  <h2 style="color:#680000"><b><?php echo $gradesection?> </b></h2>          
                              </div>
                          </a>
                  </div>





                      
                    
                    






               <?php                         
            }
          ?>
	    </div>
            
      <?php
            echo "  <a href='teacherp2.php?schoolyear=$sy'><input type='Submit' class='addbtn' value='Go Back'>  </a>";
          
          ?>



     </div>   
   
       

</div>







  </div>
  </div>

</div>




  
 
  </div> 



</section>
						   
	   






				<?php
include("footer.php");
?>
