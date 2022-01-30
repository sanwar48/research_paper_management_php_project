<?php

  include 'includes/dbh.inc.php';

  $results_per_page = 3;
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
    $start = 0;
  } else {
    $start = ($_GET['page'] - 1) * $results_per_page;
  }

  $query = "select paper_title, user_name, request.paper_id from paper, user_signup, request
            where user_signup.user_id=paper.user_id
            and request.paper_id=paper.paper_id
            and paper.permit='NO'";

  $run = mysqli_query($conn, $query);
  $number_of_pages = ceil(mysqli_num_rows($run) / $results_per_page);

  $queryLimited = "select paper_title, user_name, request.paper_id from paper, user_signup, request
            where user_signup.user_id=paper.user_id
            and request.paper_id=paper.paper_id
            and paper.permit='NO' limit $start, $results_per_page ";
  $run = mysqli_query($conn, $queryLimited);

 ?>
