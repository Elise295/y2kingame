<?php
require_once __DIR__ . '/controllers/home.php';
require_once __DIR__ . '/controllers/cart.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="resource/whiteshortlogo.png">
        <title>Your Cart</title>
        <link rel= "stylesheet" href="css/detail.css"></link>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">

    </head>
    <body>
        <style>
            @media screen and (max-width: 1000px) {
                .image-cart-item{
                    display: none;
                }
            }
        </style>
        <div class="row cover">
            <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;" src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
        </div>
        <div class="main-fix">
            <?php require_once __DIR__ . '/components/navbar.php'; ?>

            <div class="container-fluid" id="content">
                <h2 style="margin: 0px 0px 40px 200px;">YOUR CART</h2>
                <div class="cart-detai container" style="background-color: #CBE4DE; width: 75%; border-radius: 5px; padding: 20px;">
                    <h3 style="color: #2E4F4F; height: 60px; border-radius: 3px; 
                                border-bottom: #2E4F4F; border-color: #2E4F4F;
                                border-bottom-style: dashed;">Order Summary</h3>
                    <table class="order-summary-table" style="width: 100%;">
                        <tr class="header-table">
                            <th style="color: #2E4F4F;font-size: 24px;">NAME</th>
                            <th></th>
                            <th style="color: #2E4F4F;font-size: 24px;">PRICE</th>
                        </tr>
                        <?php
                            foreach($listGameByAcc as $item){
                                echo "
                                <tr class=\"detai-table\">
                            <td><img class=\"image-cart-item \" style=\"width: 286px;\" src=\"";echo $item->getImgURL();echo"\"></td>
                            <td>";echo $item->getName();echo"</td>
                            <td>";echo $item->getPriceFormat();echo"</td>
                            <td>
                            <form action=\"cart.php\" method=\"get\">
                                    <input type=\"hidden\" name=\"gameId\" value=\"-1\">
                                    <input type=\"hidden\" name=\"gameIdDelete\" value=\"";echo $item->getGameId();echo"\">
                                   <button>x</button>
                                </form>
                            </td>
                        </tr>
                                ";
                            }

                        ?>
                        <tr>
                            <td></td>
                            <td>Total:<?php echo $sumItem; ?></td>
                            <td><?php echo $sumPriceFormat; ?></td>
                            <td>
                                <a href="#" class="
                                btn btn-purchase" style="background-color: #2E4F4F; color: aliceblue;">Purchase Now</a>
                            </td>
                        </tr>
                    </table>
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