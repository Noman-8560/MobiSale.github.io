

<?php
session_start();
if(isset($_SESSION['Project'])){
  header("Location: Home.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Login with php</title>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css" integrity="sha384-50oBUHEmvpQ+11W4y57PTFmhCaXp0ML5d60M1M7uH2+nqU1vzIebhnd0Jk28anvf" crossorigin="anonymous"> -->

  </head>

  <body style="background-image: url(Images/login1.jpg);background-size: cover;background-attachment: fixed;">


     <div class="" style="text-align: center;margin-left:490px;margin-top:90px;">
       <form>
         <div class="container">
           <div class="row">
           <div class="col-sm-5" style="background-color:black;opacity:0.8;">
             <br><br>
           <h1 style="color:white;">login</h1>
              <p style="color:white;">Fill up the form with correct Values.</p>
              <hr class="mb-3">

              <label for="email" style="color:white;">Email</label>
              <input class="form-control"  type="text" id="username" name="username" value="" required>

              <label for="password" style="color:white;">Password</label>
              <input class="form-control" type="password" id="password" name="password" value="" required>

             <hr class="mb-3">

              <input class="btn btn-dark" type="submit" id="login" name="create" value="Login">
              <br><br>
              <p style="color:white;">For Registartion &nbsp<a href="registration.php">Click here</a>
              </p>
              <br><br><br>

            </div>
           </div>
         </div>
       </form>
     </div>

<!-- jquery -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
  $('#login').click(function(e){
    var valid = this.form.checkValidity();
    var username = $('#username').val();
    var password = $('#password').val();

    sessionStorage.setItem('email', username);

    if (!valid){
      return;
    }

    if(username.startsWith('@') || !username.includes(".com")){
      alert("Email invalid");
      return;
    }
    e.preventDefault();

  			$.ajax({
  				type: 'POST',
  				url: 'jslogin.php',
  				data:  {username: username, password: password},
  				success: function(data){
  					//alert(data);
  					if($.trim(data) === "1"){
  						setTimeout(' window.location.href =  "Home.php"', 1000);
  					}
  				},
  			   	error: function(data){
  					alert('there were erros while doing the operation.');
  				}
  			});

  		});
  	});
  </script>
  </body>
</html>
