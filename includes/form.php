<?php
include "config.php";
if(isset($_POST['submit'])){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $no = $_REQUEST['phoneNo'];
    $message = $_REQUEST['message'];
}


$query = "INSERT INTO contactForm(fname, lname, email, phoneNo, message) VALUES ('$fname', '$lname', '$email', '$no', '$message')";
$result = mysqli_query($conn, $query);
if(!$result){
    die("could not submit to database" . mysqli_error($conn));
}else{
    echo "Submitted successfully";
}
?>