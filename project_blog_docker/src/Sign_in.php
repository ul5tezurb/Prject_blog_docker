<?php 

header('refresh:5;url=post.php');
die();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIGN IN</title>
 
  </head>

  <body>

    <div class="container">

      <form action="index.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">SIGN IN</h2>
        <label for="inputPassword" class="sr-only">Username :</label>
        <input type="text" name="username" id="inputEmail" placeholder="Username" required autofocus>
        <label for="inputEmail" class="sr-only">Email address :</label>
        <input type="email" name="email" id="inputEmail" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password :</label>
        <input type="password" name="password" id="inputPassword" placeholder="Password" required>
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button type="submit" name="Sign in">Sign in</button>
      </form>

    </div> 

  </body>
</html>