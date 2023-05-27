<?php
    require_once __DIR__ . '/controllers/home.php';

    if (isset($_POST['logout'])) {
        setcookie("user", "", time()-3600,'/');
        setcookie("username", "", time()-3600,'/');
        // setcookie("password", $account->getPassword(), time() + (86400 * 30), "/");
        setcookie("name", "", time()-3600,'/');
        setcookie("phone", "", time()-3600,'/');
        setcookie("address", "", time()-3600,'/');

        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <link rel="icon" href="./resource/whiteshortlogo.png">
        <title>Profile </title>
        <link rel= "stylesheet" href="./css/home.css"></link>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    </head>
  <body>
    <style>
        .content{
            margin: 0px;
            padding: 30px;
            text-align:center;
            color:white;
        }
    </style>
    <div class="cover">
        <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;" src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
    </div>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>
    <div class="content"> 
        <p><h4>Username:</h4> <?php
        if (isset($_COOKIE['username'])) {
            echo $_COOKIE['username'];
            
        }?></p>
        <p><h4>Name:</h4> <?php
        if (isset($_COOKIE['username'])) {
            echo $_COOKIE['name'];
            
        }?></p>
        <p><h4>Phone:</h4> <?php
        if (isset($_COOKIE['username'])) {
            echo $_COOKIE['phone'];
            
        }?></p>
        <p><h4>Address:</h4> <?php
        if (isset($_COOKIE['username'])) {
            echo $_COOKIE['address'];
            
        }?></p>
        <form method="post" action="profile.php">
            <button type="submit" name="logout">Log out</button>
        </form>
    </div>

    <!-- footer -->
    <?php require_once __DIR__ . '/components/footer.php'; ?>

  </body>
</html>