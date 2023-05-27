<!DOCTYPE html>
<html>
    <head>
        <title>Indie Games</title>
        <link rel= "stylesheet" href="category.css"></link>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="row cover">
            <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;" src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
        </div>
        <div class="navbar header">
            <div class="row left">
                    <a href="home.php" class="logo">
                        <img height="60px" width="200px" src="../resource/whitelogo.png">
                    </a>
                    <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Store</a>
                              </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Adventure</a>
                                    <a class="dropdown-item" href="#">Arcade</a>
                                    <a class="dropdown-item" href="#">Building</a>
                                    <a class="dropdown-item" href="#">Casual</a>
                                    <a class="dropdown-item" href="#">Dating</a>
                                    <a class="dropdown-item" href="#">Fighting</a>
                                    <a class="dropdown-item" href="#">Indie</a>
                                    <a class="dropdown-item" href="#">JRPG</a>
                                    <a class="dropdown-item" href="#">RPG</a>
                                    <a class="dropdown-item" href="#">Puzzle</a>
                                    <a class="dropdown-item" href="#">Role-Playing</a>
                                    <a class="dropdown-item" href="#">Simulation</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://colorhunt.co/palettes/random">Cart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://colorhunt.co/palettes/random">Library</a>
                            </li>
                    </ul>
            </div>
            <div class="middle">
                    <div class="inputsearch">
                      <form>
                        <div class="input-group" style="margin-bottom: 5px,">
                          <input placeholder="Search the name of game..." class="form-control autosearch-form"
                          type="text" name="email" title="Search the name of game you are looking for"
                          enterkeyhint="Search" autocomplete="off" autocorrect="off" aria-label="Search" 
                          aria-autocomplete="list" aria-controls="react-autowhatever-1" autocapitalize="off" value=""
                          style="width: 500px; border-radius: 10px;">
                          <span class="input-group-append">
                            <button class="btn p-0 border-0" style="width: 20px; margin:-10px 0 0 10px;">
                              <svg class="svg-inline--fa fa-search fa-w-16" data-icon="search" color="white"
                              role="img" data-prefix="fas" viewBox="0 0 512 512" xmnls="http://www.w3.org/2000/svg"
                              aria-hidden="true" focusable="false">
                              <path fill="currentColor" 
                              d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 
                              322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 
                              12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 
                              336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 
                              70.7-57.2 128-128 128z">
                              </path>
                              </svg>
                            </button>
                          </span>
                        </div>
                      </form>
                    </div>
            </div>
            <div class="right">
                <ul class="nav">
                        <a class="nav-link" href="https://colorhunt.co/palettes/random">Log In</a>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="row-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">ALL GAMES</a></li>
                  <li class="breadcrumb-item"><a href="#">Indie</a></li>
                </ol>
            </div>
            <div class="container-fluid main-content">
                <div class="row searchbar-content">
                    <div class="category-list col-2">
                        <div class="label">
                            <label style="font-size: 32px; color: white; margin-bottom: 30px;">CATEGORY</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Action
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Adventure
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Arcade
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Building
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Causual
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Adventure
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Fighting
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Indie
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              JRPG
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              RPG
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Puzzle
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Role-Playing
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Simulation
                            </label>
                          </div>
                    </div>
                    <div class="row col-10">
                        <div class="search-category row col-12">
                            <div class="searchbar-left row col-6">
                                <div class="row logo">
                                    <a href="http://127.0.0.1:5500/?snr=1_4_4___12" class="shortlogo">
                                        <img height="60px" width="60px" src="image/shortlogo.png">
                                    </a>
                                </div>
                                <div class="row">
                                    <button class="btn btn-search" style="background-color: #2E4F4F;color: white;"><i class="fa fa-fw fa-search"></i>SEARCH</button>
                                </div>
                                <div class="row">
                                    <input id="shortsearch" placeholder="Search the name of game..." class="form-control autosearch-form"
                                    type="text" name="email" title="Search the name of game you are looking for"
                                    enterkeyhint="Search" autocomplete="off" autocorrect="off" aria-label="Search" 
                                    aria-autocomplete="list" aria-controls="react-autowhatever-1" autocapitalize="off" value="">
                                </div>
                            </div>
                            <div class="searchbar-right row col-6">
                                <label style="margin: 15px 10px 0px 200px;">sort by:</label>
                                <select class="bydate">
                                    <option value="0">date</option>
                                    <option value="">newest</option>
                                    <option value="">oldest</option>
                                </select>
                                <select class="byprice">
                                    <option value="0">price</option>
                                    <option value="">highest price</option>
                                    <option value="">lowest price</option>
                                </select>
                            </div>
                        </div>
                        <div class="main-game row col-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                        <div class="cards-wrapper">
                                            <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                                                <img src="image/retro1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Crocodile Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">Dec 24th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                            </div>
                                            <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                                            <img src="image/retro2.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Boom Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">April 20th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                            </div>
                                            <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                                            <img src="image/retro3.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">MakeUp Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">June 2th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                        <div class="cards-wrapper">
                                            <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                                                <img src="image/retro1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Crocodile Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">Dec 24th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                            </div>
                                            <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                                            <img src="image/retro2.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Boom Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">April 20th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                            </div>
                                            <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                                            <img src="image/retro3.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">MakeUp Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">June 2th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                        <div class="cards-wrapper">
                                            <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                                                <img src="image/retro1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Crocodile Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">Dec 24th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                            </div>
                                            <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                                            <img src="image/retro2.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Boom Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">April 20th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                            </div>
                                            <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                                            <img src="image/retro3.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">MakeUp Game</h5>
                                                <h6 class="card-price">165.000đ</h6>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <p class="card-date">June 2th,2022</p>
                                                <a id="add" href="#" class="btn btn-outline-dark">
                                                <i class=" fa fa-shopping-cart" ></i>
                                                ADD TO CART</a>
                                                <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pagination">
                <ul class="pagination" style="margin-left: 700px;">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="navbar footer-top bg-dark">
                <div class="pageinfo row">
                    <ul id="servicemenu" class="nav left-top-bar">
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">Company</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">Affiliation Program</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">Helps</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">Docs</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">Terms of service</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">Privacy policy</a>
                        </li>
                    </ul>
  
                    <ul id="socialmenu" class="nav right-top-bar">
                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-youtube" style="color: aliceblue;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-facebook" style="color: aliceblue;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://discord.com/" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-discord" style="color: aliceblue;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-twitter" style="color: aliceblue;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-breadcrumbs"></div>
            <div class="footer-mid">
                <div class="footer-links-container container-fluid bg-light">
                  <div class="row">
                    <div class="footer-links col-sm-3">
                      <h2 class="pb-1 h6 text-uppercase">Browse Categories
                      </h2>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Game Details</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">All Games</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Books</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Review</a>
                  </div>
                  <div class="footer-links col-sm-3">
                      <h2 class="pb-1 h6 text-uppercase">Infomation
                      </h2>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">About Y2K</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">All Games</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Books</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Review</a>
                  </div>
                  <div class=" email-container col-sm-4">
                    <h2 class="h6 pb-1 email-title">Join our Newsletter</h2>
                    <div class="email-subscribe">
                      <form>
                        <div class="input-group" style="margin-bottom: 5px">
                          <input required placeholder="Enter your email" class="form-control"
                          type="email" name="email" title="Enter your email address"
                          enterkeyhint="send" aria-label="email" value="">
                          <span class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit">Sign Up</button>
                          </span>
                        </div>
                        <p class="small text" style="font-size: 10px;">
                          You can unsubscribe via the newsletter at any time. By subscribing to our newsletter you agree to our
                          <a href="https://www.w3schools.com/bootstrap/bootstrap_examples.asp" target="_blank" 
                          rel="noopener noreferrer">Privacy Policy</a>.
                        </p>
                      </form>
                    </div>
                </div>
                  </div>
                </div>
            </div>
            <div class="footer-bot bg-dark" style="height: 80px;">
                <p class="companyinfo" style="font-size: 11px; color: aliceblue; margin: 30px 220px;padding-top: 30px">
                  © 2023 Focus Multimedia Ltd. All rights reserved. All trademarks are property of their respective owners. Terms and Conditions / Privacy Policy / Cookie Policy
                </p>
            </div>
        </div>
      </body>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="../js/jquery.slim.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/popper.min.js"></script>
    </html>