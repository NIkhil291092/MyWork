<?php
Session_start();
include_once "dbc.php";

if(isset($_POST['Login']));
   $t1=$_POST['t1'];
   $t2=$_POST['t2'];
   $sql="select * from personal where email='$t1' and Password='$t2'";
    
    $result=$conn->query($sql);
   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
       $_SESSION['se1']=$t1;
	   header('location:portal.php');
}
   }
 else {
  header('location:login.php');
}
$conn->close();
?>
  
   
    