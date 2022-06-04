<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST["message"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

if (empty($_POST["no_of_pax"])) {
    $errorMSG = "No of pax is required ";
} else {
    $no_of_pax = $_POST["no_of_pax"];
}

if (empty($_POST["mobile"])) {
    $errorMSG = "mobile is required ";
} else {
    $mobile = $_POST["mobile"];
}

if (empty($_POST["package_name"])) {
    $errorMSG = "package name is required ";
} else {
    $package_name = $_POST["package_name"];
}


$EmailTo = "ashusalvi281996@gmail.com";
$Subject = "New message from Travel Queen package inquiry page";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mobile: ";
$Body .= $mobile;
$Body .= "\n";
$Body .= "No of pax: ";
$Body .= $no_of_pax;
$Body .= "\n";
$Body .= "City: ";
$Body .= $package_name;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>