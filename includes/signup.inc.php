<?php

session_start();

$_SESSION['message']='';
if(isset($_POST['signup-submit'])){

  require 'dbh.inc.php';

  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  $gender = $_POST['gender'];
  $department=$_POST['department'];
  $institute=$_POST['institute'];
  //$avatar_path='images/'.$_FILES['avatar']['name'];




  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));


        $fileNameNew = uniqid('', true).".".$fileActualExt;

        $fileDestination = 'images/'.$fileNameNew;
        $target_file = 'images/'.basename($_FILES['file']['name']);
        move_uploaded_file($fileTmpName, $target_file);
        //header("Location:index.php?fileuploadsuccess");
        $avatar_path = $fileDestination;


























  //$avatar_path=mysqli_real_escape_string($conn, $avatar_path);

//  if (preg_match("!images!", $_FILES['avatar']['type'])) {
    //move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar_path);
    //  $_SESSION['avatar'] = $avatar_path;

//  }

  //else {
  //  $_SESSION['message']= "Please upload only JPG< PNG< or GIF type imageonly";
  //}


  if(empty($username) || empty($email) ||empty($password) || empty($passwordRepeat) || empty($gender) || empty($department) || empty($institute)|| empty($avatar_path)){
    header("Location: ../signup.php?error=emptyfield&uid=".$username."&mail=".$email);
    exit();
  }

  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$", $username)) {
    header("Location: ../signup.php?error=invalidmailuid");
    exit();
  }

  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid".$username);
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&mail".$email);
    exit();
  }

  elseif ($password!==$passwordRepeat) {
    header("Location: ../signup.php?error=passwordcheck&uid".$username. "&mail=".$email);
    exit();
  }

  else{
    $sql = "SELECT user_name FROM user_signup WHERE user_name=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);

      if($resultCheck>0){
        header("Location: ../signup.php?error=user name taken&mail=".$email);
        exit();
      }
      else {
        $sql = "INSERT INTO user_signup (user_name, email, pass, gender, department, institute, image_path) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
        else {
          //securing password
          $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sssssss", $username, $email, $hashedpwd, $gender, $department, $institute,  $avatar_path);

          mysqli_stmt_execute($stmt);
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }

    }

  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

else{
  header("Location: ../signup.php");
  exit();
}
