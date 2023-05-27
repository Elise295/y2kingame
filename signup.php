<!DOCTYPE html>
<head lang="en">
        <meta charset="UTF-8">
        <link rel="icon" href="./resource/whiteshortlogo.png">
        <title>Welcome to Y2Kin - Steam Wallet Code </title>
        <link rel= "stylesheet" href="./css/home.css"></link>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- narbar -->
    <div class="navbar header" id="fixnav">
        <div class="row left">
                <a href="index.php" class="logo">
                    <img id="logo" height="60px" width="200px" src="./resource/whitelogo.png">
                </a>
        </div>
        <div class="right">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                    <!-- Click Log in if already have an acc -->
                </li>
            </ul>
        </div>
    </div>
    <!-- content -->
    <div class="container-fluid">
        <div class="row">
            <!-- slider -->
            <div class="col-lg-9 col-md-12" style="height: 100%; width: auto;">
                <div id="demo" class="carousel slide container" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./resource/gif7.gif" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    <div class="carousel-item">
                        <img src="./resource/gif8.gif" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./resource/gif9.gif" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> 
        <!-- Form log in -->
            <div class="col-lg-3 col-md-12" id="form_infor" style="height: 100%; margin-top:100px;">
                <h4 style="padding-left: 15px;"> Sign up </h4>
                <form action="./controllers/signup.php" method="POST">
                    <input type="text" placeholder="Username" id="username" name="username" aria-label="Name" style="margin: 5px;" required >
                    <input type="password" placeholder="Password" id="password" name="password" aria-label="Password" style="margin: 5px;" required>
                    <input type="password" placeholder="RePassword" id="repassword" name="repassword" aria-label="RePassword" style="margin: 5px;" required>
                    <input type="text" placeholder="Name" id="fullname" name="fullname" aria-label="fullname" style="margin: 5px;" required>
                    <input type="phone" placeholder="Phone" id="phone" name="phone" aria-label="phone" style="margin: 5px;" required>
                    <input type="text" placeholder="Adress" id="address" name="address" aria-label="address" style="margin: 5px;" required>
                    </br>
                    <input type="submit" class="btn" value="Sign up" style="margin: 10px;"> 
                    <p style="margin-left: 40px;"> Already have an account? </p>       
                    <a href="login.php" class="btn btn-outline-dark" >Log In</a>
                </form>
            </div>
        </div>
    </div>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.slim.min.js"></script>
<script src="./js/popper.min.js"></script>

</body>