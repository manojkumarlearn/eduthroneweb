<?php 
if(isset($_POST['submit'])){
    $to = "manojdbest1@gmail.com"; // this is your Email address
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $subject = "Enquiry from www.evidyatoday.com ";
    $phone = $_POST['phone'];  
   	$message = $_POST['message'];
    $subject2 = "www.evidyatoday.com  - Copy of your form submission";
    $message = "www.evidyatoday.com  - Enquiry \n\n Name: " . $name . "\n\nEmail: " . $email . "\n\n Message: " . $message . "\n\n Phone:" . $phone;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;
    $headers = "From:" . $name;
    $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    mail('manojdbest1@gmail.com', 'hello', 'message', 'From: manojdbest1@gmail.com');
	// if (mail($to,$subject,$message,$headers)){
	// 	echo "Thank-you for contacting The evidyatoday. Your request has been submitted. Our team will get in touch with you shortly.";
	// }else{
	// 	$success = "Message Sending Failed, try again";
	// }
    }
	
?>

