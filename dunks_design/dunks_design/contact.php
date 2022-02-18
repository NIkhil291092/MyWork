<!DOCTYPE html>
<html>
     <head>
	     <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	     <title>Dunks Design Craft</title>
		     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
			 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
			 
			 <link rel="stylesheet" href="min.css">
			 <script src="dunks.js"></script>
      		 <style>
			 
			     
				
					span{
						font-size: 25px;
						font-family: cursive;
						color: white;
						animation: blink 1s linear infinite;
					}
				@keyframes blink{
				0%{opacity: 0;}
				50%{opacity: .5;}
				100%{opacity: 1;}
				}
			 </style>
		 	 
	 
	 
	 </head>

    <body> 
	     <!-- nav bar-->
		  <nav class="navbar navbar-expand-md navbar-light  navbar-custom topnav">
             <a class="navbar-brand" href="#" alt="responsive-image"> <img src="images/logo_transparent.png" alt="Dunks Design Craft">
			 </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item ">
                         <a class="nav-link font-weight-bold" href="index.html" >Home </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link font-weight-bold" href="About.html">About</a>
                     </li>
            
                     <li class="nav-item dropdown navbar-custom">
                         <a class="nav-link dropdown-toggle font-weight-bold""  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Products </a>
                             <ul class="dropdown-menu navbar-custom" aria-labelledby="navbarDropdownMenuLink">
                    
                    
                                 <li class="dropdown-submenu font-weight-bold""><a class="dropdown-item dropdown-toggle" >upvc Doors & Window </a>
                                      <ul class="dropdown-menu dropdown-menu navbar-custom">
                                         <li><a class="dropdown-item font-weight-bold"  href="casement.html">Casement Doors & Window</a></li>
                                         <li><a class="dropdown-item font-weight-bold" href="sliding.html">Sliding Doors & Window</a></li>
							             <li><a class="dropdown-item font-weight-bold" href="fixed.html">Slide & Fold Doors & window</a></li>
							             <li><a class="dropdown-item font-weight-bold" href="till.html">Till & Turn Doors & Windows</a></li>
							             <li><a class="dropdown-item font-weight-bold" href="franch.html">Franch Doors & Windows</a></li>
                            
                            
                                     </ul>
                                 </li>
                             </ul>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link font-weight-bold" href="Partner.html">Gallery</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link font-weight-bold" href="portfolio.html">Our Projects</a>
                     </li>
					 <li class="nav-item">
                         <a class="nav-link font-weight-bold" href="glass.html">Glass</a>
                     </li>
					 <li class="nav-item">
                         <a class="nav-link font-weight-bold" href="resources.html">Resources</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link font-weight-bold" href="contact.php">Contact</a>
                     </li>
                 </ul>
             </div>	
         </nav>
		 <br>
		 <!--contact form-->
		 <div class="container">
		     <div class="row">
			     <div class="col-sm">
				     <button type="button" class="btn btn-danger btn-lg btn-block " data-toggle="modal" data-target="#myModal"><span class="blink"> Become Our Assoceate</span></button>
				 </div>
				
				 <div class="col-sm">
				 <button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#myModal1"><span class="blink"> Enquiry Form</span></button>
				 </div>
		     </div>
		</div>
		<br>
		
		
		   <!-- The Modal -->
			  <div class="modal fade" id="myModal">
				<div class="modal-dialog">
				  <div class="modal-content">
				  
        <!-- Modal Header -->
				<div class="modal-header">
				  <h4 class="modal-title">Become Our Assoceate</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form name="form2" method="post" action="mail.php">
				 <div class="form-group">
				   <div class="form-group">
				<label for="exampleInputName" class="text-danger">Name</label>
				 <input type="text" class="form-control" id="exampleInputName" placeholder=" Enter Your Name" Name="name"  required>
				</div>
				<div class="form-group">
				<label for="exampleInputEmail"  class="text-danger">Email</label>
				 <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Your Email" Name="email"  required>
				</div>
				<div class="form-group">
				<label for="exampleInputMobile" class="text-danger">Mobile</label>
				 <input type="tel" class="form-control" id="exampleInputMobile" placeholder=" Enter Your Mobile " Name="mobile"   required >
				</div>
				<div class="form-group">
				<label for="exampleInputMsg"  class="text-danger">Comment</label>
				 <textarea class="form-control" id="exampleInputMsg" placeholder=" Enter Your Message" Name="comment"  rows="4" cols="50" required></textarea>
				</div>
				 <button type="submit" class="btn btn-secondary  " value="submit">Submit</button>
				 
        
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 </form>
				 
			     </div>
			</div>	 
          
        </div>
        
        
        
      </div>
    </div>
  </div>
		 <!-- The Modal1 -->
			  <div class="modal fade" id="myModal1">
				<div class="modal-dialog">
				  <div class="modal-content">
				  
					<!-- Modal Header -->
					<div class="modal-header">
					  <h4 class="modal-title"> Enquiry Form</h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<!-- Modal body -->
					<div class="modal-body">
					<form name="form1" method="post" action="mail1.php">
							 
							   <div class="form-group">
							<label for="exampleInputName" class="text-danger">Name</label>
							 <input type="text" class="form-control" id="exampleInputName" placeholder=" Enter Your Name" Name="name"  required>
							</div>
							<div class="form-group">
							<label for="exampleInputEmail"  class="text-danger">Email</label>
							 <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Your Email" Name="email"  required>
							</div>
							<div class="form-group">
							<label for="exampleInputMobile" class="text-danger">Mobile</label>
							 <input type="tel" class="form-control" id="exampleInputMobile" placeholder=" Enter Your Mobile " Name="mobile"    required >
							</div>
							<div class="form-group">
							<label for="exampleInputMsg"  class="text-danger">Comment</label>
							 <textarea class="form-control" id="exampleInputMsg" placeholder=" Enter Your Message" Name="comment"  rows="4" cols="50" required></textarea>
							</div>
							 <button type="submit" class="btn btn-danger  " value="submit">Submit</button>
							  
					         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					
							 
							
						</form>	 
					  
					</div>
				</div>
                 </div>
                   </div>				 
					
					
					
				  
			  
			  
					 <!--modal-->
		
						<div tabindex="-1" class="modal pmd-modal fade text-center" id="message"  aria-hidden="true">
							<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
								<div class="pmd-card-icon">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="75px" height="75px" viewBox="162.5 162.5 75 75" enable-background="new 162.5 162.5 75 75" xml:space="preserve">
										<g>
										<path fill="#33CC99" d="M199.943,162.54c-20.711,0-37.5,16.789-37.5,37.5c0,20.71,16.789,37.5,37.5,37.5
											c20.711,0,37.5-16.789,37.5-37.5C237.443,179.329,220.654,162.54,199.943,162.54L199.943,162.54z M199.943,234.332
											c-18.938,0-34.291-15.354-34.291-34.292c0-18.938,15.353-34.291,34.291-34.291c18.939,0,34.292,15.353,34.292,34.291l0,0
											C234.234,218.979,218.882,234.332,199.943,234.332z"></path>
										<path fill="none" d="M176.333,176.333h46.334v46.334h-46.334V176.333z"></path>
										<path fill="#33CC99" d="M193.765,207.568l-8.108-8.108l-2.703,2.704l10.811,10.811l23.167-23.167l-2.703-2.703L193.765,207.568z"></path>
										</g>
									</svg>
								</div>
								<h2>Thank you for showing interest Our Services!</h2>
								<p></p>
								<p>Your submission is received and we will contact you soon</p>
							</div>
							<div class="modal-footer justify-content-center">
								<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary" type="button">Got It!</button>
							</div>
						</div>
					</div>
				</div>

