<?php
require_once('config.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PayForm</title>
    <link rel="stylesheet" href="Payform.css">
  </head>
  <body>

    <form class="" action="index.html" method="post" onsubmit="return verify()">

      <div class="div1">
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <span class="had3" style="color:white;">Proceed to Pay</span>

      <div class="div2">

      <h2 class="had1" style="color:white;">Full Name</h2>
      <table>
        <tr>
       <td>
       <input class="inp1" type="text" name="Fname" style="width:245px;height:25px;font-weight:bold;" value="" placeholder="Enter Your Name" id="Fname" required>
       </td>
       </tr>
     </table>
     <table>
       <h2 class="had1" style="color:white;">E-mail</h2>
         <tr>
         <td>
         <input class="inp2" type="email" name="email" style="width:245px;height:25px;font-weight:bold;" value="" placeholder="abc111@gmail.com" id="email" required readonly>
         </td>
        </tr>
    </table>

    <table>
      <h2 class="had1" style="color:white;">Contact Number</h2>
       <tr>
         <td>
         <input class="inp3" type="text" name="Pnum" style="width:245px;height:25px;font-weight:bold;" value="" placeholder="0300-0000000" id="Pnum" required>
         </td>
       </tr>
   </table>
   <table>
  <h2 class="had1" style="color:white;">Postal Address</h2>
  <tr>
    <td>
      <textarea class="inp5" name="Postal" rows="4" cols="70" placeholder="House# Street# Colony" id="Postal" style="font-weight:bold;" required></textarea>

    </td>
  </tr>
 </table>

 <table>
   <h2 class="had1" style="color:white;">Mobile Name</h2>
   <tr>
     <td>
     <input class="inp5" type="text" name="model" style="width:245px;height:25px;font-weight:bold;" value="" placeholder="Mobile Name" id="model" required readonly>
     </td>
   </tr>
  </table>

 <table>
   <h2 class="had1" style="color:white;">Total Payment</h2>
   <tr>
     <td>
     <input class="inp5" type="text" name="pay" style="width:245px;height:25px;font-weight:bold;" value="" placeholder="Cash on Dilivery" id="pay" required readonly>
     </td>
   </tr>
  </table>

<br>
<button class="btn" id="reg" type="submit" name="submit">Place Order</button>

</div>
   </div>
</form>
<script type="text/javascript">

  var x = 0;
  window.onload = function() {


  var ses = sessionStorage.getItem('key');
  var res = ses.split("#");

  var x1 = sessionStorage.getItem('email');
  document.getElementById("pay").value = res[0];
  document.getElementById("model").value = res[1];




  document.getElementById("email").value = x1;



};
  </script>


<!-- jquery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">

$(function(){
$('#reg').click(function(e){
  var Fname    = $('#Fname').val();
  var email    = $('#email').val();
  var Pnum     = $('#Pnum').val();
  var Postal   = $('#Postal').val();
  var model    = $('#model').val();
  var pay      = $('#pay').val();

  if(/\d/.test(Fname)){
    alert("Full name contains numeric value");
    return;
  }

  if(email.startsWith('@') || !email.includes(".com")){
    alert("Email invalid");
    return;
  }


  if(!(/^\d+$/.test(Pnum))){
    alert("Phone Number invalid");
    return;
  }





var valid = this.form.checkValidity();
if (valid) {

 e.preventDefault();

  $.ajax({
   type:'POST',
   url:'process1.php',
   data:{Fname:Fname,email:email,Pnum:Pnum,Postal:Postal,model:model,pay:pay},
   success: function(data){
     swal.fire({
       'title':'Successful',
       'text':data,
       'type':'success'
        }).then(function() {
            window.location = "lastpg.html";
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

} else {

}


});
// alert('Hello.');

});


  </script>
  </body>
</html>
