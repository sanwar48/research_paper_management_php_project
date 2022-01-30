<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">

    <title>Request: Research Paper Management</title>

    <style media="screen">
      a:hover {
        text-decoration: inherit;
      }
      .link {
        color: black;
      }
    </style>
  </head>
  <body>
    <?php include 'header.php';
    if(empty($_SESSION['admin_name'])) {
      echo "<script>window.open('index.php', '_self')</script>";
      #header ("Location: index.php");
    } ?><br><br>



    <?php include 'requestSQL.php'; ?> <br>

    <div class="container border">

      <div class="row justify-content-center align-items-center">
        <div class="col-12">

        </div>
      </div>

      <?php while ($row = mysqli_fetch_assoc($run)) { ?>
        <?php $pid = $row['paper_id']; ?>
        <div class="row justify-content-center align-items-center">
          <div class="col-12"><br>
            <div class="jumbotron border border-success">
              <a href="comment.php?id=<?php echo $pid; ?>" class="link d-flex justify-content-center h4"> <?php echo $row['paper_title']; ?><br></a>
              <p class="h5 d-flex justify-content-center">By <?php echo $row['user_name']; ?> </p>
              <!--<p class="h6 d-flex justify-content-center">At <?php echo $row['time']; ?> </p>-->
              <div class="justify-content-center align-items-center">
                <form  method="post">
                  <div class="form-group justify-content-center align-items-center">
                    <br>
                  </div>

                  <div class="row justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary" name="accept">Accept</button>
                    <button type="submit" class="btn btn-danger" name="reject">Reject</button><br>
                  </div>



                  <div class="form-group">
                    <br>
                  </div>
                </form>
                <?php include 'permissionSQL.php'; ?>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>

      <div class="row justify-content-center align-items-center">

          <nav aria-label="Page navigation example">
            <ul class="pagination">

              <?php if ($start != 0) { ?>
                <li class="page-item"><a class="page-link" href="feed.php?page=<?php echo $_GET['page']-1; ?>">Previous</a></li>
              <?php } ?>

              <?php for ($page = 1; $page <= $number_of_pages; $page++) { ?>
                <?php if ($page == $_GET['page']) { ?>
                  <li class="page-item active"><a class="page-link" href="feed.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php } else { ?>
                  <li class="page-item"><a class="page-link" href="feed.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                <?php } ?>
              <?php } ?>

              <?php if ($_GET['page'] != $number_of_pages) { ?>
                <li class="page-item"><a class="page-link" href="feed.php?page=<?php echo $_GET['page']+1; ?>">Next</a></li>
              <?php } ?>

            </ul>
          </nav>

      </div>
    </div><br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/jquery-3.3.1.slim.min.js"></script>
    <script src="inc/popper.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </body>
</html>
