<?php

$mail_from = $_POST['email_address'];

$feedback= $_POST['feedback_text'];

$subject = "Some Feedback from" .$mail_from;

$header="From: YourSite";

$to ='seanbbyfield@gmail.com';

$send_contact=mail($to,$subject,$feedback,$header);

if($send_contact){
  echo "We have received your feedback, Thank you very much!";
} else {
  echo "Oops! There was an error";
}
?>