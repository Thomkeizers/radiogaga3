


<?php
if (isset($_POST['register'])) {
  echo $name = $_POST['name'];



}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="../style.css">

  </head>

  <body class="register-container">

<div class="container-2">


      <nav class="navigation">
        <ul class="left-nav">
          <li class="name-nav"><a href="../barberoo.html">Barberoo</a></li>
          <li><a href="find-barber.html">Find your barber</a></li>
          <li><a href="how-it-works.html">How it works</a></li>
          <li><a href="become-a-barber.html">Become a barber</a></li>
          <li style="float:right; margin-right:40px;"><a href="sign-in.html">Sign in</a></li>
          <li style="float:right"><a href="register.php">Register</a></li>
        </ul>
      </nav>

<div class="register-div">
    <form class="register-form" action="" method="post">
      <label for="">Customer/Barber</label>
      <select class="" name="role">
        <option value="">Customer</option>
        <option value="">Barber</option>
      </select><br>

      <label for="">Name</label>
      <input type="text" name="name" value=""><br>

      <label for="">Surname</label>
      <input type="text" name="surname" value=""><br>

      <label for="">Email</label>
      <input type="email" name="email" value=""><br>

      <label for="">Adress</label>
      <input type="Adress" name="adress" value=""><br>

      <button class="btn-register" type="submit" name="register">Register!</button>
    </form>
  </div>

  </div>

  </body>
</html>
