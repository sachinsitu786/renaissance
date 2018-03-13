<?php
$to = "sachin.rawat@acropolisglobal.com";
$subject = "Contact Form Submission at Renaissance";
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];

$mobile=$_POST['mobile'];
$email=$_POST['email'];
$comments=$_POST['message'];
$company=$_POST['company'];
$name = $f_name." ".$l_name;
$msg = "Hi, a message has been posted on Renaissance website with following details :

NAME : ".$name."

MOBILE : ".$mobile."

EMAIL : ".$email."

COMPANY: ".$company."

MESSAGE : ".$comments."

---- END OF MESSAGE ----"
;
$headers = "From: Sachin <sachin.acropolisglobal.com>" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$mail=mail($to,$subject,$msg,$headers);

if($mail)
{
	$mail=mail($email,"Thanks for your Interest",$msg2,$headers2);
 ?>
		<script>window.location.href='http://sachin.acropolisglobal.com/renaissance/success/';</script>";
<?php 
}
else
{
 ?>
 <script type="text/javascript">     
        $(document).ready(function() {
			swal({ 
			 title: "Mail Not Sent !!",
			 text: "Some error occurred . Please try again !!",
			 type: "error" 
			 })
			 });
		</script>
<?php 
}
?>