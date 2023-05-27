<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width-device-width, initial-scale=1.0"> -->
	<title> Y2K Login</title>
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
<!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">   
</head>

<body>
    <header>
    <div class="row align-items-center" >
        <img src="../resource/y2kin_logo.jpg" alt="y2kin_logo" class="col-auto" id="logo">
        <h4 class="col-auto">Y2Kin</h4>
    </div>
        
	</header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12" style="height: 100%; width: auto;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>
            
                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../resource/minecraft.jpg" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../resource/PUBG.jpg" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="../resource/Genshin_Impact.jpg" alt="Slide 3">
                        </div>
                    </div>
            
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>                
                </div>
            </div>
        <!-- Form log in -->
            <div class="col-lg-4 col-md-12" id="form_infor" style="height: 100%; width: auto;">
                <h1 class="text-center"> Y2Kin </h1>                
                <h4 style="padding-left: 15px;">Sign in </h4>
                <form action="../class/logincontroller.php" method="POST">
                    <input type="text" placeholder="Username" id="username" name="username" aria-label="Name" >
                    <input type="password" placeholder="Password" id="password" name="password" aria-label="Password" >
                    <label for="stay-logged-in">Stay logged in</label>
                    <input type="checkbox" id="stay-logged-in" name="stay-sigged-in">
                    <br/>
                    <input type="submit" value="Login">              
                </form>
            </div>
        </div>
    </div>
<script src="../js/jquery.slim.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
</body>