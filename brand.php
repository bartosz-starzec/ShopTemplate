<?php
include("./elements/footer.php");
include("./elements/topbar.php");
include("./elements/font.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="brand.bundle.css">
    <?php
    fonts();
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <?php
    topbar();
    ?>
        <!-- 
            *****************

            **   CONTENT **

            ****************
         -->

        <div class="main-content">
            <header>

                <div class="header-top">
                    <div class="brand-logo">
                        <p class="brand-logo">
                            <a href="index.php">
                                avenue <span>fashion</span>
                            </a>
                        </p>
                    </div>
                    <nav>
                        <div class="navigation">
                            <div class="dropdown">
                                <a href="" class="menu">Mens</a>
                                <div class="dropdown-content hide">
                                    <div class="dropdown-a">
                                        <a href="">Casuals</a>
                                        <a href="">Jackets</a>
                                        <a href="">Hoodies & Sweatshirts</a>
                                        <a href="">Polo Shirts</a>
                                        <a href="">Sportswear</a>
                                        <a href="">Trousers & Chinos</a>
                                        <a href="">T-Shirts</a>
                                    </div>
                                    <div class="dropdown-b">
                                        <a href="">Formal</a>
                                        <a href="">Jackets</a>
                                        <a href="">Shirts</a>
                                        <a href="">Trousers</a>
                                    </div>
                                    <div class="sale">
                                        <p>Autumn sale! <span> up to 50% off</span> </p>
                                    </div>
                                </div>

                            </div>
                            <div class="dropdown">
                                <a href="" class="menu">Womens</a>
                                <div class="dropdown-content hide">
                                    <div class="dropdown-a">
                                        <a href="">Casuals</a>
                                        <a href="">Jackets</a>
                                        <a href="">Hoodies & Sweatshirts</a>
                                        <a href="">Polo Shirts</a>
                                        <a href="">Sportswear</a>
                                        <a href="">Trousers & Chinos</a>
                                        <a href="">T-Shirts</a>
                                    </div>
                                    <div class="dropdown-b">
                                        <a href="">Formal</a>
                                        <a href="">Jackets</a>
                                        <a href="">Shirts</a>
                                        <a href="">Trousers</a>
                                    </div>
                                    <div class="sale">
                                        <p>Autumn sale! <span> up to 50% off</span> </p>
                                    </div>
                                </div>
                            </div>
                            <a href="brand.php" class="menu">The Brand</a>
                            <a href="localStores.php" class="menu">Local Stores</a>
                            <div class="dropdown">
                                <a href="lookbook.php" class="menu">Look book</a>
                                <div class="dropdown-content hide">
                                    <div class="dropdown-a">
                                        <a href="">Our lookbooks</a>
                                        <a href="">Lasted Posts(mixed)</a>
                                        <a href="">Men's Lookbook</a>
                                        <a href="">Women's Lookbook</a>

                                    </div>
                                    <div class="dropdown-b">
                                        <a href="">Your lookbook</a>

                                        <a href="">View and Edit</a>
                                        <a href="">Share</a>
                                        <a href="">Delete</a>
                                    </div>
                                    <div class="sale">
                                        <p>Autumn sale! <span> up to 50% off</span> </p>
                                    </div>
                                </div>
                            </div>
                            <label for="search" class="navigation-search">
                            <input type="text" name="search" id="search" placeholder="Search..">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <p class="menu"><i class="fa fa-bars" aria-hidden="true"></i>menu</p>
                    </nav>
                </div>
                <div class="wrapper">
                    <div class="brand-text">
                        <p class="brand-header"><span>The</span> brand</p>
                        <p class="brand-sentence">
                            company slogan goes here
                        </p>
                    </div>
                </div>
            </header>
            <div class="brand--content">
                <div class="brand--content__left-side">
                    <div class="brand--content__left-side--photo1">
                        <img src="img/brand/brandone.png" alt="">
                    </div>
                    <div class="brand--content__left-side--photo2">
                        <img src="img/brand/brandtwo.png" alt="">
                    </div>
                    <div class="brand--content__left-side--text">
                        <p class="left-side--text">
                            <span>our values, vision and strategy</span>
                            <span>the above image would be a great place for and adversiting video</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem rem sunt modi neque non tenetur assumenda adipisci dolorum corrupti similique iure,
                            pariatur tempora laboriosam voluptatum sequi sit officia ipsam nostrum.
                        </p>
                    </div>

                </div>
                <div class="brand--content__right-side">
                    <div class="brand--content__right-side--firstText">
                        <p class="right-side--firstText">
                            <span>our values, vision and strategy</span>
                            <span>the above image would be a great place for and adversiting video</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem rem sunt modi neque non tenetur assumenda adipisci dolorum corrupti similique iure,
                            pariatur tempora laboriosam voluptatum sequi sit officia ipsam nostrum.
                        </p>
                    </div>
                    <div class="brand--content__right-side--photo">
                        <img src="img/brand/brandthree.png" alt="">
                    </div>
                    <div class="brand--content_right-side--secondText">
                        <p class="right-side--secondText">
                            <span>our values, vision and strategy</span>
                            <span>the above image would be a great place for and adversiting video</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem rem sunt modi neque non tenetur assumenda adipisci dolorum corrupti similique iure,
                            pariatur tempora laboriosam voluptatum sequi sit officia ipsam nostrum.
                        </p>
                    </div>
                    <div class="brand--content__right-side--logos">
                        <img src="img/brand/brandlogo1.png" alt="">
                        <img src="img/brand/brandlogo2.png" alt="">
                        <img src="img/brand/brandlogo3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- 
            ******************

            /CONTENT

            ****************
         -->
         <?php
         footer();
         ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="home.bundle.js"></script> -->
    <script type="text/javascript" src="brand.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="http://localhost:8080/webpack-dev-server.js"></script>
</body>
</html>
