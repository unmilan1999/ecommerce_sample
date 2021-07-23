<?php
  if(isset($_POST['button']))
  {
    require 'common.php';
    $con = mysqli_connect('localhost', 'root', '', 'store');
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $res = mysqli_query($con, " select * from users where email = '$email' ");
    $s = mysqli_num_rows($res);
    if($s > 0)
    {
   	   echo '<script> alert("User previously exists with same email!!!"); </script>';
   	   header('location: signup.php');
    }
    else
    {
   	   mysqli_query($con, "insert into users (name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address')");
   	   $_SESSION['user_id'] = mysqli_insert_id($con);
   	   $_SESSION['email'] = $email;
   	   header('location: products.php');
    }
  }
?>