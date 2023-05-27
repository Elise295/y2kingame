<style>
     .row{
        margin:0px;
    } 
    a:hover{
        text-decoration: none;
        cursor: pointer;
    }
    .nav-item{
        transition: 0.3s;
    }
    .input-group .autosearch-form{
        width: 500px;
    }
    .nav-responsive.nav{
        display: none;
    }
    @media screen and (max-width: 1300px) {
        .input-group .autosearch-form{
            width: 300px;
        }   
    }

    @media screen and (max-width: 1080px) {
        .input-group .autosearch-form{
            width: 400px;
        }
        #fixnav .row .nav-full{
            display:none;
        }
        .login{
            display: none;
        }
        .nav-responsive.nav{
            display: flex;
        } 
   
    }

    @media screen and (max-width: 700px) {
        .input-group .autosearch-form{
            width: 150px;
        }
       
        
    }

</style>

<div class="navbar header" id="fixnav">
    <div class="row left">
        <a href="index.php" class="logo">
            <img id="logo" height="60px" width="200px" src="resource/whitelogo.png">
        </a>
        <ul class="nav nav-full">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Store</a>
                </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="category.php">All games</a>
                    <?php
                        foreach ($categoryList as $item) {
                        echo '<a class="dropdown-item" href="category.php?categoryId=';
                        echo $item->getCategoryID();
                        echo '">';
                        echo $item->getCategoryName();
                        echo '</a>';
                        }
                    ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
            </li>
        </ul>
    </div>
    <div class="middle">
        <div class="inputsearch">
            <form action='category.php' method='get'>
            <div class="input-group" style="margin-bottom: 5px,">
                <input placeholder="Search the name of game..." class="form-control autosearch-form search"
                type="text" name="search" title="Search the name of game you are looking for"
                enterkeyhint="Search" autocomplete="off" autocorrect="off" aria-label="Search" 
                aria-autocomplete="list" aria-controls="react-autowhatever-1" autocapitalize="off" value=""
                style="border-radius: 10px;">
                <span class="input-group-append">
                <button class="btn p-0 border-0" style="width: 40px;">
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
    <div class="right login">
        <?php
        if (isset($_COOKIE['user'])) {
            $cookieValue = $_COOKIE['user'];
            echo '<ul class="nav">
            <a class="nav-link" href="profile.php">
            <img src="resource/whiteshortlogo.png" height="40px" width="50px">
            </a>
    </ul>';

        } else {
            echo '<ul class="nav">
            <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
            </li>
        </ul>';
        }
        ?>

    </div>
    <div class="row left">
        <ul class="nav-responsive nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Store</a>
                </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="category.php">All games</a>
                    <?php
                        foreach ($categoryList as $item) {
                        echo '<a class="dropdown-item" href="category.php?categoryId=';
                        echo $item->getCategoryID();
                        echo '">';
                        echo $item->getCategoryName();
                        echo '</a>';
                        }
                    ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php" >Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
            </li>
            <li class="nav-item">
            <?php
                if (isset($_COOKIE['user'])) {
                    $cookieValue = $_COOKIE['user'];
                    echo '<ul class="nav">
                    <a class="nav-link" href="profile.php">
                    <img src="resource/whiteshortlogo.png" height="40px" width="50px">
                    </a>
            </ul>';

                } else {
                    echo '<ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                    </li>
                </ul>';
                }
                ?>

            </li>
        </ul>
       
        
    </div>
</div>