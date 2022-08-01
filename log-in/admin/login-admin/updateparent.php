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
             $v=$_GET['parent'];      
             $query_acc=mysqli_query($con,"SELECT * FROM tblparent WHERE username='$v'");
             while($fetch=mysqli_fetch_assoc($query_acc))
             {
            
             $username=$fetch['username'];
             $lname=$fetch['lastname'];
             $fname=$fetch['firstname'];
             $mname=$fetch['middlename'];
           
             $birthdate=$fetch['birthdate'];
             $birthplace=$fetch['birthplace'];
           
             $contact=$fetch['contactno'];
             $email=$fetch['email'];
           
             $address=$fetch['address'];
             }

            
     

            
            
               
             $studquery=mysqli_query($con,"SELECT * FROM tblstudentsdetail WHERE studentid='$v'");
           
     
              
                  
?>






		  
<section class="home-section">
    <div class="mains">
            
        <div class="container" style="width:1240px;  padding:0;" >
        <div class="panel panel-default"style="width:100%;  ">
        <div class="panel-heading2"  ><i class="fas fa-user-edit"></i> Edit Profile
        <span   style="float: right;" class="tool-small" data-tip="After editing their personal information, you need to click the Save button then after saving the information, click Go Back. " tabindex="1"><i class="fas fa-question-circle"></i></span>
    </div>
        <div class="panel-body" style="width:1235px;  font-size:12px; padding:5px;"> 
                     
                        
      
                     
    <div class="updateprofilestud"> 
        <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
      
                      
                                        <div class="row">
                                           
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label >Username</label>  
                                                <input class="form-control input-sm" name="parent" placeholder=
                                                                    "" type="text" value="<?=$v?>" readonly>
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
                                                  
                                           
                                                
                                            <div class="row">
                                                
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Birthdate</label> 
                                                <input class="form-control input-sm"  name="birthdate" type=
                                                "date" placeholder="" value="<?= $birthdate ?>">
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
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                <label>Home Address  </label> 
                                                <input class="form-control input-sm"  name="address" type=
                                                "text" placeholder="Home Address"  value="<?= $address ?>">
                                                </div>
                                            </div>

                                            
                                            </div> 
                              <a href='manageparent.php'><input type='button' class='addbtn' value='Go Back' formnovalidate>  </a>   
                              <input class=addbtn type="submit" id=btncreate name="btnsaveinfoparent"value="Save" >
                            
                         
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


