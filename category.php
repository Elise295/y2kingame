<?php
require_once __DIR__ . '/controllers/home.php';
require_once __DIR__ . '/controllers/game.php';

$mysqli = (new Database())->getConnectToQuery();
if ($categoryId != null) {
    $query = mysqli_query($mysqli, "SELECT * FROM tbl_category where category_id = $categoryId");
    $result = mysqli_fetch_assoc($query);
}


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="resource/whiteshortlogo.png">
    <title>
        <?php if ($categoryId != null) {
            echo $result['category_name'];
        } else {
            echo "All";
        }
        ;
        echo " game" ?>
    </title>
    <link rel="stylesheet" href="css/category.css">
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
    <div class="row cover">
        <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;"
            src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
    </div>
    <?php require_once __DIR__ . '/components/navbar.php'; ?>

    <div class="content">
        <div class="row-breadcrumb" style="height: 30px;">
        </div>
        <div class="container-fluid main-content">
            <div class="row searchbar-content" style="margin-left:-15px;margin-right:-15px;">
                <div class="category-list col-md-2 col-12 d-md-block d-flex flex-wrap">
                    <div class="label">
                        <label style="font-size: 32px; color: white; margin-bottom: 30px;">CATEGORY</label>
                    </div>
                    <?php
                    foreach ($categoryList as $item) {

                        echo "<div class=\"form-check\">
<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\" ";
                        if ($categoryId == $item->getCategoryID() . '') {
                            echo 'checked';
                        }
                        echo ">
<label class=\"form-check-label\" for=\"flexCheckDefault\">
    ";
                        echo $item->getCategoryName();
                        echo "
</label>
</div>";

                    }
                    ?>

                </div>
                <div class="row col-10" style="margin-left:-15px;margin-right:-15px;">
                    <div class="search-category" style="margin-left: 650px;">
                        <label style="margin: 15px 10px 0px 200px; color: white;">sort by:</label>
                        <select class="sortby" onchange="sortOption()">
                            <?php
                            echo "<option value=\"sortDefault\"";
                            if ($sort == 'sortDefault') {
                                echo 'selected';
                            }
                            ;
                            echo ">choose its condition</option>";
                            echo "<option value=\"sortByDateReverse\"";
                            if ($sort == 'sortByDateReverse') {
                                echo 'selected';
                            }
                            ;
                            echo ">from newest to oldest</option>";
                            echo "<option value=\"sortByDate\"";
                            if ($sort == 'sortByDate') {
                                echo 'selected';
                            }
                            ;
                            echo ">from oldest to newest</option>";
                            echo "<option value=\"sortByPrice\"";
                            if ($sort == 'sortByPrice') {
                                echo 'selected';
                            }
                            ;
                            echo ">from lowest to highest</option>";
                            echo "<option value=\"sortByPriceReverse\"";
                            if ($sort == 'sortByPriceReverse') {
                                echo 'selected';
                            }
                            ;
                            echo ">from highest to lowest</option>";
                            ?>


                        </select>
                    </div>
                    <div class="main-game row col-12" style="margin-left:-15px;margin-right:-15px;">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="cards-wrapper">
                                        <?php
                                        foreach ($listGameByCategory as $item) {
                                            // ";echo $item->getName();echo" echo "<br>";
                                            echo "
                                                <div class=\"card\" style=\"border-radius: 10px;background-color: #CBE4DE;\">
                                                <img src=";
                                            echo $item->getImgURL();
                                            echo " class=\"card-img-top\" alt=\"...\">
                                                <div class=\"card-body\">
                                                    <a href=\"detail.php?id=";
                                            echo $item->getGameId();
                                            echo "\">
                                                        <h5 class=\"card-title\">";
                                            echo $item->getName();
                                            echo "</h5>
                                                    </a>
                                                    <h6 class=\"card-price\">";
                                            echo $item->getPriceFormat();
                                            echo "</h6>
                                                    <p class=\"card-text\">";
                                            echo $item->getIntro();
                                            echo "</p>
                                                    <p class=\"card-date\">";
                                            echo $item->getReleaseDateFormat();
                                            echo "</p>
                                                    <a id=\"add\" href=\"cart.php?gameId=";
                                            echo $item->getGameId();
                                            echo "\" class=\"btn btn-outline-dark\">
                                                        <i class=\" fa fa-shopping-cart\"></i>
                                                        ADD TO CART</a>
                                                    <a id=\"buy\" href=\"#\" class=\"btn btn-outline-dark\">Buy now</a>
                                                </div>
                                            </div>
                                            ";
                                        }
                                        ?>

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
    <?php require_once __DIR__ . '/components/footer.php'; ?>
    <script>

        function sortOption() {

            var selectElement = event.target; // Lấy phần tử select đã thay đổi
            var selectedOption = selectElement.value; // Lấy giá trị tùy chọn đã chọn
            var linkTo = "category.php?" + selectedOption + "&state=" + "<?php echo $state ?>" + "&valueState=" + "<?php echo $valueState ?>" + "&categoryId=" + "<?php echo $categoryId ?>";
            window.location.href = linkTo;


            // Thực hiện các hành động khác tùy ý
        }
    </script>

</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</html>