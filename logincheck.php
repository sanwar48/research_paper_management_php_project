<?php

session_start();

require 'includes/dbh.inc.php';

if (isset($_POST['submit'])) {

 $adminname = $_POST['user'];
 $password =  $_POST['pass'];

 $sql = "SELECT * FROM admin_login WHERE admin_name='$adminname';";

 $query = mysqli_query($conn, $sql);

 $row = mysqli_num_rows($query);

   if ($row==1) {
     echo "login successful";
     $_SESSION['adminuser'] = $adminname;

     header('Location:adminmainpage.php');

   }
   else {
     echo "Login failed";
     header('Location:logincheck.php');
   }





}







 ?>
