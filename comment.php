<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">

    <title>Comments: Research Paper Management</title>

    <style media="screen">
      a:hover {
        text-decoration: none;
      }
      .link {
        color: black;
      }
    </style>
  </head>
  <body>
    <?php include 'header.php';
    if(empty($_SESSION['userId']) && empty($_SESSION['admin_name'])) {
      echo "<script>alert('Please login first!!!')</script>";
      echo "<script>window.open('index.php', '_self')</script>";
      #header ("Location: index.php");
    } ?><br><br>



    <?php
      include 'commentSQL.php';
    ?>
          <br><br>

          <div class="container">

            <div class="row justify-content-center">
              <div class="col-12">

              </div>
            </div>

            <div class="jumbotron">
              <div class="row justify-content-center">
                <div class="col-12">
                  <p class="h3"> <?php echo $title; ?> </p>
                  <p class="h6">By <?php echo $writer; ?> </p>
                  <p class="h4"> <a href=<?=$path?> download>Download</a> the paper. </p>
                </div>
              </div>

              <div class="row justify-content-center">

              </div>
            </div>


          </div>

          <div class="container">
              <div class="jumbotron border">
                <div class="container">

                  <div class="row justify-content-center">
                      <h4><i>Give Your Oppinion!!!</i></h4>
                  </div>

                  <div class="row justify-content-center">
                    <div class="col-12">
                      <form method="post">


                        <div class="form-group">
                          <label for="body">Comment</label>
                          <textarea class="form-control" id="body" name="comment" rows="2" placeholder="Write Answer" required></textarea>
                        </div>



                        <button type="submit" name="com" class="btn btn-primary">Go!</button>

                      </form>
                    </div>
                    <?php include 'commentsubSQL.php'; ?>
                  </div><br>

                  <div class="row justify-content-center">
                    <div class="col-12">

                    </div>
                  </div>
                </div>
            </div>
          </div>


          <div class="container">

            <div class="row justify-content-center">
              <div class="col-12">

              </div>
            </div>
            <?php while ($row = mysqli_fetch_assoc($runQueryComment)) { ?>
              <div class="jumbotron">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <p class="h5"><?php echo $row['user_name']; ?> </p>
                  </div>
                </div>
                <br><br>
                <div class="row justify-content-center">
                  <div class="col-12">
                    <p class="h5">Comment Body</p><hr>
                    <p class="h6"> <?php echo $row['c_desc']; ?> </p>
                  </div>
                </div><hr>
                <br><br>

              </div>
            <?php } ?>

            <br><br>
            <div class="row justify-content-center">
              <div class="col-12">

              </div>
            </div>
          </div><br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/jquery-3.3.1.slim.min.js"></script>
    <script src="inc/popper.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </body>
</html>
