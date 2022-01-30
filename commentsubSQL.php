<?php


if (isset($_POST['com'])) {
  $comment = htmlentities(mysqli_escape_string($conn, $_POST['comment']));
  $id = $_SESSION['userId'];
  $queryComment = "insert into comment(paper_id, c_desc, user_id) values('$pId', '$comment', '$id')";

  $runQueryComment = mysqli_query($conn, $queryComment);


  if ($runQueryComment) {
    echo "<script>window.open('comment.php?id=$pId', '_self')</script>";
  } else {
    $_SESSION['err'] = "Error: " . mysqli_error($conn);
  }
}






 ?>
