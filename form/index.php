<?php
//get data from form

$firstName = $_POST["firstName"];
$lastName  = $_POST["lastName"];
$username  = $_POST["username"];
$email     = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$address   = $_POST["address"];
$country   = $_POST["country"];
$state     = $_POST["state"];
$businessName = $_POST["businessName"];
$nature    = $_POST["nature"];
$busMail   = $_POST["busMail"];
$busAd     = $_POST["busAd"];
$target    = $_POST["target"];
$terms     = $_POST["terms"];
$save      = $_POST["save"];
$message = $_POST["message"];

$to= "ajiscomorac@gmail.com";

$subject= "Mail from Ajisco";

$txt= "First Name=".$firstName . "\r\n Last Name=".$lastName . "\r\n Username=".$username . "\r\n Email=".$email . "\r\n Phone Number=".$phoneNumber . "\r\n Home Address =".$address  . "\r\n Country=".$country . "\r\n State =".$state  . "\r\n Business Name=".$businessName . "\r\n Nature of Business=".$nature . "\r\n Business Email=".$busMail . "\r\n Business Address=".$busAd . "\r\n Target Area=".$target . "\r\n Terms and Conditions=".$terms . "\r\n Save for Later=".$save  . "\r\n Message=".$message ; 

$header= "From: noreply@ajisco.com". "\r\n ".
"CC: doctorajisco@gmail.com"
if($email!=NULL){
  mail($to, $subject, $txt, $header);
}

//redirect
header("Location:form.html");

?>
