<?php

if(isset($_POST['login-submit'])){

  require 'dbh.inc.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if(empty($mailuid) || empty($password)){
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
else {
  $sql = "SELECT * FROM user_signup WHERE user_name=? OR email=?;";

  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  }

  else {
    mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)){
        $pwdcheck = password_verify($password, $row['pass']);
        if ($pwdcheck==false) {
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }
        elseif ($pwdcheck==true) {
                  session_start();
                  $_SESSION['userId'] = $row['user_id'];
                  $_SESSION['userName'] = $row['user_name'];
                  $_SESSION['email'] = $row['email'];

                  header("Location: ../index.php?login=success");
                  exit();
        }
        else {
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }
    }

    else {
      header("Location: ../index.php?error=nouser");
      exit();
    }
  }

}

}

else {
  header("Location: ../index.php");
  exit();
}
