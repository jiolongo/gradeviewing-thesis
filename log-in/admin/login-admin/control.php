<?php 
require_once("session.php");

include("includes/data_user.php");

if($num_rows)
{
include("header.php");
include("sidebar.php");
}


$querycontrol=mysqli_query($con,"SELECT * FROM tblcontrol order by datecreated desc");


?>

<!------------------------My account page----------------------------->

         
<section class="home-section">
        

      <div class="mains">  	
            

      <div class="container">

      <div class="panel panel-default"style="width:920px;  ">
                <div class="panel-heading1" > <i class="fas fa-cogs"></i> Control
                    <span style="float: right;" class="tool-small" data-tip="You can now set the date duration after adding the school year and the grading period. After that, change the current grading period's status to ACTIVE." tabindex="1"><i class="fas fa-question-circle"></i></span>
            </div>
                <div class="panel-body">
                    <div class="container">
                        <div class="table-responsive" style=" font-size:12px; margin-right:10px;">
                            <table id="managecontroltable" class="table table-bordered table-striped table-hover"  style="width:870px; ;">
                            <thead>
                                <tr>
                                    <th style="width:15px; text-align:center;" ></th>
                                    <th>School Year</th>
                                    <th>Grading Period</th> 
                                    <th>Date Created</th>    
                                    <th style="text-align:center;" colspan="3">Date Duration</th> 
                                  
                                    
                                    <th>Status</th>  
                                    <th>Set Status</th> 
                                                                                                
                                </tr>
                            </thead> 
                            <?php
                            while($rowcontrol = mysqli_fetch_array($querycontrol))
                                {
                                $schoolyear=$rowcontrol['schoolyear'];
                                $gradingperiod=$rowcontrol['gradingperiod'];
                                $datecreated=$rowcontrol['datecreated'];
                                $datestart=$rowcontrol['datestart'];
                                $dateend=$rowcontrol['dateend'];
                                $status=$rowcontrol['status'];

                                
                            ?>
                             <form action="../insertdata/insertdata.php" method="POST">
                                <tr id="<?php echo $rowcontrol['id']; ?>" >
                                <td style="width:15px;" > <input style="width:30px;"  type="checkbox" name="id[]"  value="<?php echo $rowcontrol["id"]; ?>" /></td>
                                    <td><?php echo $schoolyear;?></td>
                                    <td><?php echo $gradingperiod;?></td>
                                    <td><?php echo $datecreated;?></td>
                                    
                                    <td style=" text-align: center;"> 
                                    Start: <br>
                                    <input class="boxuseroption" type="date"  name="addstartdate" style="width:auto" value=<?=$datestart?> required>
                                       
                                    </td>


                                    <td style=" text-align: center;"> 
                                    To: <br>
                                    <input class="boxuseroption" type="date"  name="addenddate"  style="width:auto"  value=<?=$dateend?> required>
                                    </td>
                                    
                                    <td style=" vertical-align: middle;" > 
                                       
                                   
                                    <input type="hidden"  name="schoolyear"value=<?=$schoolyear?> > 
                                    <input type="hidden"  name="gradingperiod"value=<?=$gradingperiod?> >  
                                 
                            
                                    <input class="controlbtn1" type="submit"  name="btncontroldateduration"value="Set" >  
                                    </td>     
                                    </form>



                                    <form action="../insertdata/insertdata.php" method="POST">    
                                    <td><?php echo $status;?></td>  

                                    <td style="width:150px;">
                                    <input type="hidden"  name="schoolyear"value=<?=$schoolyear?> > 
                                    <input type="hidden"  name="gradingperiod"value=<?=$gradingperiod?> >    
                                    <select  name="status">
                                    <option value='Active'>Active</option>
                                    <option value='Inactive'>Inactive</option>
                                    </select>                                                                                                        
                                    <input class=controlbtn1 type="submit"  name="btncontrolstatus"value="Save" >   
                                    </td> 
                                   

                                </tr>
                                </form>
                            <?php
                            }
                            ?>

                        
                        </table> 
                        <button type="button" name="btn_deletestatus" id="btn_deletestatus" class="addbtn">Delete Selected</button>
                        
                      
                  


                 
              
                           
                 

                    </div>
                    </div>
                    <h3 style="font-size:10px">Note: Remember to set the status of the other active grading period to INACTIVE before updating the status of another grading period to ACTIVE.</h3>
                </div>
           </div>

           
            <div class="contain">
                                    <div class="panel panel-default" style="margin-left: 10px" >
                                    <div class="panel-heading2" > <i class="fas fa-plus"></i> Add Current S.Y. and Period
                                        <span style="float: right;" class="tool-small" data-tip="Add the current school year and all the grading period. (1st-4th)" tabindex="1"><i class="fas fa-question-circle"></i></span>
                                    </div>
                                    <div class="panel-body">
                                
                                        <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                                            <table class="table" style="width:250px; height:150px; margin:0"> 
                                                    <tr>                 
                                                    <td> School Year:</td>   
                                                        <td> <select class="boxuser" name="addschoolyear" >
                                                        <?php
                                                        $query_acc=mysqli_query($con,"SELECT sydesc FROM tblschoolyear order by sydesc desc");
                                                        while($row = $query_acc -> fetch_assoc()){
                                                        $sydesc = $row['sydesc'];
                                                        echo"<option value='$sydesc'>$sydesc</option>";}
                                                        ?> 
                                                        </select></td> 
                                                   </tr>
                                                    <tr>                                                             
                                                       <td> Grading Period:</td>   
                                                        <td> <select class="boxuser" name="addgradingperiod" required>
                                                        <?php
                                                        $query_acc=mysqli_query($con,"SELECT * FROM tblgradingperiod");
                                                        while($row = $query_acc -> fetch_assoc()){
                                                        $gradingperiod = $row['gradingperiod'];
                                                        echo"<option value='$gradingperiod'>$gradingperiod</option>";}
                                                        ?> 
                                                        </select></td>
                                                    </tr>
                                                    </tr>      
<!--                                                        
                                                   <td>Start from: <input class="boxuser"type=date  name="addstartdate"  required></td>  
                                                   <td>To: <input class="boxuser"type=date  name="addenddate"  required></td>  -->
                                                   </tr>
                                                 


                                                </table>
                                        <input class=controlbtn type="submit"  name="btncontrol"value="Add" >
                                        </form>   
                                        <h3 style="font-size:10px">Note: The status is set to INACTIVE whenever you add a new school year and grading period. </h3>
                                    </div> 
                                   
                                    </div> 






            </div>
                               
                               
      

  </div> 
  </div> 
</section>
                     
 



<?php
include("footer.php");
?>
    <?php
                        