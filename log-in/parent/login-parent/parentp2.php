<?php 
	require_once("session.php");

	include("includes/datauser_parent.php");
	
	if($num_rows)
	{
	include("header.php");
	include("sidebar.php");
    }
?>


<?php
        $studentid=$_GET['studentid'];    
        $sy=$_GET['schoolyear']; 
        $gradesection=$_GET['gradesection'];    
        $gp=$_GET['gradingperiod'];   

        $query_acc=mysqli_query($con,"SELECT * FROM tblstudents WHERE studentid='$studentid'");
        $num_rows=mysqli_num_rows($query_acc);
        while($fetch=mysqli_fetch_assoc($query_acc))
        {
        $studlname=$fetch['lastname'];
        $studfname=$fetch['firstname'];
        $studmname=$fetch['middlename'];
        $email=$fetch['email'];
        $gender=$fetch['gender'];	
        }



        // analyzing what grade level of the student in specific year
        $query = "SELECT *  FROM tblsubjloadstudent WHERE studentid IN ('$studentid') and schoolyear in ('$sy')";
        $result = mysqli_query($con, $query);
        while($rowlevel = mysqli_fetch_array($result))
        {
          $level=$rowlevel["subjectgradelevel"];
        }

        
        //knowing what is the  corresponding department in $level or gradelevel
        $departquery = "SELECT * FROM tblgradesection WHERE gradedesc IN ('$level')";
        $result1 = mysqli_query($con, $departquery);
        while($row1 = mysqli_fetch_array($result1))
        {
          $departmentdesc=$row1["departmentdesc"];
        } 

        //selecting what grading period belong if it is jhs/shs/col
        $querydep = "SELECT *  FROM tblgradingperiod WHERE department IN ('$departmentdesc')";
        $result2 = mysqli_query($con, $querydep);

