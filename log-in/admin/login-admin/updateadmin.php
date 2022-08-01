<?php 

    include("session.php");
    include("includes/data_user.php");

    



    if($num_rows)
    {
    include("header.php");
    include("sidebar.php");
    }
?>











		  
<section class="home-section">
    <div class="mains">
            
        <div class="container">
        <div class="panel panel-default" style="width:880px;">
        <div class="panel-heading2"  ><i class="fas fa-user-edit"></i> Edit Profile
        <span   style="float: right;" class="tool-small" data-tip="After editing their personal information, you need to click the Save button then after saving the information, click Go Back." tabindex="1"><i class="fas fa-question-circle"></i></span>
    </div>
        <div class="panel-body" style="font-size:12px; padding:5px;"> 
                     
                        
      
                     
    <div class="updateprofilestud"> 
        <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">                                      
        <input  name="admin" type="hidden" placeholder="" value="<?=$usern?>" required>

                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label >Last Name:*</label> 
                                                <input class="form-control input-sm"  name="lname" type=
                                                "text" placeholder="" value="<?= $u_lname ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label >First Name:*</label> 
                                                <input class="form-control input-sm"  name="fname" type=
                                                "text" placeholder="" value="<?= $u_fname ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label >Middle Name:*</label> 
                                                <input class="form-control input-sm"  name="mname" type=
                                                "text" placeholder="" value="<?= $u_mname ?>" required>
                                                </div>
                                            </div>
                                            </div> 
                                            
                                            <div class="form-group">


                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Gender: <?= $u_gender ?> </label> 
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
                                                "date" placeholder="" value="<?= $u_birthdate ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Contact </label> 
                                                <input class="form-control input-sm"  name="contact" type=
                                                "number" placeholder="" value="<?= $u_contactno ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Email</label> 
                                                <input class="form-control input-sm"  name="email" type=
                                                "email" placeholder="" value="<?= $u_email ?>">
                                                </div>
                                            </div>
                                           
                                            </div>

                                            
                                        </div>
                                                                    
                                           
                                                
                                           
                    
                                       
                              <a href='adminpage.php'><input type='button' class='addbtn' value='Go Back' formnovalidate>  </a>   
                              <input class=addbtn type="submit" id=btncreate name="btnsaveinfoadmin"value="Save" >
                            
                         
        </form>
       
                     
         
                   
                 
                      





                                        

            
                         

    </div><!--End of updateprofilestud-->





        </div>       
        </div>





                <div class="panel panel-default" style="width:350px;">
                <div class="panel-heading2" > <i class="fas fa-lock"></i>  Change Password
                <span style="float: right;" class="tool-small" data-tip="To change your password, first enter your old password, then your new one. Retype your new password for confirmation." tabindex="1"><i class="fas fa-question-circle"></i></span>

            </div>
                <div class="panel-body">
                <div class="updateprofilestud"> 
                    <form id="form1" name="form1" method="post" action="../insertdata/insertdata.php">
                
                    <input name="adminid" placeholder="" type="hidden" value="<?=$usern?>" readonly>
                                        <div class="row">
                                           
                                           <div class="col-md-12">
                                           <div class="form-group">
                                           <label >Current Password</label>  
                                               <input class="form-control input-sm" name="currentpass" placeholder=
                                                                   "" type="password"  id="myInput3" required>
                                        <input type="checkbox" onclick="myFunction3()">Show Password 
                                           </div> 
                                           </div>  
                        
                                       </div>  

                                       <div class="row">
                                           
                                           <div class="col-md-12">
                                           <div class="form-group">
                                           <label >New Password</label>  
                                               <input class="form-control input-sm" name="pass1" placeholder=
                                                                   "" type="password"  id="myInput1" required>
                                        <input type="checkbox" onclick="myFunction1()">Show Password 
                                           </div> 
                                           </div>  
                        
                                       </div>  


                                       <div class="row">
                                           
                                           <div class="col-md-12">
                                           <div class="form-group">
                                           <label >Repeat New Password</label>  
                                               <input class="form-control input-sm" name="pass2" placeholder=
                                                                   "" type="password"  id="myInput2" required>
                                            <input type="checkbox" onclick="myFunction2()">Show Password 
                                           </div> 
                                           </div>  
                        
                                       </div>                                        
                                            

                            
                              <input class=addbtn type="submit" id=btncreate name="btnchangepassadmin"value="Save" >                             
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


