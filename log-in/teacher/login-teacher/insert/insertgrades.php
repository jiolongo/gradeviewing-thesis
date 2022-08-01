<?php

	include("../../../../database/connection.php");
    // error_reporting(0);
      
    if(isset($_POST['btnaddgrades']))
    {
        $sy = $_POST['sy'];
        $subject = $_POST['subject'];
        $gp = $_POST['gp'];
        $gradesection = $_POST['gradesection'];
      







       


        if (
          !empty($_POST['studentid']) && !empty($_POST['grade']) &&  !empty($_POST['notes']) &&
          is_array($_POST['studentid']) && is_array($_POST['grade']) && is_array($_POST['notes']) &&
          count($_POST['studentid']) === count($_POST['grade']) 
       ) {
       
           $studentid_array = $_POST['studentid'];
           $grade_array = $_POST['grade'];
            $notes_array = $_POST['notes'];
           
        
              
            for ($i = 0; $i < count($studentid_array); $i++) {
              
              $astudid = ($studentid_array[$i]);
              $agrade = ($grade_array[$i]);
              $anotes = ($notes_array[$i]);
                    
              $queryselect = "SELECT id FROM tblsubjloadstudent where studentid ='$astudid' and subject ='$subject' and  gradesection ='$gradesection' and schoolyear = '$sy'";

              $resultstud = mysqli_query($con, $queryselect);
              while($rowstud = mysqli_fetch_array($resultstud))
              {
                $studentsubjid=$rowstud["id"];
             

              
               $identify = mysqli_query($con, "SELECT * FROM tblgrade where studentsubjloadid ='$studentsubjid' and gradingperiod ='$gp' and schoolyear ='$sy'");


              while($rowidentify = mysqli_fetch_array($identify))
              {
                $checkstudid=$rowidentify["studentsubjloadid"];
                       

                            if($checkstudid==$studentsubjid){
                              $query_run1=mysqli_query($con,"UPDATE `tblgrade` SET `grade`='$agrade' , `notes`='$anotes' WHERE studentsubjloadid='$studentsubjid' and gradingperiod = '$gp' and schoolyear='$sy'");
                              echo "<script>  alert('Grades and Notes Updated!');
                     
                     
                              location.href = '../teacherassigngrade.php?sy=$sy&gp=$gp&subject=$subject&gradesection=$gradesection'; 
                              
                              </script>";
                            }



                            // else{
                            //   $query_run2 =  mysqli_query($con,"INSERT INTO tblgrade (grade, notes) VALUES ('$agrade',$anotes) where studentsubjloadid = '$studentsubjid' and gradingperiod = '$gp' and schoolyear='$sy' ");
                            //   //echo "<script>  history.back(); alert('Grades Inserted!') </script>";
                            
                            // }

                           
              
              }
              }

            

           } 
           
         
       }




         



      //  if($query_run1)
      //  {
      //     echo "<script> history.back();  alert('Grades Updated!') </script>";
        
      //     // header("Location: ../teacherassigngrade.php?sy=$sy&gp=$gp&subject=$subject&gradesection=$gradesection");
           
      //  }
    
      //  else if($query_run2)
      //  {
      //    echo "<script>  history.back(); alert('Grades Inserted!') </script>";
        
      //    //  header("Location: ../teacherassigngrade.php?sy=$sy&gp=$gp&subject=$subject&gradesection=$gradesection");
           
      //  }
       else
       {
         echo "<script>  history.back();  alert('Error');</script>";
       }




        
    }
    
    
?>