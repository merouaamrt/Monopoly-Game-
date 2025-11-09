<?php require("register.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      $user = new RegisterUser($_POST['username'], $_POST['password']);

      if(isset($user->success)){
        header("Location: login.php");
      }
   }
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup_page</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="ecran">
  <div class="carte" data-tilt>
    <img src="Logo.jpg"/>
    <h2>Kirbeco</h2>
    <div class="form" id="signup-form">
      <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <h3>Sign Up</h3><br>

        <label>Username</label>
        <input type="text" name="username">

        <label>Password</label>
        <input type="text" name="password"/>

        <button type="submit" name="submit">Sign Up</button>

        <p class="error"><?php echo @$user->error ?></p>
        <p class="success"><?php echo @$user->success ?></p>

      </form>
    </div>
</div>
<script src="vanilla-tilt.js"></script>

</body>
</html>


