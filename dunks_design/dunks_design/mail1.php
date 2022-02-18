<?php
  	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="dunks";
	$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 
       $name = $_POST['name']; // Get Name value from HTML Form
        $mobile = $_POST['mobile']; // Get Email Value
        $email = $_POST['email']; // Get Mobile No
        $msg = $_POST['comment']; // Get Message Value
         
       $sql = "INSERT INTO `inquiry1` (`name`, `mobile`, `email`, `comment`)  
	VALUES ('$name','$mobile','$email','$msg')";
	
	 if ($conn->query($sql) === TRUE) 
	   
	   
	{
	    
		header('Location:Contact.php?x=1');
		
		
	}
    else
	{
		 echo "<script>$('#pmd-title-dialog1').modal('show')</script>";
	}
		
?>
