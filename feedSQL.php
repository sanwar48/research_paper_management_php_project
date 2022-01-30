<?php

  include 'includes/dbh.inc.php';

  $results_per_page = 3;
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
    $start = 0;
  } else {
    $start = ($_GET['page'] - 1) * $results_per_page;
  }

  $query = "select user_name, paper_title, paper_id from paper, user_signup
            where user_signup.user_id=paper.user_id and permit='YES' ";

  $run = mysqli_query($conn, $query);
  $number_of_pages = ceil(mysqli_num_rows($run) / $results_per_page);

  $queryLimited = "select user_name, paper_title, paper_id from paper, user_signup
            where user_signup.user_id=paper.user_id and permit='YES' limit $start, $results_per_page ";
  $run = mysqli_query($conn, $queryLimited);

 ?>
