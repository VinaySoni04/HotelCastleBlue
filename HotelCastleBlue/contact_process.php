<?php
if(isset($_REQUEST['submit']))
  {
	
  
		$to = "radheybikaner@gmail.com";
			
		$subject ="contect Registration Form";
			
			
			error_reporting(0);
			$message.= '
<html>
			<head>
			  <title>Enquiary</title>
			</head>
			<body>
<div style="width:400px; border: 1px solid #970226; height:240px;  font-size:12px; color:#970226; font-family:Verdana, Geneva, sans-serif; margin:0 auto; ">


<h1 style="font-size:30px; text-align:center;">Enquiary</h1>
<form action="contact_process.php"  name="form" id="contact-form" method="post" onsubmit="return validateForm();">
                  <table style="margin-left:20px;"  width="400" height="101">
  <tr>
    <td width="109" valign="top">Name</td>
    <td width="123">'.$_REQUEST['name'].'</td>
  </tr>
  <tr>
    <td valign="top" class="texe">Email</td>
    <td>'.$_REQUEST['email'].'</td>
   
      
  </tr>
  <tr>
    <td valign="top" class="texe">Phone</td>
    <td>'.$_REQUEST['phone'].'</td>
  </tr>
  <tr>
    <td valign="top" class="texe">Message </td>
    <td>'.$_REQUEST['msg'].'</td>
   
     
  </tr>
</table>
               </form>

</div>
</body>
			</html>';
	
	
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		
			
			$replyto  = "admin@demo.weblogicx.in";
		
		 
			$headers .= 'From:<'.$replyto.'>' . "\r\n";
			
			if(mail($to, $subject, $message, $headers))
			{
				header("Location:thanks.html");
				
			}
	
  }
	?>		

    
    
  