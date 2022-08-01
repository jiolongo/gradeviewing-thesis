                      
<?php
	include("../../../database/connection.php");



	


if(isset($_POST['btncur']))
{
	
				
				error_reporting(0);

				$addcur=$_POST['addcur'];



			

				$query=mysqli_query($con,"SELECT curriculumdesc FROM tblcurriculum WHERE curriculumdesc='$addcur'");
				$num_rows=mysqli_num_rows($query);
				if($num_rows)
				{
				echo "<script> alert('Curriculum already exists!');
				history.back(); </script>";

				}

					
				else
				{

					// $querycount = "SELECT curriculumid FROM tblcurriculum ORDER BY curriculumid";  
					// $query_run = mysqli_query($con, $querycount);
					// $row = mysqli_num_rows($query_run);
				
					// $rowall=$row+1;
				$account_query=mysqli_query($con,"INSERT INTO tblcurriculum(curriculumdesc) VALUES( '$addcur')");
				if($account_query)
				{
				echo 
					"<script> alert('Successfully Added Curiculum!');
				history.back();  </script>";


				}
				else
				{
				echo "<script> alert('Error!');
				history.back(); </script>";
				}
				}

}












elseif(isset($_POST['btnsy']))
{
		
			error_reporting(0);
			$addsy=$_POST['addsy'];
			$sy=$_POST['addsy'];
			$addcursy=$_POST['addcursy'];

			$query=mysqli_query($con,"SELECT sy FROM tblschoolyear WHERE sy='$sy'");
			$num_rows=mysqli_num_rows($query);
			if($num_rows)
			{
			echo "<script> alert('School Year already exists!');
			history.back(); </script>";

			}

				
			else
			{


				$syadd=$addsy+1;
				$syall=$addsy.'-'.$syadd;
			$account_query=mysqli_query($con,"INSERT INTO tblschoolyear(sydesc,sy,curriculumdesc) VALUES( '$syall','$sy','$addcursy')");
			if($account_query)
			{
			echo 
				"<script> alert('Successfully Added School Year!');
			history.back();  </script>";


			}
			else
			{
			echo "<script> alert('Error!');
			history.back(); </script>";
			}
			}

}






elseif(isset($_POST['btndept']))
{
				
				
			error_reporting(0);
			$adddept=$_POST['adddept'];
			$adddeptdesc=$_POST['adddeptdesc'];
			$educlevel=$_POST['educlevel'];

			$query=mysqli_query($con,"SELECT departmentdesc FROM tbldepartment WHERE departmentdesc='$adddeptdesc'");
			$num_rows=mysqli_num_rows($query);

			$query1=mysqli_query($con,"SELECT department FROM tbldepartment WHERE department='$adddept'");
			$num_rows1=mysqli_num_rows($query1);

			if($num_rows!=0 and $num_rows1==0)
			{
			echo "<script> alert('Department Description already exists!');
			history.back(); </script>";
			}
			

			elseif($num_rows==0 and $num_rows1!=0)
			{
			echo "<script> alert('Department  already exists!');
			history.back(); </script>";
			}

			elseif($num_rows!=0 and $num_rows1!=0)
			{
			echo "<script> alert('Department and Department Description already exists!');
			history.back(); </script>";

			}

				
			else
			{


			
			$account_query=mysqli_query($con,"INSERT INTO tbldepartment(department,departmentdesc,educationlevel) VALUES( '$adddept','$adddeptdesc','$educlevel')");
			if($account_query)
			{
			echo 
				"<script> alert('Successfully Added Department!');
			history.back();  </script>";


			}
			else
			{
			echo "<script> alert('Error!');
			history.back(); </script>";
			}
			}

}










