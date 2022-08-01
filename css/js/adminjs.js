
            function toggle(){

                var editpopup = document.getElementById('editpopup');
                editpopup.classList.toggle('active')
    
    
                }
                    
           
            
                function myFunction1() {
                    var x = document.getElementById("myInput1");
                    if (x.type === "password") {
                      x.type = "text";
                    } else {
                      x.type = "password";
                    }
                  } 
                   
                function myFunction2() {
                    var x = document.getElementById("myInput2");
                    if (x.type === "password") {
                      x.type = "text";
                    } else {
                      x.type = "password";
                    }
                  } 

                function myFunction3() {
                    var x = document.getElementById("myInput3");
                    if (x.type === "password") {
                      x.type = "text";
                    } else {
                      x.type = "password";
                    }
                  } 
    
                // function viewdata(){
                  
                //         $.ajax({
                //             url: 'fetch/datasubjectlist.php',
                //             type: 'GET',
                //             success: function(data){
                //                 $('tbody').html(data)
                //             }
                //         })
                   
                //     }
                //     $('#checkall').change(function(){
                //         $('.checkitem').prop("checked", $(this).prop("checked"))
                //     })
             


    
                $(document).ready(function() {
                $('#password1,#confirmpassword1').on('keyup',function(){
                if($('#password1').val()==$('#confirmpassword1').val()){
                $('#message1').html('Password Match!').css('color','green');
                }
                else{
                $('#message1').html('Password do not Match!').css('color','Red');
                }
                });
                });
    
                $(document).ready(function() {
                $('#password2,#confirmpassword2').on('keyup',function(){
                if($('#password2').val()==$('#confirmpassword2').val()){
                $('#message2').html('Password Match!').css('color','green');
                }
                else{
                $('#message2').html('Password do not Match!').css('color','Red');
                }
                });
                });
    
                $(document).ready(function() {
                $('#password3,#confirmpassword3').on('keyup',function() {
                if($('#password3').val()==$('#confirmpassword3').val()){
                $('#message3').html('Password Match!').css('color','green');
                }
                else{
                $('#message3').html('Password do not Match!').css('color','Red');
                }
                });
                });



                
    
    
 