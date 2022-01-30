<?php

  include 'includes/dbh.inc.php';

  if (isset($_POST['accept'])) {
    $update = "update paper set permit='YES' where paper_id='$pid'";
    $run = mysqli_query($conn, $update);
    $delete = "delete from request where paper_id='$pid'";
    $run2 = mysqli_query($conn, $delete);
    if ($run && $run2) {
      echo "<script>alert('The paper is accepted!!!')</script>";
        echo "<script>window.open('request.php', '_self')</script>";
    } else {
      echo "<script>alert('Something went wrong!!!')</script>";
    }

  } else if (isset($_POST['reject'])) {
    $query = "select file from paper where paper_id='$pid'";
    $run = mysqli_query($conn, $query);
    $temp = mysqli_fetch_assoc($run);
    $path = $temp['file'];
    unlink($path);

    $delete = "delete from paper where paper_id='$pid'";
    $run2 = mysqli_query($conn, $delete);
    $delete = "delete from request where paper_id='$pid'";
    $run3 = mysqli_query($conn, $delete);

    if ($run && $run2) {
      echo "<script>alert('The paper is rejected!!!')</script>";
        echo "<script>window.open('request.php', '_self')</script>";
    } else {
      echo "<script>alert('Something went wrong!!!')</script>";
    }

  }