elseif(isset($_POST['btngradelevel']))
{
				
			
			error_reporting(0);
			$addgradeleveldesc=$_POST['addgradelevel'];
		

			$query=mysqli_query($con,"SELECT gradeleveldesc FROM tblgradelevel WHERE gradeleveldesc = '$addgradeleveldesc'");
			$num_rows=mysqli_num_rows($query);
		
		
			if($num_rows)
			{
			echo "<script> alert('Gradelevel  already exists!');
			history.back(); </script>";
			}
			


				
			else
			{


			
			$account_query=mysqli_query($con,"INSERT INTO tblgradelevel(gradeleveldesc) VALUES( '$addgradeleveldesc')");
			if($account_query)
			{
			echo 
				"<script> alert('Successfully Added Grade Level!');
			history.back();  </script>";


			}
			else
			{
			echo "<script> alert('Error!');
			history.back(); </script>";
			}
			}

}









elseif(isset($_POST['btngradesection']))
{
				
				
			error_reporting(0);
			$addgradelevel=$_POST['addgradelevel'];
			$addsection=$_POST['addsection'];
			$adddeptgradesection=$_POST['adddeptgradesection'];





			$query_acc=mysqli_query($con,"SELECT department, educationlevel FROM tbldepartment WHERE departmentdesc = '$adddeptgradesection'");
			while($row = $query_acc -> fetch_assoc()){
			$dept = $row['department'];
			$educlevel = $row['educationlevel'];
			}





			$query=mysqli_query($con,"SELECT sectiondesc FROM tblgradesection WHERE sectiondesc = '$addsection'");
			$num_rows=mysqli_num_rows($query);
			if($num_rows)
			{
			echo "<script> alert('Section Name Already Exists!');
			history.back(); </script>";

			}

				
			else
			{


			
			$account_query=mysqli_query($con,"INSERT INTO tblgradesection(gradedesc,sectiondesc,department,departmentdesc,educationlevel) VALUES( '$addgradelevel','$addsection','$dept','$adddeptgradesection','$educlevel')");
			if($account_query)
			{
			echo 
				"<script> alert('Successfully Added Grade Level and Section!');
			history.back();  </script>";


			}
			else
			{
			echo "<script> alert('Error!');
			history.back(); </script>";
			}
			}

}











elseif(isset($_POST['btnsubject']))
{
				
			
			error_reporting(0);
			$addsubject=$_POST['addsubject'];
			$addsubjectdesc=$_POST['addsubjectdesc'];
			$addsubgradelevel=$_POST['addsubgradelevel'];

			$query=mysqli_query($con,"SELECT subject FROM tblsubject WHERE subject = '$addsubject'");
			$num_rows=mysqli_num_rows($query);
		
			$query1=mysqli_query($con,"SELECT subjectdesc FROM tblsubject WHERE subjectdesc = '$addsubjectdesc'");
			$num_rows1=mysqli_num_rows($query1);

			if($num_rows!=0 and $num_rows1==0)
			{
			echo "<script> alert('Subject  already exists!');
			history.back(); </script>";
			}
			

			elseif($num_rows==0 and $num_rows1!=0)
			{
			echo "<script> alert('Subject Description already exists!');
			history.back(); </script>";
			}

			elseif($num_rows!=0 and $num_rows1!=0)
			{
			echo "<script> alert('Subject and Subject Description already exists!');
			history.back(); </script>";

			}


				
			else
			{


			
			$account_query=mysqli_query($con,"INSERT INTO tblsubject(subject,subjectdesc,subjectgradelevel) VALUES( '$addsubject','$addsubjectdesc','$addsubgradelevel')");
			if($account_query)
			{
			echo 
				"<script> alert('Successfully Added Subject!');
			history.back();  </script>";


			}
			else
			{
			echo "<script> alert('Error!');
			history.back(); </script>";
			}
			}

}

















elseif(isset($_POST['btngradingperiod']))
{
				
			
			error_reporting(0);
			$addgradingperiod=$_POST['addgradingperiod'];
			$adddepartmentdesc=$_POST['adddepartmentdesc'];
			

			$query=mysqli_query($con,"SELECT * FROM tblgradingperiod WHERE gradingperiod = '$addgradingperiod' and department = '$adddepartmentdesc'");
			$num_rows=mysqli_num_rows($query);
		
			

			if($num_rows!=0 )
			{
			echo "<script> alert('Grading Period is already exists in department you selected.');
			history.back(); </script>";
			}
			


				
			else
			{


			
			$account_query=mysqli_query($con,"INSERT INTO tblgradingperiod(gradingperiod,department) VALUES( '$addgradingperiod','$adddepartmentdesc')");

			if($account_query)
			{
			echo 
				"<script> alert('Successfully Added Grading Period!');
			history.back();  </script>";


			}
			else
			{
			echo "<script> alert('Error!');
			history.back(); </script>";
			}
			}

}


