<?php

  include 'includes/dbh.inc.php';

  if (isset($_POST['up'])) {

    $user = $_SESSION['userName'];
    $id = $_SESSION['userId'];
    $title = htmlentities(mysqli_escape_string($conn, $_POST['title']));

    $title_check = "select paper_title from paper where '$title'=paper_title";
    $run = mysqli_query($conn, $title_check);
    if (mysqli_num_rows($run) != 0) {
      echo "<script>alert('Title already exists!!!')</script>";
      exit;
    }


    $dir = 'uploads/';
    $targetfile = $dir . $_FILES['file']['name'];


    $insert = "insert into paper(paper_title, user_id, file) values ('$title', '$id', '$targetfile')";
    $run = mysqli_query ($conn, $insert);

    if (!$run) {
      echo "<script>alert('Something went wrong, Try again later!!!')</script>";
      exit;
    }

    $upload = move_uploaded_file($_FILES['file']['tmp_name'], $targetfile);

    if (!$upload) {
      $delete = "delete from paper where paper_title = '$title'";
      $run = mysqli_query ($conn, $delete);
      echo "<script>alert('The file couldn't be uploaded, Try again later!!!')</script>";
      exit;
    }
    $query = "select paper_id from paper where paper_title = '$title'";
    $run = mysqli_query ($conn, $query);
    $temp = mysqli_fetch_assoc($run);
    $run = $temp['paper_id'];
    $insert = "insert into request(paper_id) values('$run')";
    $runInsert = mysqli_query($conn, $insert);



    echo "<script>window.open('feed.php', '_self')</script>";

    #header("Location: feed.php");
    exit;

  }
    ?>
