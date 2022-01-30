<?php

  include 'includes/dbh.inc.php';

  $pId = $_GET['id'];
  $queryPaper = "select paper_title, user_name, file from paper, user_signup
                 where paper.user_id=user_signup.user_id and paper_id = '$pId'";
  $runQueryPaper = mysqli_query($conn, $queryPaper);


    $result = mysqli_fetch_assoc($runQueryPaper);
    $title = $result['paper_title'];
    $writer = $result['user_name'];
    $path = $result['file'];


    $queryComment = "select user_name, c_desc from user_signup, comment
                     where user_signup.user_id=comment.user_id ";

    $runQueryComment = mysqli_query($conn, $queryComment);



 ?>
