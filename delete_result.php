<?php
$conn=mysqli_connect("localhost","root","","drive");
if(isset($_GET["slno"])){
   $slno=$_GET["slno"];     
  $sql="DELETE FROM `results` WHERE slno = $slno ";
  $run=mysqli_query($conn,$sql);
  if($run)
  {
          echo"record deleted";
          header("location:admin_res.php");
  }  
  else{
          echo"something went wrong";
  }
}
?>

