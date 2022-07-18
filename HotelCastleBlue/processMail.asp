<%
sendUrl="http://schemas.microsoft.com/cdo/configuration/sendusing"
smtpUrl="http://schemas.microsoft.com/cdo/configuration/smtpserver"
<!-- #include file="CAPTCHA/CAPTCHA_process_form.asp" --> 


' Set the mail server configuration
Set objConfig=CreateObject("CDO.Configuration")
objConfig.Fields.Item(sendUrl)=2 ' cdoSendUsingPort
objConfig.Fields.Item(smtpUrl)="relay-hosting.secureserver.net"
objConfig.Fields.Update

' Create and send the mail
Set objMail=CreateObject("CDO.Message")
' Use the config object created above
Set objMail.Configuration=objConfig
objMail.From="admin@demo.weblogicx.in"
objMail.ReplyTo=Request.Form("Email")
objMail.To="radheybikaner@gmail.com"
objMail.Subject="Enquiry from Your website"
objMail.TextBody="Name:" & Request.Form("name") & vbCrLf _
				   & "Email: " & Request.Form("email") & vbCrLf _
				   & "Telephone: " & Request.Form("phone") & vbCrLf _
				   & "Message: " & Request.Form("msg") & vbCrLf _
				   
				   
				   

	
	' -- send the email --			   
	objMail.Send

' -- clean up object
Set objMail = Nothing

' -- execute confirmation page
Response.Redirect "thanks.html"
%>