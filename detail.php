<?php
  $id = $_GET['id'];
  require_once __DIR__ . '/controllers/home.php';
  $mysqli = (new Database())->getConnectToQuery();
  $query_game_detail = mysqli_query($mysqli, "SELECT * FROM tbl_game join tbl_category on tbl_game.category_id = tbl_category.category_id where game_id = {$id}");
  $query_game_images = mysqli_query($mysqli, "SELECT * FROM tbl_image_game where game_id = {$id}");
  $query_game_images_2 = mysqli_query($mysqli, "SELECT * FROM tbl_image_game where game_id = {$id}");
  $result_game_detail =  mysqli_fetch_assoc($query_game_detail);
  $game_id = $result_game_detail['game_id'];
  $game_name = $result_game_detail['game_name'];
  $game_price =  number_format($result_game_detail['game_price']) . 'đ';
  $game_intro = $result_game_detail['game_intro'];
  $game_developer = $result_game_detail['game_developer'];
  $game_releasedate= $result_game_detail['game_releasedate'];
  $game_category_id= $result_game_detail['category_id'];
  $game_category = $result_game_detail['category_name'];
  $image_url = $result_game_detail['image_url'];
  $game_configuration = $result_game_detail['game_configuration']
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="image/whiteshortlogo.png">
        <title><?php echo $game_name?> </title>
        <link rel= "stylesheet" href="css/detail.css"></link>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    </head>
    <body>
      <style>
        .row{
          margin:0px;
          
        }
      </style>
        <div class="row cover">
            <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;" src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
        </div>
        <div class="main-fix">
        <?php require_once __DIR__ . '/components/navbar.php'; ?>

          <div class="container-fluid" id="content">
            <div class="row-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="category.php">ALL GAMES</a></li>
              <li class="breadcrumb-item"><a href="category.php?id=<?php echo $game_category_id ?>"><?php echo $game_category ?></a></li>
              <li class="breadcrumb-item active" aria-current="page" style="color: white;"><?php echo $game_name ?></li>
            </ol>
            </div>
            <div class="row name-game-rating">
              <h2 style=" margin-bottom: 20px;" class="name-game col-md-9 col-6"><?php echo $game_name ?></h2>
              <div class="ratings col-md-3 col-6">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-uncolor"></i>
              </div>
            </div>
            <div class="row main" style="">
                <section class="main-left col-6">
                  <div class="slider-for">
                    <?php
                      while($image = mysqli_fetch_assoc($query_game_images)) {
                        echo <<<HTML
                          <div>
                            <img src="{$image['image_link']}" style="width: 100%;">
                          </div>
                        HTML;
                      }
                    ?>
                  </div>
                  <div class="slider-nav" style="margin-top: 30px;">
                    <?php
                      while($image = mysqli_fetch_assoc($query_game_images_2)) {
                        echo <<<HTML
                          <div style="margin-left: 10px;">
                            <img src="{$image['image_link']}" style="width: 100%;">
                          </div>
                          HTML;
                        }
                    ?>
                  </div>
                  <div class='text-white'>
                    <h4>Configurations</h4>
                    <?php 
                      echo "<p style='font-size:13px'>{$game_configuration}</p>"
                    ?>
                  </div>
                </section>
                <div class="main-right col-6">
                  <div class="main-right-top">
                    <img src="<?php echo $image_url ?>" style="width: 70%;">
                    <p class="detail-game">
                      <?php echo $game_intro ?>
                    </p>
                  </div>
                  <div class="main-right-bottom" style="color: #CBE4DE; margin-top: px;">
                    <label class="release-date" style="font-family: ahamono;">
                      RELEASE DATE: <?php echo $game_releasedate ?>
                    </label>
                    <br>
                    <label class="developer" style="font-family: ahamono;">
                      DEVELOPER: <?php echo $game_developer ?>
                    </label>
                    <br>
                    <label class="genre" style="font-family: ahamono;">
                      GENRE: <?php echo $game_category ?>
                    </label>
                  </div>
                </div>
            </div>
            <div class="row info-buy col-12" style="margin-top: 50px;">
              <div class="row box-buy col-6">
                <div class="box-buy-left col-sm-6 col-12">
                  <h5 class="buy-name">Buy <?php echo $game_name?></h5>
                  <p class="Price" style="font-size: 20px; font-family: ahamono;"><?php echo $game_price?></p>
                </div>
                <div class="box-buy-right col-sm-6 col-12">
                  <h5>AVAILABLE ON:</h5>
                  <i class="fa-brands fa-windows" style="color: white;"></i>
                  <i class="fa-brands fa-apple" style="color: white;"></i>
                </div>
              </div>
              <div class="button-group col-3" style="">
                <a href="cart.php?gameId=<?php echo $game_id?>" class="btn btn-outline-dark" style="color: white; border-color: white;">
                  <i class=" fa fa-shopping-cart" style="color:aliceblue"></i>
                  ADD TO CART</a>
                <a href="#" class="btn btn-outline-dark" style="background-color: rgb(223, 223, 223);">Buy now</a>
              </div>
            </div>
          </div>
        </div>
        <?php require_once __DIR__ . '/components/footer.php'; ?>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="js/detail.js"></script>
  </html>