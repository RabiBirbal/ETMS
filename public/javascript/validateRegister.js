$(document).ready(function(){
            $('#phone').keyup(function(){
              var phone=$('#phone').val();
              if(isNaN(phone)){
                $('#showErrorPhone').html('Password must be a number');
                 $('#showErrorPhone').css('color','red');
                return false;
              }
              else{
                $('#showErrorPhone').html('');
                return true;
              }
            });

            $('#pswd').keyup(function(){
              var pswd=$('#pswd').val();
              if(pswd.length>15){
                $('#showErrorpswd').html('Password must be less than 16 characters');
                 $('#showErrorpswd').css('color','red');
                 return false;
              }
              else if(pswd.length<6){
                $('#showErrorpswd').html('Password must be greater than 6 characters');
                 $('#showErrorpswd').css('color','red');
                 return false;
              }
              else{
                $('#showErrorpswd').html('');
                 return true;
              }
            });

            $('#cpswd').keyup(function(){
              var pswd=$('#pswd').val();
              var cpswd=$('#cpswd').val();

              if(cpswd!=pswd){
                $('#showErrorcpswd').html('Password didn not matched');
                 $('#showErrorcpswd').css('color','red');
                 return false;
              }
              else{
                $('#showErrorcpswd').html('');
                 return true;
              }
            });
          });