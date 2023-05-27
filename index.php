<?php
  require_once __DIR__ . '/controllers/home.php';
  $mysqli = (new Database())->getConnectToQuery();

  $result = mysqli_query($mysqli, "SELECT * FROM tbl_game limit 3");

  $flag = 0;
  $flag_1 = 0;
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="resource/whiteshortlogo.png">
  <title>Welcome to Y2Kin - Steam Wallet Code </title>
  <link rel="stylesheet" href="css/home.css">
  </link>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
        
        <div class="cover">
            <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;" src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
        </div>
        <?php require_once __DIR__ . '/components/navbar.php'; ?>

        <div class="content">
          <div id="demo" class="carousel slide container" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <?php
              while ($res = mysqli_fetch_assoc($result)){
                // $image = mysqli_fetch_array(mysqli_query($mysqli, "SELECT image_url FROM tbl_game where game_id = {$res['game_id']}"));
                if($res['image_url'] == NULL) continue;
                if($flag==0){
                  $price = number_format($res['game_price']) . 'đ';

                  echo <<<HTML
                  <div class="carousel-item active">
                    <img src="{$res['image_url']}" class="image-carousel d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Staring at {$price}</p> 
                      <a  href="cart.php?gameId={$res['game_id']}" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" style="color:aliceblue"></i>
                        ADD TO CART</a>
                      <a href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                  HTML;
                  $flag = 1;
                }else{
                  echo <<<HTML
                  <div class="carousel-item">
                    <img src="{$res['image_url']}" class="image-carousel d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Staring at {$res['game_price']}đ</p> 
                      <a  href="cart.php?gameId={$res['game_id']}" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" style="color:aliceblue"></i>
                        ADD TO CART</a>
                      <a href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                  HTML;
                }
              };
            ?>
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
          <div class="label container justify-content-center" style="padding: 70px 0px 30px 0px;">
              <h2 style="padding-left: 40px;">Lastest Game</h2>
          </div>
          <div id="lastgame" class="carousel slide container" data-ride="carousel">
              <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="cards-wrapper">
                    <?php
                      $query_lasted_game = mysqli_query($mysqli, "SELECT * from tbl_game ORDER BY game_releasedate DESC limit 3 ");
                      while($lasted_game = mysqli_fetch_assoc($query_lasted_game)){
                        $price = number_format($lasted_game['game_price']) . 'đ';

                        echo <<<HTML
                          <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                            <img src="{$lasted_game['image_url']}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="detail.php?id={$lasted_game['game_id']}">
                                <h5 class="card-title">{$lasted_game['game_name']}</h5>
                              </a>
                              <h6 class="card-price">{$price}</h6>
                              <p class="card-text">{$lasted_game['game_intro']}</p>
                              <p class="card-date">{$lasted_game['game_releasedate']}</p>
                              <a id="add" href="cart.php?gameId={$lasted_game['game_id']}" class="btn btn-outline-dark">
                                <i class=" fa fa-shopping-cart" ></i>
                                ADD TO CART</a>
                              <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                            </div>
                          </div>
                        HTML;
                      };
                    ?>
                  </div>
                </div> 
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <?php
                      $query_lasted_game = mysqli_query($mysqli, "SELECT * from tbl_game ORDER BY game_releasedate DESC limit 3,3 ");
                      while($lasted_game = mysqli_fetch_assoc($query_lasted_game)){
                        $price = number_format($lasted_game['game_price']) . 'đ';
                        echo <<<HTML
                          <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                            <img src="{$lasted_game['image_url']}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="detail.php?id={$lasted_game['game_id']}">
                                <h5 class="card-title">{$lasted_game['game_name']}</h5>
                              </a>
                              <h6 class="card-price">{$price}</h6>
                              <p class="card-text">{$lasted_game['game_intro']}</p>
                              <p class="card-date">{$lasted_game['game_releasedate']}</p>
                              <a id="add" href="cart.php?gameId={$lasted_game['game_id']}" class="btn btn-outline-dark">
                                <i class=" fa fa-shopping-cart" ></i>
                                ADD TO CART</a>
                              <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                            </div>
                          </div>
                        HTML;
                        };
                      ?>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#lastgame" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#lastgame" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          <div class="label container justify-content-center" style="padding: 70px 0px 30px 0px;">
              <h2 style="padding-left: 40px;">Free Game</h2>
          </div>
          <div id="freegame" class="carousel slide container" data-ride="carousel">
              <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="cards-wrapper">
                    <?php
                      $query_lasted_game = mysqli_query($mysqli, "SELECT * from tbl_game where game_price=0 ORDER BY game_releasedate DESC limit 3 ");
                      while($lasted_game = mysqli_fetch_assoc($query_lasted_game)){
                        echo <<<HTML
                          <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                            <img src="{$lasted_game['image_url']}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <a href="detail.php?id={$lasted_game['game_id']}">
                              <h5 class="card-title">{$lasted_game['game_name']}</h5>

                              </a>
                              <h6 class="card-price">Free</h6>
                              <p class="card-text">{$lasted_game['game_intro']}</p>
                              <p class="card-date">{$lasted_game['game_releasedate']}</p>
                              <a id="add" href="cart.php?gameId={$lasted_game['game_id']}" class="btn btn-outline-dark">
                                <i class=" fa fa-shopping-cart" ></i>
                                ADD TO CART</a>
                              <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                            </div>
                          </div>
                        HTML;
                      };
                    ?>
                  </div>
                </div> 
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <?php
                      $query_lasted_game = mysqli_query($mysqli, "SELECT * from tbl_game  where game_price=0 ORDER BY game_releasedate DESC limit 3,3 ");
                      while($lasted_game = mysqli_fetch_assoc($query_lasted_game)){
                        

                        echo <<<HTML
                          <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                            <img src="{$lasted_game['image_url']}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="detail.php?id={$lasted_game['game_id']}">
                              <h5 class="card-title">{$lasted_game['game_name']}</h5>

                              </a>
                              <h6 class="card-price">Free</h6>
                              <p class="card-text">{$lasted_game['game_intro']}</p>
                              <p class="card-date">{$lasted_game['game_releasedate']}</p>
                              <a id="add" href="cart.php?gameId={$lasted_game['game_id']}" class="btn btn-outline-dark">
                                <i class=" fa fa-shopping-cart" ></i>
                                ADD TO CART</a>
                              <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                            </div>
                          </div>
                        HTML;
                        };
                      ?>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#freegame" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#freegame" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          <div id="mediagame">
            <div class="label container justify-content-center" style="padding: 70px 0px 30px 0px;">
              <h2 style="padding-left: 40px;">Category</h2>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-media card-1">
                    <a href="category.php?categoryId=1">
                      <h5>Action</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-2">
                    <a href="category.php?categoryId=4">
                      <h5>Building</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-3">
                    <a href="category.php?categoryId=5">
                      <h5>Casual</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-4">
                    <a href="category.php?categoryId=2">
                      <h5>Adventure</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-5">
                    <a href="category.php?categoryId=9">
                      <h5>RPG</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-6">
                    <a href="category.php?categoryId=12">
                      <h5>Simulation</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid contenedor text-center">
            <h1 class="text-center">RETRO GAMES BY Y2k Company</h1>
            <div class=" container text-center">
               <div class="col-lg-12 col-md-6 col-sm-8 col-xs-12 container_foto">
                  <div class="ver_mas text-center">
                     <span  class="lnr lnr-eye"></span>
                     <p>For those not in the know, Y2K roughly refers to the years 1997-2003 even though the name directly translates to “The Year 2000.” 
                      This era marked many beginnings, but the  one we’re going to focus on was a new beginning for media itself.
                      You see, the early 2000s brought about a new aesthetic when it came to not just video games, but everything around them.</p>
                  </div>
                  <article class="text-left">
                     <h2>TITULO DE <br>LA GAME</h2>
                     <h4>The Game is a point-and-click adventure game developed by Runecraft</h4>
                  </article>
                  <img src="resource/gif10.gif" alt="">
               </div>
            </div>
         </div>
         
      </div>
      <?php require_once __DIR__ . '/components/footer.php'; ?>
        </body>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

</html>