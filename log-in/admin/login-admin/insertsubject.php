
<?php
  
include("../../../database/connection.php");
/*-------------teacher subjectloads----------------- */
if(isset($_GET['teachersubmit']))
{
  error_reporting(0);
  $teacher= $_GET['facultyid'];
  $schoolyear= $_GET['schoolyear'];
  if(isset($_GET['subjectid']))
  {
  $subjectidchecked = [];
  $subjectidchecked = $_GET['subjectid'];
  foreach($subjectidchecked as $subjectidrow):
      
        $subjectsql="SELECT * FROM tblsubject WHERE subjectid IN ($subjectidrow)";
        $resultsubject = mysqli_query($con, $subjectsql);
        $fetch=mysqli_fetch_assoc($resultsubject);
              
              $fetchsubject=$fetch['subject'];
              $fetchsubjectdesc=$fetch['subjectdesc'];
              $fetchsubjectgradelevel=$fetch['subjectgradelevel'];                              
              

              $teacher= $_GET['facultyid'];
             


              $query1=mysqli_query($con,"SELECT * FROM tblsubjloadteacher WHERE subject = '$fetchsubject' and facultyid = '$teacher' and schoolyear = '$schoolyear'");
              while($row = mysqli_fetch_array($query1))
              {
                $subject=$row['subject'];
               
              }
        
        
              if($fetchsubject==$subject)
              {
                // alert('Subject Already Taken');
              echo "<script> 
              history.back(); </script>";
              }
              else{





  $query = "INSERT INTO tblsubjloadteacher(facultyid, subject, subjectdesc, subjectgradelevel,schoolyear) VALUES ('$teacher','$fetchsubject','$fetchsubjectdesc','$fetchsubjectgradelevel','$schoolyear') ";
           $query_run = mysqli_query($con, $query);
               
         
             
              if($query_run)
                {
              
                 
                     echo "<script>  alert('Successfully Added Subject in your SubjectLoads!');
                     
                     
                     location.href = ' manageteacherp3.php?faculty=$teacher&schoolyear=$schoolyear'; 
                     
                     </script>";
                    // header("Location: manageteacherp3.php?faculty=$teacher&schoolyear=$schoolyear");
                }
                else
                {
                  echo "<script>  alert('Error');</script>";
                }

              }
            
            endforeach;  
            
            

  }
  else
  {
    
    echo "<script>  alert('No Item Selected');</script>";
    header("Location: teachersubjectlist.php?faculty=$teacher&schoolyear=$schoolyear");
  }
}




















/*-------------student subjectloads----------------- */
else if(isset($_GET['studentsubmit']))
{
  error_reporting(0);
  $student= $_GET['studentid'];
  $gradesection= $_GET['gradesection'];
  $sy= $_GET['schoolyear'];
 
    if(isset($_GET['subjectid']))
    {
    $subjectidchecked = [];
    $subjectidchecked = $_GET['subjectid'];
    foreach($subjectidchecked as $subjectidrow):
      
        $subjectsql="SELECT * FROM tblsubject WHERE subjectid = '$subjectidrow'";
        $resultsubject = mysqli_query($con, $subjectsql);
        $fetch=mysqli_fetch_assoc($resultsubject);
              
              $fetchsubject=$fetch['subject'];
              $fetchsubjectdesc=$fetch['subjectdesc'];
              $fetchsubjectgradelevel=$fetch['subjectgradelevel'];                              
              
              $gradesection= $_GET['gradesection'];
              $student= $_GET['studentid'];
              $sy= $_GET['schoolyear'];




                      $query1=mysqli_query($con,"SELECT * FROM tblsubjloadstudent WHERE subject = '$fetchsubject' and studentid = '$student'");
                      while($row = mysqli_fetch_array($query1))
                      {
                        $subject=$row['subject'];
                        
                      }
                
                
                      if($fetchsubject==$subject)
                      {
                      // echo "<script> alert('Subject $subject already assigned! ');
                      // history.back(); </script>";
                      echo "<script> 
                      history.back(); </script>";
                      }
                      else{
                                    
                      $query = "INSERT INTO tblsubjloadstudent(studentid, subject, subjectdesc, subjectgradelevel,gradesection,schoolyear) VALUES ('$student','$fetchsubject','$fetchsubjectdesc','$fetchsubjectgradelevel','$gradesection','$sy') ";
                      $query_run = mysqli_query($con, $query);
                      if($query_run)
                      {

                      

                        $departquery = "SELECT * FROM tblgradesection WHERE gradedesc IN ('$fetchsubjectgradelevel')";//to identify subjectlevel
                        $result1 = mysqli_query($con, $departquery);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                          $departmentdesc=$row1["departmentdesc"];
                        } 
                        $querygp = "SELECT *  FROM tblgradingperiod WHERE department IN ('$departmentdesc')"; // to identify gradingperiod
                        $result2 = mysqli_query($con, $querygp);
                         while($row2 = mysqli_fetch_array($result2))
                        {
                          $gradingperiod=$row2["gradingperiod"];

                                    $queryselect = "SELECT * FROM tblsubjloadstudent where studentid IN ('$student') and subject IN ('$fetchsubject') and subjectdesc IN ('$fetchsubjectdesc') and  subjectgradelevel IN ('$fetchsubjectgradelevel') and  gradesection IN ('$gradesection') and schoolyear IN ('$sy')";// to identify the unique id of tblsubjloadstudent table
                                    $stud = mysqli_query($con, $queryselect);
                                    while($rowstud = mysqli_fetch_array($stud))
                                    {
                                      $studentsubjid=$rowstud["id"];
                                      $schoolyear=$rowstud["schoolyear"];
                                    }

                          $insertstudquery = "INSERT INTO tblgrade(studentsubjloadid, gradingperiod,schoolyear) VALUES ('$studentsubjid','$gradingperiod','$schoolyear') ";
                          $run = mysqli_query($con, $insertstudquery);

                          echo "<script>  alert('Successfully Added Subject in your SubjectLoads!');</script>";


                        } 
                     




                      








                        header("Location: managestudentp3.php?student=$student&gradesection=$gradesection&schoolyear=$sy");
          // echo "<script> location.href'managestudentp3.php?student=$student&gradesection=$gradesection&schoolyear=$sy' alert('Successfully Added Subject in your SubjectLoads!');</script>";
                      }
                      else
                      {
                        echo "<script>  alert('Error');
                        history.back(); </script>";
                      }

              }

             
            endforeach;
        

         
  }
  else
  {
    
    echo "<script>  alert('No Item Selected');</script>";
    header("Location: studentsubjectlist.php?student=$student&gradesection=$gradesection&schoolyear=$sy");
  }
}


































