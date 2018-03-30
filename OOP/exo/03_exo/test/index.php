<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include 'Database.php';
include 'User.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Add New User : </h2>
  <a href=""></a>
  <form class="" action="index.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" value="">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" value="">
    <br>
    <label for="pwd">Password</label>
    <input type="password" name="pwd" value="">
    <br>
    <button type="submit" name="button">Submit</button>
  </form>
  <?php
  $user = new User();
  $list = $user->test();
    foreach ($list as $test) {
      echo $test['username'] . '<br>';
    }

  if (isset($_POST['button'])) {
    $postUsername = $_POST['username'];
    $postEmail = $_POST['email'];
    $postPwd = $_POST['pwd'];
    if (isset($_POST) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
      $user->insertNewUSer($postUsername, $postEmail, $postPwd);
      echo "User added succesfully";
    } else {
      echo 'Please fill in all required fields';
    }
  }
   ?>


  <h2>Login</h2>
  <form class="" action="index.php" method="post">
    <label for="loginUsername">Username</label>
    <input type="text" name="loginUsername" value="">
    <br>
    <label for="loginPwd">Password</label>
    <input type="password" name="loginPwd" value="">
    <br>
    <button type="submit" name="loginBtn">Login</button>
  </form>
  <?php
    $user->login('choco', sha1('lat'));
    if (isset($_GET) && $_GET['connection']) {
      echo 'connected';
    }

  // if (isset($_POST['loginBtn'])) {
  //   $user->login();
  //   if (isset($_GET) && $_GET['noConnection']) {
  //     echo 'Wrong login or password';
  //   }
  //
  //   if (isset($_GET) && $_GET['fillIn']) {
  //     echo 'Please fill in Login field';
  //   }
  // }
   ?>
</body>
</html>
