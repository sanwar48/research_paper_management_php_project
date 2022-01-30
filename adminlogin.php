<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/bootstrap.min.css">


    <title>Admin Login: Research Paper Management</title>
  </head>
  <body>
    <?php
      include 'header.php';
    ?>

    <div class="container border rounded">
      <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
          <br>
        </div>

        <h3>Login as administrator.</h3>
        <div class="form-group">
          <br>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput">Enter Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="name">
        </div>

        <div class="form-group">
          <br>
        </div>

        <div class="form-group">
          <label for="exampleFormControlFile1">Enter Password</label>
          <input type="password" class="form-control" id="exampleFormControlFile1" name="pass">
        </div><br>

        <button type="submit" class="btn btn-primary" name="go">Login!</button><br>

        <div class="form-group">
          <br>
        </div>
      </form>
    </div>



    <?php include 'adminloginSQL.php'; ?>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/jquery-3.3.1.slim.min.js"></script>
    <script src="inc/popper.min.js"></script>
    <script src="inc/bootstrap.min.js"></script>
  </body>
</html>
