<?php


     $servername = "localhost";
$username = "root";
$password = "";
$dbname = "dunks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
     

 
       $name = $_POST['name']; // Get Name value from HTML Form
        $email = $_POST['email']; // Get Email Value
        $mobile = $_POST['mobile']; // Get Mobile No
        
         
       $sql = "INSERT INTO `modal` (`name`, `email`, `mobile`)  
	VALUES ('$name','$email','$mobile')";
	
	   if ($conn->query($sql) === TRUE) 
	   
	   
	{
		header('Location:confirm.html');
		
		
	}
    else
	{
		 echo "<script>$('#pmd-title-dialog1').modal('show')</script>";
	}
	$conn->close();	
?>