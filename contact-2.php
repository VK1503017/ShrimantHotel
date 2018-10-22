<?php

// Define some constants
define( "RECIPIENT_NAME", "ninad ketkale" );
define( "RECIPIENT_EMAIL", "info@ninadketkale.design" );


// Read the form values
$success = false;
$fname=isset($_POST['name']);
$sname=isset($_POST['surname']);
$senderName=$fname." ".$surname;
//$phone=isset($_POST['phone']);
//$senderName = isset( $_POST[''] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = "New Booking";
if(isset($_POST['date']) && isset($_POST['time']) && isset($_POST['phone']))
{
    $date=$_POST['date'];
    $time=$_POST['time'];
    $phone=$_POST['phone'];
}
//$time=isset($_POST['time']);
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $subject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $msgBody = " Subject: " . $subject ." Message: " . $message . " Date: ".$date." Time: ".$time." Phone:".$phone;
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: contact.html?message=Successfull');
    
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index.html?message=Failed');	
}

?>