elseif(isset($_POST['btnstudentdetail']))
{
				



			



		
			error_reporting(0);
			$studentid=$_POST['studentid'];
			$addstudentdetailgradesection=$_POST['addstudentdetailgradesection'];
			$addstudentdetailschoolyear=$_POST['addstudentdetailschoolyear'];

	



			$query=mysqli_query($con,"SELECT * FROM tblgradesection WHERE gradesectionid = '$addstudentdetailgradesection'");
		
			while($rowgradesection = mysqli_fetch_array($query))
			{
			   $gradedesc=$rowgradesection['gradedesc'];
			   $sectiondesc=$rowgradesection['sectiondesc'];
			}


			
			$querydetails=mysqli_query($con,"SELECT * FROM tblstudentsdetail WHERE studentid = '$studentid' and schoolyear = '$addstudentdetailschoolyear'");
			while($rowsy = mysqli_fetch_array($querydetails))
			{
			   $sy=$rowsy['schoolyear'];
			}

			
		
			$gradesection=$gradedesc."-".$sectiondesc;
			if($sy!=$addstudentdetailschoolyear)
			{

				$account_query=mysqli_query($con,"INSERT INTO tblstudentsdetail(gradesection,schoolyear,studentid,gradelevel) VALUES('$gradesection','$addstudentdetailschoolyear','$studentid',$gradedesc)");
				if($account_query)
				{
				echo 
					"<script> alert('Student successfully enrolled! You may now assign the subjects');
				history.back();  </script>";
	
	
				}
				else
				{
				echo "<script> alert('Error!');
				history.back(); </script>";
				}
				


			}

		





		else if($sy==$addstudentdetailschoolyear){

			
			echo 
			"<script> alert('Students is already enrolled in this School Year.');
			history.back();  </script>";



				

			


		}

	

}




elseif(isset($_POST['btnteacherdetail']))
{
						
			error_reporting(0);
			$facultyid=$_POST['facultyid'];		
			$addteacherdetailschoolyear=$_POST['addteacherdetailschoolyear'];		
			$querydetails=mysqli_query($con,"SELECT * FROM tblteacherdetail WHERE facultyid = '$facultyid' and schoolyear = '$addteacherdetailschoolyear'");
			while($rowsy = mysqli_fetch_array($querydetails))
			{
			   $sy=$rowsy['schoolyear'];
			}					
			if($sy!=$addteacherdetailschoolyear)
			{
				$account_query=mysqli_query($con,"INSERT INTO tblteacherdetail(schoolyear,facultyid) VALUES('$addteacherdetailschoolyear','$facultyid')");
				if($account_query)
				{
				echo 
					"<script> alert('School Year added to the Faculty. You may assign the Subject.'); history.back();  </script>";
				}
				else
				{
				echo "<script> alert('Error!');
				history.back(); </script>";
				}			
			}
		else if($sy==$addteacherdetailschoolyear){
			echo 
			"<script> alert('Faculty is already enrolled in this School Year.');
			history.back();  </script>";
		}	
}






elseif(isset($_POST['btnparentdetail']))
{
						
			error_reporting(0);
			$parent=$_POST['parent'];		
			$addstudent=$_POST['addstudent'];	
			
			
			$querydetails=mysqli_query($con,"SELECT * FROM tblparentdetail WHERE username = '$parent' and studentid = '$addstudent'");
			while($rowparent = mysqli_fetch_array($querydetails))
			{
			   $stud=$rowparent['studentid'];
			}					
			if($stud!=$addstudent)
			{
				$account_query=mysqli_query($con,"INSERT INTO tblparentdetail(username,studentid) VALUES('$parent','$addstudent')");
				if($account_query)
				{
				echo 
					"<script> alert('Successfully added to the Parent Records.'); history.back();  </script>";
				}
				else
				{
				echo "<script> alert('Error!');
				history.back(); </script>";
				}			
			}
		else if($stud==$addstudent){
			echo 
			"<script> alert('Student already selected!');
			history.back();  </script>";
		}	
}









