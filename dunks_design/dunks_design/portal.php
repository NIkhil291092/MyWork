<?php
session_start();
include_once"dbc.php";
?>
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
			p
			{
				 margin-top:-10px;
				 font-size: 1vw;
							 
							 
			}
			.box
			{
			     padding:25px;
			}
			.shad
			{
			     box-shadow:5px 5px 5px 5px #cacc93;
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
					     <a class="nav-link font-weight-bold  " href="#" > <?php   echo "welcome " .$_SESSION['se1']."<br>"?> ;
					     </a>
				     </li>
			     </ul>		   
		 </nav>

<?php
     $gen="";
     $sql="select Gender from personal where email='$_SESSION[se1]'";
	 $result=$conn->query($sql);
			  
	while($row=$result->fetch_assoc())
	    {
		     $gen=  $row["Gender"];
				
		}
	if($gen=='male')
		{
		if(isset($_GET['page']))
			{
			     $page=$_GET['page'];
					 
				 $page=mysqli_real_escape_string($conn,$page);
				 $page=htmlentities($page);
			}
			else
			{
			 $page=1;
			}

		$query1="select Name,Email, Image1,Height,Weight,  Bio, Social,Father_name,Mother_name,No_of_sibling,Hobbies,Alcoholic,Food,Annual_income from personal p , image i, bio b,famil f,preference pr,profectional po where p.User_id=i.User_id 
		 and b.User_id=p.User_id and f.User_id=p.User_id and pr.User_id=p.User_id and po.User_id=p.User_id and Gender='female' ";
		 $res=$conn->query($query1);
		 $count=$res->num_rows;
		 $per_page=2;
		 $no_of_page=ceil($count/$per_page);
		 $start=($page-1)*$per_page;
		 $query1="select Name,Email, Image1,Height,Weight,  Bio, Social,Father_name,Mother_name,No_of_sibling,Hobbies,Alcoholic,Food,Annual_income from personal p , image i, bio b,famil f,preference pr,profectional po where p.User_id=i.User_id 
		 and b.User_id=p.User_id and f.User_id=p.User_id and pr.User_id=p.User_id and po.User_id=p.User_id and Gender='female' LIMIT $start,$per_page";
		 $res=$conn->query($query1);
         if($res->num_rows > 0)
			 {
				 
                while($x=$res->fetch_assoc())
                 {
					 
    ?>
		      	
		
	  
                 					 
		 <div class="container box" >		     
		    <div class="row shad">
				 <div class="col-sm-2.5" >
					<a class="" href="Detail.php"> <img src="<?php echo 'data:image/jpg;charset=utf8;base64,'.base64_encode($x['Image1']);?>" width="240" height="320">
                    </a>
				</div>
		                
			     <div class="col-sm-7">         
				     <h3 class="" style="padding:10px;"><?php	echo $x['Name'];?><hr></h3>
                     <p style="padding-bottom:15px; padding-left:10px; margin-top:-25px;"><?php echo $row['Bio'];?>						  
					 </p>
					 <hr>
					<div class="row">
						<div class="col-xl-4">
						     <p class=""  >Height:   <?php echo $x['Height']; ?></p>	
							 <p class=""> Weight:  <?php echo $x['Weight']; ?></p>	 
							<p class="">Father:    <?php echo $x['Father_name']; ?></p><hr>
                        </div>	
                        <div class="col-xl-3">										 				 	
							 <p class="">Mother:    <?php echo $x['Mother_name']; ?></p>	
							 <p class="">No-of-Sibling:  <?php echo $x['No_of_sibling']; ?></p>
							 <p class="">Hobbies:   <?php echo $x['Hobbies']; ?></p>	
							 <p class="">Annual_income:   <?php echo $x['Annual_income']; ?></p><hr>
                        </div>										 
						<div class="col-xl-4">	
							 <p class="">Alcoholic:  <?php echo $x['Alcoholic']; ?></p>
							 <p class="">Food  <?php echo $x['Food']; ?></p>	
							 <p class="" style="font-size-adjust:.58;">Social:   <?php echo $x['Social']; ?></p><hr>
						</div>
					</div>
				</div>
							 
				<div class="col-sm-2.5 ">
					<div class="row">
					     <div class="col">
                     		<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#modalQuickView2" style="margin-top:100px;">See More</button></div>
								 <div class="col">
								      <button type="button" class="btn btn-danger " style="margin-top:100px;" >Connect</button>
								 </div>
						 </div>
					</div>
			</div>	 
	     </div>
						 
				  
				      
                     					 
				 
                 <?php                   
                   }
                 ?>
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li  class="page-item"<?php if($page==1) echo "class='disabled'"; ?> >
					<a class="page-link" href="portal.php?page=<?php echo $page-1; ?>">Previous
					</a>
				</li>
		     <?php
		    for($i=1;$i<=$no_of_page;$i++)
				{
					
		     ?>
			     <li class="page-item" <?php if($page==$i) echo "class='active'";?>>
					<a  class="page-link" href="portal.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
			 <?php
			}
			?>
				<li  class="page-item" <?php if($page==$no_of_page) echo "class='disabled'";?>>
					<a  class="page-link" href="portal.php?page=<?php echo $page+1;?>">next
					</a>
				</li>
				   
			</ul>

<?php
}
else
{
    header("Location: portal.php?page=1");
}   
			 }
			 
			 
?>
       


         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
		 <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
     </body>
</html>