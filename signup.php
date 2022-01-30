<?php
//require "header.php";
?>
<body>
<link rel="stylesheet" href="signup.css">
<main>
  <div class="wrapper-main">
    <section class="section-default">
        <img src="img/user-Icon.png">
   <h1>signup now</h1>
   <?php

   if (isset($_GET['error'])) {
        if ($_GET['error']=="emptyfield") {
          echo '<p class="signuperror">Fill all fields!</p>';
        }

        elseif ($_GET['error']=="invalidmailuid") {
          echo '<p class="signuperror">Fill all fields!</p>';

        }
   }
/*  elseif ($_GET["signup"]=="success") {
    echo '<p class="signusuccess">signup successful!</p>';
  }
*/


    ?>



   <form action="includes/signup.inc.php" method="post">

   <input type="text" name="uid" class="input-box" placeholder="Username"></br>
   <input type="text" name="mail" class="input-box" placeholder="E-mail"></br>
   <input type="password" name="pwd" class="input-box" placeholder="Password"></br>
   <input type="password" name="pwd-repeat" class="input-box" placeholder="Repeat password"></br>
   <div class="form-group">
     <label>Gender</label></br>
       <select name="gender" >
       <option value="">None</option>
       <option type ="text" value="Male" class="form-control">Male</option>
       <option type="text" value="Female" class="form-control">Female</option>
       <option ype="text" value="Other" class="form-control">Other</option>
         </select>
   </div>

   <div class="form-group">
   <label>Department</lebel></br>
     <select name="department" >
       <option value="">None</option>
       <option type="text" class="form-control" value="CSE">CSE</option>
       <option type="text" class="form-control" value="EEE">EEE</option>
       <option type="text" class="form-control" value="ECE">ECE</option>
       <option type="text" class="form-control" value="ETE">ETE</option>
       <option type="text" class="form-control" value="ME">ME</option>
       <option type="text" class="form-control" value="IPE">IPE</option>
       <option type="text" class="form-control" value="CFPE">CFPE</option>
       <option type="text" class="form-control" value="CE">CE</option>
       <option type="text" class="form-control" value="Architecture">Architecture</option>
       <option type="text" class="form-control" value="URP">URP</option>
       <option type="text" class="form-control" value="GCE">GCE</option>
       <option type="text" class="form-control" value="BCME">BCME</option>
   </select>
 </div>

 <div class="form-group">
   <label>Institute</label></br>
   <select name="institute" >
     <option value="">None</option>
     <option type="text" class="form-control" value="RUET">RUET</option>
     <option type="text" class="form-control" value="BUET">BUET</option>
     <option type="text" class="form-control" value="KUET">KUET</option>
     <option type="text" class="form-control" value="CUET">CUET</option>
     <option type="text" class="form-control" value="DUET">DUET</option>
     <option type="text" class="form-control" value="DU">DU</option>
     <option type="text" class="form-control" value="RU">RU</option>
     <option type="text" class="form-control" value="CU">CU</option>
     <option type="text" class="form-control" value="JU">JU</option>
   </select>
 </div>






   <button type="submit" name="signup-submit" class="signup-btn">signup</button></br>
   <hr>
   <p class="or">OR</p>
   <button type="submit" class="facebook-btn">Login with facebook</button>
   <p> Do you have already have an account?<a href="index.php">Login</a></p>

  </form>

<section>
</div>
</main>

</body>
