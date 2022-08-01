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
             $v=$_GET['teacher'];      
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
     

            
            
               
              //$studquery=mysqli_query($con,"SELECT * FROM tbla WHERE studentid='$v'");
           
     
              
                  
?>






		  
<section class="home-section">
    <div class="mains">
            
        <div class="container" style="width:1240px;  padding:0;" >
        <div class="panel panel-default"style="width:100%;  ">
        <div class="panel-heading2"  ><i class="fas fa-user-edit"></i> Edit Profile
        <span   style="float: right;" class="tool-small" data-tip="After editing their personal information, you need to click the Save button then after saving the information, click Go Back." tabindex="1"><i class="fas fa-question-circle"></i></span>
    </div>
        <div class="panel-body" style="width:1235px;  font-size:12px; padding:5px;"> 
                     
                        
      
                     
    <div class="updateprofilestud"> 
        <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
      
                      
                                        <div class="row">
                                           
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label >Faculty ID</label>  
                                                <input class="form-control input-sm" name="facultyidinfo" placeholder=
                                                                    "" type="text" value="<?=  $facultyid  ?>" readonly>
                                            </div> 
                                            </div>  




                                        </div>  


                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label >Last Name:*</label> 
                                                <input class="form-control input-sm"  name="lname" type=
                                                "text" placeholder="" value="<?= $lname ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label >First Name:*</label> 
                                                <input class="form-control input-sm"  name="fname" type=
                                                "text" placeholder="" value="<?= $fname ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label >Middle Name:*</label> 
                                                <input class="form-control input-sm"  name="mname" type=
                                                "text" placeholder="" value="<?= $mname ?>" required>
                                                </div>
                                            </div>
                                            </div> 
                                            
                                            <div class="form-group">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Gender: <?= $gender ?> </label> 
                                                    <select class="form-control input-sm" name="gender"   >
                                                    
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>	
                                                    </select>	
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Birthdate</label> 
                                                <input class="form-control input-sm"  name="birthdate" type=
                                                "date" placeholder="" value="<?= $birthdate ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Birth place</label> 
                                                <input class="form-control input-sm"  name="birthplace" type=
                                                "text" placeholder="" value="<?= $birthplace ?>">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                                                    
                                           
                                                
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label >Religion </label> 
                                                    <input class="form-control input-sm"  name="religion" type=
                                                "text" placeholder="" value="<?= $religion ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Contact </label> 
                                                <input class="form-control input-sm"  name="contact" type=
                                                "number" placeholder="" value="<?= $contact ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Email</label> 
                                                <input class="form-control input-sm"  name="email" type=
                                                "email" placeholder="" value="<?= $email ?>">
                                                </div>
                                            </div>
                                        </div> 
                    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label >Civil Status: <? $civilstatus ?> </label> 
                                                    <select class="form-control input-sm" name="status" >
                                                       
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>	
                                                    </select>	
                                                </div>
                                            </div>

                                            

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Nationality</label> 
                                                <input class="form-control input-sm"  name="nationality" type=
                                                "text" placeholder="Nationality" value="<?= $nationality ?>">
                                                </div>
                                            </div>
                                            </div> 


                                            <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                <label>Home Address  </label> 
                                                <input class="form-control input-sm"  name="address" type=
                                                "text" placeholder="Home Address"  value="<?= $address ?>">
                                                </div>
                                            </div>

                                            
                                            </div> 
                              <a href='manageteacher.php'><input type='button' class='addbtn' value='Go Back' formnovalidate>  </a>     
                              <input class=addbtn type="submit" id=btncreate name="btnsaveinfoteacher"value="Save" >
                              
                         
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


