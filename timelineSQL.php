<?php

  include 'includes/dbh.inc.php';

  $id = $_SESSION['userId'];
  $writer = $_SESSION['userName'];
  $query = "select paper_title, paper_id from paper
            where user_id='$id' and permit='YES' ";

  $run = mysqli_query($conn, $query);



 ?>
