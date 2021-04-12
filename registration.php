
<?php
require_once('config.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Registration with php</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  </head>
  <body style="background-image: url(Images/signUp.jpg);background-size: cover;background-attachment: fixed;">


     <div class="" style="text-align: center;margin-left:510px;margin-top:-30px;">
       <form class="" action="registration.php" method="post">
         <div class="container" >
           <div class="row" >
           <div class="col-sm-5" style="background-color:black;opacity:0.8;" >
           <br><br>
           <h1 style="color:white;">Registration</h1>
              <p style="color:white;">Fill up the form with correct Values.</p>
              <hr class="mb-3">
              <label for="firstname" style="color:white;">Firstname</label>
              <input class="form-control" type="text" id="firstname" name="firstname" value="" required>

              <label for="lastname" style="color:white;">Lastname</label>
               <input class="form-control" type="text" id="lastname" name="lastname" value="" required>

              <label for="email" style="color:white;">Email</label>
              <input class="form-control"  type="email" id="email" name="email" value="" required>

              <label for="phonenumber" style="color:white;">Phone Number</label>
              <input class="form-control" type="text" id="phonenumber" name="phonenumber" value="" required>

              <label for="password" style="color:white;">Password</label>
              <input class="form-control" type="password" id="password" name="password" value="" required>
             <hr class="mb-3">
              <input class="btn btn-dark" type="submit" id="register" name="create" value="Sign Up">
              <br><br>
              <p style="color:white;">Already have an account? &nbsp<a href="login.php">login here</a></p>
            </div>

           </div>

         </div>


       </form>

     </div>

     <!-- jquery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
$(function(){
  $('#register').click(function(e){

    var valid = this.form.checkValidity();
    if (valid) {

      var firstname   = $('#firstname').val();
      var lastname    = $('#lastname').val();
      var email       = $('#email').val();
      var phonenumber = $('#phonenumber').val();
      var password    = $('#password').val();

      if(/\d/.test(firstname)){
        alert("First name contains numeric value");
        return;
      }

      if(/\d/.test(lastname)){
        alert("Last name contains numeric value");
        return;
      }
      if(email.startsWith('@') || !email.includes(".com")){
        alert("Email invalid");
        return;
      }


      if(!(/^\d+$/.test(phonenumber))){
        alert("Phone Number invalid");
        return;
      }


      e.preventDefault();

       $.ajax({
        type:'POST',
        url:'process.php',
        data:{firstname:firstname,lastname:lastname,email:email,phonenumber:phonenumber,password:password},
        success: function(data){
          swal.fire({
            'title':'Successful',
            'text':data,
            'type':'success'
             })
        },
        error: function(data){
          swal.fire({
            'title':'Errors',
            'text':'There were errors while saving the data.',
            'type':'error'
             })
        }

      });

    }else {

    }


  });
  // alert('Hello.');

});


</script>

  </body>
</html>
