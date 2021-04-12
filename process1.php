
<?php
require_once('config.php');
 ?>

<?php
if(isset($_POST)){

  $Fname     =  $_POST['Fname'];
  $email     =  $_POST['email'];
  $Pnum      =  $_POST['Pnum'];
  $Postal    =  $_POST['Postal'];
  $model     =  $_POST['model'];
  $pay       =  $_POST['pay'];

  $sql = "INSERT INTO orders(Fname,email,Pnum,Postal,model,pay) VALUES (?,?,?,?,?,?)";
  $stmtinsert = $db -> prepare($sql);
  $result = $stmtinsert -> execute ([$Fname,$email,$Pnum,$Postal,$model,$pay]);
  if ($result){
   echo "Order Placed Sucessfully";
   header("lastpg.html");
   
  }else{
    echo "There were errors while saving a data.";
  }

}else {
  echo "No Data";
}
 ?>
