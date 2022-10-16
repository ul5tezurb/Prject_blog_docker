<?php 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CREATE A POST</title>
 
  </head>

  <body>

    <div class="container">

      <form action="index.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">CREATE A POST</h2>
        <label for="inputUsername">User :</label>
        <input type="text" name="User" id="inputUser" class="form-control" placeholder="User" required autofocus>
        <label for="inputTitle" class="sr-only">Title :</label>
        <input type="text" name="Title" id="inputTitle" class="form-control" placeholder="Title of the post" required autofocus>
        <label for="inputContent" class="sr-only">Content :</label>
        <input type="text" name="Content" id="inputContent" class="form-control" placeholder="Write your content here" required>
        <div class="checkbox">
  
        </div>
        <button type="submit" >POST THIS</button>
        <button type="submit" >DELETE THIS POST</button>
        <button type="submit" >EDIT THIS POST</button>
      </form>

    </div> 

  </body>
</html>