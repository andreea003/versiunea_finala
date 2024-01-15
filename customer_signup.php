<?php

include('db/dbconn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
function sendVerificationEmail($email, $verificationCode) {
   $mail = new PHPMailer(true);

   try {
       // Server settings
       $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com'; // SMTP server
       $mail->SMTPAuth = true;
       $mail->Username = 'andreea.popoviciu03@e-uvt.ro'; // SMTP username
       $mail->Password = 'upbb ukzd mtmq qxzp '; // SMTP password
       $mail->Port = 587; // Change to the appropriate port

       // Recipients
       $mail->setFrom('andreea.popoviciu03@e-uvt.ro', 'Andreea Popoviciu');
       $mail->addAddress($email); // Recipient email

       // Content
       $mail->isHTML(true);
       $mail->Subject = 'Account Verification';
       $mail->Body = 'Your verification code is: ' . $verificationCode;

       $mail->send();
       return true;
   } catch (Exception $e) {
       return false;
   }
}
	if (isset($_POST['signup']))
{
	function generateVerificationCode() {
		$verificationCode = mt_rand(100000, 999999); // Generates a random 6-digit number
		return $verificationCode;
	}
	$verificationCode = generateVerificationCode();
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	sendVerificationEmail($email, $verificationCode) ;
	header('location: verify.html');
	$firstname=$_POST['firstname'];
	$mi=$_POST['mi'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$zipcode=$_POST['zipcode'];	
	$mobile=$_POST['mobile'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query = $conn->query("SELECT * FROM `customer` WHERE `email` = '$email'");
	$check = $query->num_rows;
		if($check == 1)
			{
				echo "<script>alert('EMAIL ALREADY EXIST')</script>";	 
			}
			
			else
				{
					$conn->query ("INSERT INTO customer (firstname, mi, lastname, address, country, zipcode, mobile, telephone, email, password)
					VALUES ('$firstname', '$mi', '$lastname', '$address', '$country', '$zipcode', '$mobile', '$telephone', '$email', '$password')") 
					or die(mysqli_error());	
				}				
					
}
?>