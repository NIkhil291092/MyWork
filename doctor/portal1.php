<html>
     <head>
	     <title>Dashboard</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		  <style>
		     .topnav
			 {
				 background-color:red;
			 }
		  </style>
     </head>
	 <body>
	     <nav class="navbar navbar-expand-lg navbar-light topnav">
		     <a class="navbar-brand" href="#"><img class="img-thumbnail" src="images/logo/logo_transparent.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
					<span class="navbar-toggler-icon"></span>
				  </button>
		     
		     <div class="collapse navbar-collapse " id="main_nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item "> <a class="nav-link font-weight-bold" href="index.html">About </a> </li>
					<li class="nav-item"><a class="nav-link font-weight-bold" href="about.html"> Match  </a></li>
					
					<li class="nav-item dropdown" >
					   <a class="nav-link font-weight-bold  " href="#" >search </a>
					   </li>
					   <li class="nav-item dropdown" >
					   <a class="nav-link font-weight-bold  " href="#" > <?php   session_start();echo "welcome " .$_SESSION['se1']."<br>" ;
					   ?></a>
					   </li>
			     </ul>		   
		 </nav>
	 
	     
	 
	 
	 
	 
	 
	     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
			
       
		 
		   <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
	 </body>
</html>



<?php
     
	 
	  $gen;
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "metrimonial";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
         $sql="select Gender from personal where email='$_SESSION[se1]'";
		     $result=$conn->query($sql);
			  
			 while($row=$result->fetch_assoc())
			 {
				$gen=  $row["Gender"];
				
			 }
			 if($gen==='male')
			 {
				 $query1="select Name,Email, Image1 from personal p , image i where p.User_id=i.User_id and Gender='female'";
				 $result1=$conn->query($query1);
				 
			
				 
				  while($row=$result1->fetch_assoc())
			 {
		      ?>	
                  <!DOCTYPE html> 
				<html> 
					<head> 
						<title>  </title> 
					</head> 
					<body> 
					<table align="center" border="1px" style="width:600px; line-height:40px;"> 
					<tr> 
						<th colspan="4"><h2> Record</h2></th> 
						</tr> 
							  
							  <th> Name </th> 
							  <th> Email </th> 
							  <th> Image </th> 
							  
						</tr> 
                    <tr>
                    <td><?php	echo $row['Name'];?></td>				
				     <td><?php echo $row['Email'];?></td>   
				     <td> <img src="<?php echo 'data:image/jpg;charset=utf8;base64,
                  '.base64_encode($row['Image1']);?>" width="250px"></td>
               <?php                   
			 }
				 
			 }
			 else{
				 
				  $query2="select Name,Email from personal p ,image i  where p.User_id=i.User_id and Gender='male'";
				 $result2=$conn->query($query2);
				  while($row=$result2->fetch_assoc())
			 {
				   echo"name : " .$row['Name'].  " email : " .$row['Email']."<br>";
			 }
			 }
			 

?>
<?php
session_destroy();
?>