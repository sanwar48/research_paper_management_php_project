<?php

if(isset($_POST['go'])){

  require 'includes/dbh.inc.php';

  $nam = htmlentities(mysqli_escape_string($conn, $_POST['name']));
  $pass = htmlentities(mysqli_escape_string($conn, $_POST['pass']));

  $check = "select admin_name from admin_login where admin_name='$nam' and pass='$pass'";
  $run = mysqli_query($conn, $check);

  if (mysqli_num_rows($run)==1) {
    $_SESSION['admin_name'] = mysqli_fetch_assoc($run);
    echo "<script>alert('You've logged in as an administrator!!!')</script>";
    echo "<script>window.open('request.php', '_self')</script>";
  }

}

  #echo "<script>alert('You couldn't log in, try again!!!')</script>";
  #echo "<script>window.open('adminlogin.php', '_self')</script>";