<!--Maps-->
         <!--Google map-->
			<div class="container">
			 <!--Google map-->
				<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d112032.03247204266!2d77.33678771979109!3d28.65968828316828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x390cf154b1d7e82f%3A0x56eeff6854b1e61a!2sKAMAL%20HOUSE%2C%20Brahmaputra%20Enclave%2C%20Siddharth%20Vihar%20Yojna%20Sector%2010%2C%20B-75%20303%2F302%20SECTOR%2010%2C%20Siddharth%20Vihar%2C%20Pratap%20Vihar%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201009!3m2!1d28.6597063!2d77.4068289!5e0!3m2!1sen!2sin!4v1603348925025!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>


		 </div>
		 
		
		  
		
		 <!--footer-->
		 <footer class="page-footer " style="background-color: #d11316 ">
		     <div class="container">
              <div class="row">
              <div class="col-sm" >
                 <h5 class="card-body text-light ">Dunks Design Craft </h5>
				 <p class="card-text text-light  ">B-8,400,TF</p>
				 <p class="card-text text-light  ">Sector-7 Brahamputra Enclave Siddarth Vihar</p>
				 <p class="card-text text-light ">Delhi-NCR-201001</p>
				 
                </div>
                  <div class="col-sm  ">
				     <h5 class="card-body text-light">Contact </h5>
					 <p class="text-light"><i class="fa fa-phone" aria-hidden="true"></i>
                     <a  class="text-light" href="tel:+919555235110">+919555235110</a>    <a class="text-light" href="tel:+918859010985">
                      +918859010985</a> </p>
					  <p class="text-light"><i class="fa fa-whatsapp" aria-hidden="true"></i> <a class="text-light" href="https://wa.me/917409180301?text=Hello">Connect With Us</a>
                     </p>
            
					<p class="text-light"> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a  class="text-light" href="mailto:info@vikingsapplication.com">info@dunkdesign.com</a></p>
                     
              
              </div>
                     <div class="col-sm "  >
                     <h5 class="card-body  text-light">Follow Us</h5>
					  <div class="footer-social">
					   
						<div class="template-demo"> <button type="button" class="btn btn-social-icon btn-outline-facebook"><i class="fa fa-facebook"></i></button> <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="fa fa-youtube"></i></button> <button type="button" class="btn btn-social-icon btn-outline-twitter"><i class="fa fa-twitter"></i></button> <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i class="fa fa-dribbble"></i></button> <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i class="fa fa-linkedin"></i></button> <button type="button" class="btn btn-social-icon btn-outline-instagram"><i class="fa fa-instagram"></i></button> </div>
					  </div>
					   </div>
                  </div>
             </div>
		 
	        <!-- copy right-->
		      <div class="footer-copyright text-center py-3 text-light" >© 2020 Copyright:
               <a href="www.vikingsapplication.com" class="text-light"> Dunks Design Craft</a>
             </div>
			 </div>
		 </footer> 	 
		 
	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	     
	     
	     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	     
	</body>



</html>		
<?php
$b=isset($_GET['x']);

if($b!=0)
{
    echo "
<script>
    $('#message').modal('show');
  </script>";
}



?>
