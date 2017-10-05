<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];

$to='infosyncdevelopment@gmail.com'; // Receiver Email ID, Replace with your email ID
$subject='Form Submission';
$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){


    $msg = "<h1>Bedankt voor uw bericht!"." ".$name.", Wij nemen zo snel mogelijk contact met u op.</h1>";
}
else{
    $msg = "Something went wrong!";
}

header("Location: sync_development_alphen_aan_den_rijn_contact.php?$msg");

} ?>