<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/user-login.css"/>
  <title>Company Login - Car Rental Management System</title>
</head>

<body>
  <form action="login.php" method="post">
    <h2>USER LOGIN</h2>
    <?php

      if(isset($_GET['error'])){
        ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
         <?php
      }

     ?>
    <label>Company Name</label>
    <input type="text" name="username" placeholder="Company Name"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <div class="sign-in-button"><button type="submit">Sign In</button></div>
    <a href="signup.php">Click to Sign Up</a>

  </form>
</body>

</html>