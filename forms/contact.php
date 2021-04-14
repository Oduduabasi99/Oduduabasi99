<?php
include('includes/config.php');

  $conn = mysqli_connect("localhost", "root", "", "portfolio");
    
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }

  // Taking all 5 values from the form data(input)
  $fname =  $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $email =  $_REQUEST['email'];
  $phoneNo = $_REQUEST['phoneNo'];
  $message = $_REQUEST['message'];
    
  // Performing insert query execution
  $sql = "INSERT INTO contactForm  VALUES ('$fname', 
      '$lname','$email','$phoneNo','$message')";

  mysqli_close($conn);
  ?>