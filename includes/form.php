<?php
include "config.php";
if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject= $_REQUEST['subject'];
    $message = $_REQUEST['message'];
}

$query = "INSERT INTO contactForm(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
$result = mysqli_query($conn, $query);
if(!$result){
    die("could not submit to database" . mysqli_error($conn));
}else{
    echo '<script> alert ("Submitted successfully");</script>';
}
?>