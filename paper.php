
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">


    <title>File Uploadinmg: Research Paper Management</title>
  </head>
  <body>
    <?php
      include 'header.php';
      if(empty($_SESSION['userId'])) {
        echo "<script>alert('Please login first!!!')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
        #header ("Location: index.php");
      }
    ?>

    <div class="container border rounded">
      <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
          <br>
        </div>

        <h3>Upload your  Research Paper</h3>
        <div class="form-group">
          <br>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput">Enter Title</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="title">
        </div>

        <div class="form-group">
          <br>
        </div>

        <div class="form-group">
          <label for="exampleFormControlFile1">Choose your paper(Must be in PDF Format)</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
        </div><br>

        <button type="submit" class="btn btn-primary" name="up">Submit</button><br>

        <div class="form-group">
          <br>
        </div>
      </form>
    </div>



    <?php include 'paperSQL.php'; ?>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/jquery-3.3.1.slim.min.js"></script>
    <script src="inc/popper.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </body>
</html>