/*-------------teacher section----------------- */
else if(isset($_GET['teachersubmitsection']))
{
  error_reporting(0);
  $faculty= $_GET['facultyid'];
  $subject= $_GET['subject'];
  $sy= $_GET['schoolyear'];
  $level= $_GET['level'];
    if(isset($_GET['gradesectionid']))
    {
    $gradesectionidchecked = [];
    $gradesectionidchecked = $_GET['gradesectionid'];
    foreach($gradesectionidchecked as $gradesectionidrow):
      

      
       
        $resultsection = mysqli_query($con, "SELECT * FROM tblgradesection WHERE gradesectionid IN ($gradesectionidrow)");
        $fetch=mysqli_fetch_assoc($resultsection);
              
              $fetchsection=$fetch['sectiondesc'];
              $fetchgrade=$fetch['gradedesc'];
                                         
              $gradesection="$fetchgrade-$fetchsection";


              $faculty= $_GET['facultyid'];
              $subject= $_GET['subject'];
              $sy= $_GET['schoolyear'];


              
               $query1=mysqli_query($con,"SELECT * FROM tblsectionloadteacher WHERE subject = '$subject' and schoolyear= '$sy'and gradesection = '$gradesection'");
                      while($row = mysqli_fetch_array($query1))
                      {
                        $gradesection1=$row['gradesection'];
                        $facultyid=$row['facultyid'];
                      }
                
                
                      if($gradesection==$gradesection1)
                      {
                      echo "<script> alert('This Section is already assigned to User $facultyid');
                      history.back(); </script>";
                      }

                      else{



                        $resultsubjectquery = mysqli_query($con, "SELECT * FROM tblsubject WHERE subject = '$subject'");
                        while($fetchrowsubject = mysqli_fetch_array($resultsubjectquery))
                        {
                        $fetchresultsubjectdesc=$fetchrowsubject['subjectdesc'];
                        }



                        $query = "INSERT INTO tblsectionloadteacher(facultyid, subject, subjectdesc, schoolyear, level,gradesection) VALUES ('$faculty','$subject','$fetchresultsubjectdesc','$sy','$level','$gradesection') ";
                        $query_run = mysqli_query($con, $query);



                      if($query_run)
                      {
                        







                          /*-------------------- updating tblgrade to have teachersectionloadid -------------------- */
                        $departquery = "SELECT * FROM tblgradesection WHERE gradedesc IN ('$level')";//to identify subjectlevel
                        $result1 = mysqli_query($con, $departquery);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                          $departmentdesc=$row1["departmentdesc"];
                        } 
                        $querygp = "SELECT *  FROM tblgradingperiod WHERE department IN ('$departmentdesc')"; // to identify gradingperiod
                        $result2 = mysqli_query($con, $querygp);
                         while($row2 = mysqli_fetch_array($result2))
                        {
                          $gradingperiod=$row2["gradingperiod"];

                                    $queryselect = "SELECT * FROM tblsectionloadteacher where facultyid IN ('$faculty') and subject IN ('$subject') and  level IN ('$level') and  gradesection IN ('$gradesection') and schoolyear IN ('$sy')";// to identify the unique id of tblsubjloadstudent table
                                    $teach = mysqli_query($con, $queryselect);
                                    while($rowstud = mysqli_fetch_array($teach))
                                    {
                                      $teachersectionloadid=$rowstud["id"];
                                      $schoolyear=$rowstud["schoolyear"];
                                    }

                                   


       
                               $insertteacherquery = "INSERT INTO tblassigngrade(sectionloadteacherid,gradingperiod,schoolyear) VALUES ('$teachersectionloadid','$gradingperiod','$schoolyear') ";
                               $run = mysqli_query($con, $insertteacherquery);
                       

                          echo "<script>  alert('Successfully Added Grade and Section in Teacherload!');</script>";


                        } 
                     

                        /*--------------------END COMMENT updating tblgrade to have teachersectionloadid -------------------- */


















                        header("Location: manageteacherp4.php?faculty=$faculty&schoolyear=$sy&subject=$subject&level=$level");
                            echo "<script>  alert('Successfully Added Grade and Section in Teacherload!');</script>";
                      }
                      else
                      {
                        echo "<script>  alert('Error');
                        history.back(); </script>";
                      }

              }

             
            endforeach;
        

         
  }
  else
  {
    
    echo "<script>  alert('No Item Selected');</script>";
    header("Location: teachersectionlist.php?faculty=$faculty&schoolyear=$sy&subject=$subject&level=$level");
  }
}




?>
