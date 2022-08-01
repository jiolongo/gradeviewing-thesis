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
             $v=$_GET['faculty'];      
             $query_acc=mysqli_query($con,"SELECT * FROM tblteacher WHERE facultyid='$v'");
             while($fetch=mysqli_fetch_assoc($query_acc))
             {
             $facultyid=$fetch['facultyid'];
             $password=$fetch['password'];
             $lname=$fetch['lastname'];
             $fname=$fetch['firstname'];
             $mname=$fetch['middlename'];
             $gender=$fetch['gender'];	
             $birthdate=$fetch['birthdate'];
             $birthplace=$fetch['birthplace'];
             $religion=$fetch['religion'];
             $contact=$fetch['contact'];
             $email=$fetch['email'];
             $civilstatus=$fetch['civilstatus'];
             $nationality=$fetch['nationality'];
             $address=$fetch['address'];
             }

             $num_rows=mysqli_num_rows($query_acc);
     

            
            
               
            //  $studquery=mysqli_query($con,"SELECT * FROM tbla WHERE studentid='$v'");
           
     
              
                  
?>






		  
<section class="home-section">
    <div class="mains">
            
        <div class="container-fluid" style="width:1000px; " >
        <div class="panel panel-default mx-auto" >
        <div class="panel-heading2"  ><i class="fas fa-lock"></i> Change Password
        <span style="float: right;" class="tool-small" data-tip="To change your password, first enter your old password, then your new one. Retype your new password for confirmation." tabindex="1"><i class="fas fa-question-circle"></i></span>
    </div>
        <div class="panel-body" style="width:1000px;"> 
                     
                        
      
                     
    <div class="updateprofilestud"> 
        <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
      
                      
                                        <div class="row">
                                           
                                            <div class="col-md-6">
                                            <div class="form-group">
                                            <label >Faculty ID</label>  
                                                <input class="form-control input-sm" name="facultyid" placeholder=
                                                                    "" type="text" value="<?=  $facultyid  ?>" readonly>
                                            </div> 
                                            </div>  
                                            <div class="col-md-6">
                                            <div class="form-group">
                                            <label >Full Name: </label>  
                                                <input class="form-control input-sm" name="fullname" placeholder=
                                                                    "" type="text" value="<?=  $fname.' '.$mname.' '.$lname  ?>" readonly>
                                            </div> 
                                            </div>  

                                        


                                        </div>  

                                        <div class="row">
                                           
                                           <div class="col-md-6">
                                           <div class="form-group">
                                           <label >Current Password</label>  
                                               <input class="form-control input-sm" name="currentpass" placeholder=
                                                                   "" type="password"  id="myInput3" required>
                                        <input type="checkbox" onclick="myFunction3()">Show Password 
                                           </div> 
                                           </div>  
                        
                                       </div>  


                                       <div class="row">
                                           
                                           <div class="col-md-6">
                                           <div class="form-group">
                                           <label >New Password</label>  
                                               <input class="form-control input-sm" name="pass1" placeholder=
                                                                   "" type="password"  id="myInput1" required >
                                        <input type="checkbox" onclick="myFunction1()">Show Password 
                                           </div> 
                                           </div>  
                        
                                       </div>  


                                       <div class="row">
                                           
                                           <div class="col-md-6">
                                           <div class="form-group">
                                           <label >Repeat New Password</label>  
                                               <input class="form-control input-sm" name="pass2" placeholder=
                                                                   "" type="password"  id="myInput2" required >
                                            <input type="checkbox" onclick="myFunction2()">Show Password 
                                           </div> 
                                           </div>  
                        
                                       </div>  


                                           

                                            
                                            
                              <a href='manageteacher.php'><input type='button' class='addbtn' value='Go Back' formnovalidate>  </a>     
                              <input class=addbtn type="submit" id=btncreate name="btnchangepassteacher"value="Save" >
                              
                         
        </form>
       
                     
         
                   
                 
                      





                                        

            
                         

    </div><!--End of updateprofilestud-->





        </div>       
        </div>
        </div><!--End of container-->

    </div><!--End of mains-->       
</section>
		  





<?php
    include("footer.php");
?>


