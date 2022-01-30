<?php
session_start();

 ?>

<!DOCTYPE hmtl>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="This is an example of meta description. This will often show up in search results">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
  <div id="main">
  <nav class="navsection">

    <a href="#">
      <img src="img/logo.jpg" height="80" width="100" alt="logo">
    </a>
   <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="profile.php">Portfolio</a></li>
      <li><a href="paper.php">Submit Paper</a></li>
      <li><a href="feed.php">Feed</a></li>

      <?php
        if (!isset($_SESSION['admin_name']) && !isset($_SESSION['userId'])) { ?>
        <li><a href="adminlogin.php">Admin</a></li>
      <?php } ?>

      <?php
        if (isset($_SESSION['admin_name'])) { ?>
        <li><a href="request.php">Request</a></li>
      <?php } ?>


    <?php
      if (isset($_SESSION['userId']) || isset($_SESSION['admin_name'])) { ?>
      <li><a href="includes/logout.inc.php">Logout</a></li>
    <?php } else { ?>
      <li><a href="signup.php">Signup</a></li>
    <?php } ?>
    </ul>

    <div class="header-login">

<?php
if (!isset($_SESSION['userId']) && !isset($_SESSION['admin_name'])) {

echo '<form action="includes/login.inc.php" method="post">
      <input type="text" name="mailuid" placeholder="Username/E-mail...">
      <input type="password" name="pwd" placeholder="password...">
      <button type="submit" name="login-submit">Login</button>
      </form>';
}





 ?>
</div>

</nav>
</div>
</header>

</head>



</body>