?>

              
<section class="home-section">
<div class="mains" >   
     

          <div class="container-fluid mx-1">
          <div class="row">
          <div class="col">
              <div class="panel mx-auto" style="height:auto;">
              <div class="panel-heading3" >Grades for S.Y. <?php echo $sy?> • <?php echo $gp?> </div>
              <div class="panel-body m-2" id="printarea">
              

              <div class="container-fluid">
              <div class="row justify-content-center">
                  <div class="col-12 col-md-6 ">
                  

                  <div class="name-student"><b><?php echo $studfname .' '.substr($studmname,0, 1).'. ' .$studlname.""; ?> </b> <br></div> 
                  <div class="section-student">   <?php echo $gradesection?></div> 
                  
                    <form id="myForm" action="parentp2.php">
                    <input name="studentid" type="hidden" value=<?=$studentid?> > 
                    <input name="schoolyear" type="hidden" value=<?=$sy?> > 
                    <input name="gradesection" type="hidden" value=<?=$gradesection?> > 
                          <div class="container" style="margin:0" >
                            <div class="selection">
                            <div class="select-grading">Select Grading Period</div> 
                               
                                      <select name="gradingperiod" onChange="selectChange(this.value)" id="selectgp"  class="form-select" >                
                                      <option id="option" value="select"   disabled="" >  Please Select </option>
                                                      <?php                        
                                      while($row = mysqli_fetch_array($result2)){    
                                      $gradingperiod=$row["gradingperiod"];
                                                      ?>
                                      <option id="option" value=<?=$gradingperiod?> ><?php echo $gradingperiod ?> </option>
                                                      <?php     
                                                                                }                                    
                                                      ?>
                                      </select> 
                               
                            </div>   
                          </div>
                    </form>

                  </div>                
                  <div class="col-12 col-md-6 d-flex justify-content-center" >
                  <img class="image-banner" src='../../../images/Icons/seal.png' alt="sideEU-image" > 

                  
              </div>
              </div>
              </div>
                

              <br>
                  
                  
        <div class="table-responsive">
            <table id="styled-table" class="table table-bordered table-striped table-hover " style="width:100%">
                                     <thead style="text-align:center; background-color: maroon; color:white; " >
                                            <tr >
                                                <th><h6><b>Subjects</b> </h6></th>
                                                <th><h6><b>Grade</b> </h6></th>
                                                <th><h6><b>Remarks</b> </h6></th>
                                                <th class="notespanheader"><h6><b>Notes</b> </h6></th>
                                            </tr>
                                      </thead>     

                  <?php 
                    $queryres = "SELECT *  FROM tblsubjloadstudent WHERE studentid IN ('$studentid') and schoolyear in ('$sy')";
                    $result = mysqli_query($con, $queryres);
                    $multiplier = 0;
                    $sum= 0;
                               while($rowsub = mysqli_fetch_array($result))
                               {
                                $multiplier ++;
                                      $subjloadstudid=$rowsub["id"];
                                      $subject=$rowsub["subject"];
                                      $subjectdesc=$rowsub["subjectdesc"];
                                            
                                          $analyzet = "SELECT * FROM tblsectionloadteacher WHERE subject = '$subject' and gradesection = '$gradesection' and schoolyear ='$sy'";
                                          $analyzeteacher = mysqli_query($con, $analyzet);      
                                          while($rowanalyzeteacher = mysqli_fetch_array($analyzeteacher))
                                          {
                                              
                                                $facultyid=$rowanalyzeteacher["facultyid"]; 
                                                $analyzetname = "SELECT * FROM tblteacher WHERE facultyid IN ('$facultyid') ";
                                                $analyzeteachername = mysqli_query($con, $analyzetname);
                                                    while($rowanalyzeteachername = mysqli_fetch_array($analyzeteachername))
                                                    {
                                                      $tfname=$rowanalyzeteachername["firstname"];
                                                      $tmname=$rowanalyzeteachername["middlename"];
                                                      $tlname=$rowanalyzeteachername["lastname"];
                                                

                                                    }
                                              }  

                                                  //for getting grades in tblgrade
                                                  $querysubj = "SELECT * FROM tblgrade WHERE studentsubjloadid IN ('$subjloadstudid') and gradingperiod in ('$gp') ";
                                                  $resultsubj = mysqli_query($con, $querysubj);                               
                                                                                  
                  ?>
                               
              <tr>        
                       
                  <?php                 
                                        while($rowresultsubj = mysqli_fetch_array($resultsubj))
                                                {
                                                  $grade=$rowresultsubj["grade"]; 
                                                  $notes=$rowresultsubj["notes"]; 
                                                     
                                                  if($grade >= 75){
                                                      $remarks="Passed";
                                                  }
                                                  else{
                                                    $remarks="Failed";
                                                  }
                                                  $sum = $sum + $grade;                                                      
                  ?>

                                                     
                        <td  ><h5><b><?php echo  $subjectdesc?></b></h5><h7 ><?php echo  $subject.' | Teacher: '.$tfname.' '.$tmname.' '.$tlname?></h7></td>                        
                        <td style="text-align: center; vertical-align: middle;"> <h6><?php echo  $grade?></h6></td>
                        <td style="text-align: center; vertical-align: middle;"><h6><?php echo  $remarks?></h6></td>
                        <td class="notespanrow" style="text-align: center; vertical-align: middle;"> <?php echo  $notes?></td>
              </tr >  


                  <?php 
                                        
                                                }          
                          } 
                          $average=$sum /$multiplier; 
                              if($average >= 75){
                                $averageremarks="Passed";
                              }
                              else{
                                $averageremarks="Failed";
                              }
                  ?>
                          
                          

              <tr>
                        <td style="text-align: center;"><h6>Average</h6></td>
                        <td style="text-align: center;"> <h6><?php echo  round($average, 0)?></h6></td> 
                        <td style="text-align: center;"><h6><?php echo  $averageremarks?></h6></td>
                        <td class="notespanrow" style="text-align: center;"><h6></h6></td>
                            </tr>
            
                    


            </table>
        </div>
      
        <form action="parentp1.php" method="get">
        <input name="studentid" type="hidden" value=<?=$studentid?> > 
        <a href='parentp2.php' id="goback">  <input type='submit' class='addbtn' value='Go Back' ></a> 
           
      

      <button onclick="window.print();" type="button" class="addbtn" id="print-btn" formnovalidate>Print Preview</button>
     
 
      </form>


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
