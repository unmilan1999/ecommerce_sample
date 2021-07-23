<?php
   require 'common.php';
   $con1 = mysqli_connect('localhost', 'root', '', 'store');
   if(isset($_POST['lbtn'])){

   	  $email = mysqli_real_escape_string($con1, $_POST['firstname']);
   	  $password = md5($_POST['pass']);
      $r = mysqli_query($con1, " select * from users where email = '$email' ");
      $n = mysqli_num_rows($r);
      if($n == 0)
      {
      	   header('location: login.php');
      }
      else
      {
      	   $r1 = mysqli_query($con1, " select id, password from users where email = '$email' ");
      	   $s = mysqli_fetch_assoc($r1);
      	   if(strcmp(md5($s['password']), $password)==0)
      	   {
                  $_SESSION['email'] = $email;
                  $_SESSION['user_id'] = $s['id'];
                  header('location: products.php');
      	   }
      }

   }
?>