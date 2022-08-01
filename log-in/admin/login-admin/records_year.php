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
                  
             
                $syquery=mysqli_query($con,"SELECT * FROM tblschoolyear ORDER BY sydesc");
                    ?>







        
                    
          
			 
<!------------------------student add page----------------------------->
 
    
		  
<section class="home-section">
              <div class="mains">
            
            
          <div class="container">
            
              <div class="panel panel-default"style="width:100%;  ">
                 <div class="panel-heading1" ><i class="fas fa-user-cog"></i> Records - Year </div>
               

                  <div class="panel-body"  >
                  <div class="table-responsive" style="width:100%;  font-size:12px; overflow-x:hidden; ">
                          <table id="managestud" class="table table-bordered table-striped table-hover"  >
                            <thead>
                                <tr >                          
                                      <th >School Year</th>    
                                      <th >Grade Section</th>
                                  </tr >
                            </thead>


                            <?php
                                    while($row = mysqli_fetch_array($syquery))
                                    {
                                        $sydesc=$row['sydesc'];
                                    ?>      
                                    <tr >                             
                                        <td><?php echo $sydesc; ?></td>
                                        <td><?php echo "<a href='records_gradesection.php?sy=$sydesc'> View </a>";  ?></td>
                                    </tr>
                       
                            <?php                         
                                    }
                            ?>

                          </table>
                         
                      </div>

                    
                    
                        
                        
                   
                  </div>

              </div>




              





          </div>
          </div>

       
</section>
		  
  









<?php
include("footer.php");
?>

