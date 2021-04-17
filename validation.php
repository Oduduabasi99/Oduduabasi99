<?php
$fname="";
$lname="";
$email="";
$phoneNo="";
$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $phoneNo = test_input($_POST["phoneNo"]);
    $message =test_input($_POST["message"])
}

function test_input ($data) {
    $data =trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars ($data);
    return $data;
}
alert("we are live")

?>