elseif(isset($_POST['btnsaveinfoadmin']))
{
				
			error_reporting(0);
		
			$admin=$_POST['admin'];
			$lname=$_POST['lname'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$gender=$_POST['gender'];
			$birthdate=$_POST['birthdate'];
			
			$contact=$_POST['contact'];
			$email=$_POST['email'];
		
		
		


		

			$admin_query=mysqli_query($con,"UPDATE `tblaccount` SET `firstname`='$fname',`lastname`='$lname',`middlename`='$mname',`gender`='$gender',`birthdate`='$birthdate',`contactnumber`='$contact',`email`='$email' WHERE username='$admin'");
			

			
			
				if($admin_query)
					{
					echo 
						"<script> alert('Successfully Added Info!');
					history.back();  </script>";


					}
					else
					{
					echo "<script> alert('Error!');
					history.back(); </script>";
					}
			

		
}


















elseif(isset($_POST['btnsaveinfostudent']))
{
				
			error_reporting(0);
			$studentid=$_POST['studentidno'];
			$lrn=$_POST['lrn'];
			$lname=$_POST['lname'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$gender=$_POST['gender'];
			$birthdate=$_POST['birthdate'];
			$birthplace=$_POST['birthplace'];
			$religion=$_POST['religion'];
			$contact=$_POST['contact'];
			$email=$_POST['email'];
			$status=$_POST['status'];
			$nationality=$_POST['nationality'];
			$address=$_POST['address'];


		

			$account_query=mysqli_query($con,"UPDATE `tblstudents` SET `firstname`='$fname',`lastname`='$lname',`middlename`='$mname',`lrn`='$lrn',`gender`='$gender',`birthdate`='$birthdate',`birthplace`='$birthplace',`religion`='$religion',`contact`='$contact',`email`='$email',`civilstatus`='$status',`nationality`='$nationality',`address`='$address' WHERE studentid='$studentid'");
			

			
			
				if($account_query)
					{
					echo 
						"<script> alert('Successfully Added Info!');
					history.back();  </script>";

					}
					else
					{
					echo "<script> alert('Error!');
					history.back(); </script>";
					}
			

		
}





// elseif(isset($_POST['btnsaveinfoteacher']))
// {
				
// 			error_reporting(0);
// 			$facultyid=$_POST['facultyidinfo'];
// 			$facultypass=$_POST['facultypass'];
// 			$lname=$_POST['lname'];
// 			$fname=$_POST['fname'];
// 			$mname=$_POST['mname'];
// 			$gender=$_POST['gender'];
// 			$birthdate=$_POST['birthdate'];
// 			$birthplace=$_POST['birthplace'];
// 			$religion=$_POST['religion'];
// 			$contact=$_POST['contact'];
// 			$email=$_POST['email'];
// 			$status=$_POST['status'];
// 			$nationality=$_POST['nationality'];
// 			$address=$_POST['address'];


		
// 			$password_hash=md5(md5("sdfkjk3".$facultypass."2dfv8b"));

// 			$account_query=mysqli_query($con,"UPDATE `tblteacher` SET `password`='$password_hash', `firstname`='$fname',`lastname`='$lname',`middlename`='$mname',`gender`='$gender',`birthdate`='$birthdate',`birthplace`='$birthplace',`religion`='$religion',`contact`='$contact',`email`='$email',`civilstatus`='$status',`nationality`='$nationality',`address`='$address' WHERE facultyid='$facultyid'");
			

			
			
// 				if($account_query)
// 					{
// 					echo 
// 						"<script> alert('Successfully Added Info!');
// 					history.back();  </script>";


// 					}
// 					else
// 					{
// 					echo "<script> alert('Error!');
// 					history.back(); </script>";
// 					}
			

		
// }











elseif(isset($_POST['btnsaveinfoparent']))
{
				
			error_reporting(0);
			$username=$_POST['parent'];
			
			$lname=$_POST['lname'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			
			$birthdate=$_POST['birthdate'];
			
			
			$contact=$_POST['contact'];
			$email=$_POST['email'];
		
			
			$address=$_POST['address'];


		

			$account_query=mysqli_query($con,"UPDATE `tblparent` SET `firstname`='$fname',`lastname`='$lname',`middlename`='$mname',`birthdate`='$birthdate',`contactno`='$contact',`email`='$email',`address`='$address' WHERE username='$username'");
			

			
			
				if($account_query)
					{
					echo 
						"<script> alert('Successfully Added Info!');
					history.back();  </script>";


					}
					else
					{
					echo "<script> alert('Error!');
					history.back(); </script>";
					}
			

		
}










elseif(isset($_POST['btnsaveinfoteacher']))
{
				
			error_reporting(0);
			$facultyid=$_POST['facultyidinfo'];
		
			$lname=$_POST['lname'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$gender=$_POST['gender'];
			$birthdate=$_POST['birthdate'];
			$birthplace=$_POST['birthplace'];
			$religion=$_POST['religion'];
			$contact=$_POST['contact'];
			$email=$_POST['email'];
			$status=$_POST['status'];
			$nationality=$_POST['nationality'];
			$address=$_POST['address'];


			

			$account_query=mysqli_query($con,"UPDATE `tblteacher` SET  `firstname`='$fname',`lastname`='$lname',`middlename`='$mname',`gender`='$gender',`birthdate`='$birthdate',`birthplace`='$birthplace',`religion`='$religion',`contact`='$contact',`email`='$email',`civilstatus`='$status',`nationality`='$nationality',`address`='$address' WHERE facultyid='$facultyid'");
			

			
			
				if($account_query)
					{
					echo 
						"<script> alert('Successfully Added Info!');
					history.back();  </script>";


					}
					else
					{
					echo "<script> alert('Error!');
					history.back(); </script>";
					}
			

		
}








// ------------------------------------change password in admin users-------------------------------------

elseif(isset($_POST['btnchangepassadmin']))
{
				
			error_reporting(0);
			$adminid=$_POST['adminid'];
			$currentpass=$_POST['currentpass'];
			$pass=$_POST['pass1'];			
			$repass=$_POST['pass2'];



			$currentpassword_hash=md5(md5("sdfkjk3".$currentpass."2dfv8b"));	

			$password_hash=md5(md5("sdfkjk3".$pass."2dfv8b"));

			$query=mysqli_query($con,"SELECT * FROM tblaccount WHERE username='$adminid'");
			while($fetch = mysqli_fetch_assoc($query))
			{
				$existingpassword=$fetch['password'];
			}




			if($pass!= $repass)
					{
					echo "<script> alert('New Password and Repeat New Password do not match!');
					history.back(); </script>";
						return false;
					}


			else{					
				
			

					if($currentpassword_hash == $existingpassword){		

							if($password_hash == $existingpassword){
								echo "<script> alert('New password cannot be the same as your old password! ');
								history.back(); </script>";
							}


							else{
							$account_query=mysqli_query($con,"UPDATE `tblaccount` SET `password`='$password_hash' WHERE username='$adminid'");													
									if($account_query)
										{
										echo 
											"<script> alert('Successfully change Password!');
										history.back();  </script>";	
										}
									else
										{
										echo "<script> alert('Error!');
										history.back(); </script>";
										}
							}	
					}




					else{
						 echo "<script> alert('Current Password do not match! ');
						 history.back(); </script>";				
					}
		
				}
			

		
}



elseif(isset($_POST['btnchangepassteacher']))
{
				
	error_reporting(0);
	$facultyid=$_POST['facultyid'];
	$currentpass=$_POST['currentpass'];
	$pass=$_POST['pass1'];			
	$repass=$_POST['pass2'];



	$currentpassword_hash=md5(md5("sdfkjk3".$currentpass."2dfv8b"));	

	$password_hash=md5(md5("sdfkjk3".$pass."2dfv8b"));

	$query=mysqli_query($con,"SELECT * FROM tblteacher WHERE facultyid='$facultyid'");
	while($fetch = mysqli_fetch_assoc($query))
	{
		$existingpassword=$fetch['password'];
	}




	if($pass!= $repass)
			{
			echo "<script> alert('New Password and Repeat New Password do not match!');
			history.back(); </script>";
				return false;
			}


	else{					
		
	

			if($currentpassword_hash == $existingpassword){		

					if($password_hash == $existingpassword){
						echo "<script> alert('New password cannot be the same as your old password! ');
						history.back(); </script>";
					}


					else{
					$account_query=mysqli_query($con,"UPDATE `tblteacher` SET `password`='$password_hash' WHERE facultyid='$facultyid'");													
							if($account_query)
								{
								echo 
									"<script> alert('Successfully change Password!');
								history.back();  </script>";	
								}
							else
								{
								echo "<script> alert('Error!');
								history.back(); </script>";
								}
					}	
			}




			else{
				 echo "<script> alert('Current Password do not match! ');
				 history.back(); </script>";				
			}

		}
	


		
}








elseif(isset($_POST['btncontrol']))
{
				
			error_reporting(0);
			$addschoolyear=$_POST['addschoolyear'];								
			$addgradingperiod=$_POST['addgradingperiod'];
		
			
			$status="Inactive";
			$querycontrol=mysqli_query($con,"SELECT * FROM tblcontrol where schoolyear = '$addschoolyear' and gradingperiod ='$addgradingperiod' ");
			while($rowcontrol = mysqli_fetch_array($querycontrol))
			{
			   $gradingperiod=$rowcontrol['gradingperiod'];

			}

			
		

			if($addgradingperiod!=$gradingperiod)
			{



			$account_query=mysqli_query($con,"INSERT INTO tblcontrol(schoolyear,gradingperiod,status) VALUES('$addschoolyear','$addgradingperiod','$status')");

			
			
				if($account_query)
					{
					echo 
						"<script> alert('Successfully Added!');
					history.back();  </script>";


					}
					else
					{
					echo "<script> alert('Error!');
					history.back(); </script>";
					}
			

			}

			else if($addgradingperiod==$gradingperiod){

			
				echo 
				"<script> alert('Grading Period is Already exist in this School Year!');
				history.back();  </script>";
	
	
	
					
	
				
	
	
			}


}














elseif(isset($_POST['btncontrolstatus']))
{

	error_reporting(0);
	$upschoolyear=$_POST['schoolyear'];								
	$upgradingperiod=$_POST['gradingperiod'];
	$upstatus=$_POST['status'];


	$statusquery=mysqli_query($con,"UPDATE `tblcontrol` SET `status`='$upstatus'   WHERE schoolyear='$upschoolyear' and gradingperiod='$upgradingperiod'");
			
	if($statusquery)
					{
					echo 
						"<script> alert('Status Changed!');
					history.back();  </script>";


					}
					else
					{
					echo "<script> alert('Error!');
					history.back(); </script>";
					}
			

}













elseif(isset($_POST['btncontroldateduration']))
{

	error_reporting(0);
	$upschoolyear=$_POST['schoolyear'];								
	$upgradingperiod=$_POST['gradingperiod'];
	$addstartdate=$_POST['addstartdate'];
	$addenddate=$_POST['addenddate'];


	$statusquery=mysqli_query($con,"UPDATE `tblcontrol` SET `datestart`='$addstartdate' , `dateend`='$addenddate' WHERE schoolyear='$upschoolyear' and gradingperiod='$upgradingperiod'");
			
	if($statusquery)
					{
					echo 
						"<script> alert('Date Duration Update!');
					history.back();  </script>";


					}
					else
					{
					echo "<script> alert('Error!');
					history.back(); </script>";
					}
			

}





?>
                        