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

        
    
    
    $query = "SELECT * FROM tblsubjloadteacher WHERE facultyid IN ('$usern') and schoolyear in ('$sy') order by id desc";
    $result = mysqli_query($con, $query);
    
     
 ?>



              
<section class="home-section">
<div class="mains">

 		

             
<div class="container-fluid mx-1">

<div class="row">
  <div class="col">

  
          <div class="panel mx-auto " style="height:auto; width:1100px">
          <div class="panel-heading1" ><i class="far fa-folder-open"></i> Teacher Records - School Year (<?php echo $sy ?>) - List of Subjects Taken</div>
          <div class="panel-body m-2">
    

          <div class="row m-2">  

          <h4><b></b></h4> 
          <?php
           
           while($row = mysqli_fetch_array($result))
           {
             $subject=$row["subject"];
             $subjectdesc=$row["subjectdesc"];
             $gradelevel=$row["subjectgradelevel"];


       
             ?>


        <div class="col-6 my-2">
                  <a style="color:black; text-decoration:none;" href='teacherp3.php?schoolyear=<?=$sy?>&subject=<?=$subject?>&level=<?=$gradelevel?>'> 							       
                    <div class="thing1" >	
                        <h5><b>Subject</b></h5>
                        <h2 style="color:#680000"><b><?php echo $subjectdesc?> </b></h2>          
                    </div>
                </a>
				</div>

           
          
 

               


    
             
            
         <?php                         
            }
          ?>
        
        </div>
    
  
    
     <?php
       echo "  <a href='teacherp1.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>";
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
