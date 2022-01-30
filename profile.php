<?php
require 'includes/dbh.inc.php';
require 'header.php';

if (isset($_SESSION['userId'])) {


  $id=  $_SESSION['userId'];
  $result3 = mysqli_query($conn, "SELECT user_name, email, gender, department, institute FROM user_signup where user_id='$id'");
  while($row3 = mysqli_fetch_array($result3))
  {

  $name = $row3['user_name'];
  $email= $row3['email'];
  $gender= $row3['gender'];
  $department= $row3['department'];
  $institute=$row3['institute'];


  }
  ?>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="inc/bootstrap.min.css">


  <div class="container border rounded">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Your Profile Information </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Name</th>
          <td><?php echo $name; ?></td>

        </tr>
        <tr>
          <th scope="row">Email</th>
          <td><?php echo $email; ?></td>
        </tr>
        <tr>
          <th scope="row">Gender</th>
          <td><?php echo $gender; ?></td>
        </tr>
        <tr>
          <th scope="row">Department</th>
          <td><?php echo $department; ?></td>
        </tr>
        <tr>
          <th scope="row">Institute</th>
          <td><?php echo $institute; ?></td>
        </tr>
      </tbody>
    </table>
  </div>

  <br><br>
  <?php include 'timelineSQL.php'; ?>
  <div class="container border rounded">
    <div class="row justify-content-center align-items-center">
      <div class="col-12">
        <br>
        <h4>Personal Submissions</h4>
      </div>
    </div>

    <?php while ($row = mysqli_fetch_assoc($run)) { ?>
      <?php $pid = $row['paper_id']; ?>
      <div class="row justify-content-center align-items-center">
        <div class="col-12"><br>
          <div class="jumbotron border border-success">
            <a href="comment.php?id=<?php echo $pid; ?>" class="link d-flex justify-content-center h4"> <?php echo $row['paper_title']; ?><br></a>
            <p class="h5 d-flex justify-content-center">By <?php echo $_SESSION['userName']; ?> </p>
            <!--<p class="h6 d-flex justify-content-center">At <?php echo $row['time']; ?> </p>-->
          </div>
        </div>
      </div>
    <?php } ?>

  </div>



<?php

}
else{


$_SESSION['message'] = "Login Please";
header("Location:index.php");


}


?>
