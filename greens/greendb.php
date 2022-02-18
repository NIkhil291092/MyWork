<?php
	<?php
 session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'deepaksharmadp239@gmail.com';
        $mail->Port = 465;  
        $mail->Username = 'deepaksharmadp239@gmail.com';
        $mail->Password = 'Deepak239@';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="deepaksharmadp239@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            header("location:index.php");
			$_SESSION['se1']=1;
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
   
       $n = $_POST['t1'];
	   
        $mobile = $_POST['t3']; // Get Email Value
        $email = $_POST['t4']; // Get Mobile No
        $add = $_POST['t5'];
		$msg = $_POST['t6'];
         
    $to   = 'sales@suncityroyalcastle.com';
    $from = 'sales@suncityroyalcastle.com';
    $name = $n;
    $subj = 'Regarding to Enquiry for Flat and Apartments.';
    $msg = "<html>
            <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                <style>
                    #customers {
                      font-family: Arial, Helvetica, sans-serif;
                      border-collapse: collapse;
                      width: 100%;
                    }
                    
                    #customers td, #customers th {
                      border: 1px solid #ddd;
                      padding: 8px;
                    }
                    
                    #customers tr:nth-child(even){background-color: #f2f2f2;}
                    
                    #customers tr:hover {background-color: #ddd;}
                    
                    #customers th {
                      padding-top: 12px;
                      padding-bottom: 12px;
                      text-align: left;
                      background-color: #4CAF50;
                      color: white;
                    }

                </style>
            </head>
            <body>
                <table style='width:600px; ' id='customers'>
                    <tbody>
                        <tr>
                            <th>First Name</th>
                            
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Enquiry</th>
                        </tr>
                        <tr>
                           
                            <td style='width:400px'>$name</td>
                        
						
                            
                                           
                        
                            
                            <td style='width:400px'>$mobile</td>
                        
                        
                            
                            <td style='width:400px'>$email</td>
                        
						
                            
                            <td style='width:400px'>$add</td>
                        
                        
                            
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>";
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
?>



?>