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
                  
                $sy=$_GET['sy'];    


             
                $gradesectionquery=mysqli_query($con,"SELECT * FROM tblgradesection  
                order by gradedesc + 0 asc ");
?>







        
                    
          
			 
<!------------------------student add page----------------------------->
 
    
		  
<section class="home-section">
              <div class="mains">
            
            
          <div class="container">
            
              <div class="panel panel-default"style="width:100%;  ">
                 <div class="panel-heading1" ><i class="fas fa-user-cog"></i> Records - Year (<?php echo $sy?>) - Grade & Section</div>
               

                  <div class="panel-body"  >
                  <div class="table-responsive" style="width:100%;  font-size:12px; overflow-x:hidden; ">
                          <table id="managestud" class="table table-bordered table-striped table-hover"  >
                            <thead>
                                <tr >                          
                                    
                                      <th >Grade & Section</th>
                                      <th >Student</th>
                                  </tr >
                            </thead>


                                    <?php
                                    while($row = mysqli_fetch_array($gradesectionquery))
                                    {
                                        $gradedesc=$row['gradedesc'];
                                        $sectiondesc=$row['sectiondesc'];
                                        $gradesection="$gradedesc-$sectiondesc";
                                    ?>      
                                <tr >
                                
                              
                            
                                <td><?php echo "$gradedesc-$sectiondesc"; ?></td>
                              
                                <td><?php echo "<a href='records_students.php?sy=$sy&gradesection=$gradesection'> View </a>";  ?></td>
                          </tr>
                       
                    <?php                         
                       }
                     ?>

                          </table>
                         
                      </div>

                    
                    
                        
                        
                      <?php 
                   echo "  <a href='records_year.php'><input type='Submit' class='addbtn' value='Go Back'>  </a>"; 
                   ?>
                  </div>

              </div>




              





          </div>
          </div>

       
</section>
		  
  









<?php
include("footer.php");
?>

