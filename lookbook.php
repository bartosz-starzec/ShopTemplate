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
    <link rel="stylesheet" href="lookbook.bundle.css">
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
                        <p class="brand-header"><span>our</span> lookbook</p>
                        <p class="brand-sentence">
                            Latest Posts - mens & womens
                        </p>
                    </div>
                </div>
            </header>
            <hr>
            <section class="page-items">

                <div class="items-buttons">

                </div>
                <section class="items">
                    <section class="left-side">
                        <div class="item item1" data-tags="all, lastest, best sellers">
                            <img src="img/lookbook-items/photo.png" alt="">
                            <div class="icons">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="item item2" data-tags="all, most liked">
                            <img src="img/lookbook-items/photo1.png" alt="">
                            <div class="icons">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="item item3" data-tags="all, best sellers">
                            <img src="img/lookbook-items/photo2.png" alt="">
                            <div class="icons">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="item item4" data-tags="all, lastest">
                            <img src="img/lookbook-items/photo3.png" alt="">
                            <div class="icons">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </section>
                    <section class="right-side">
                        <div class="item item5" data-tags="all, best sellers">
                            <img src="img/lookbook-items/replace1.png" alt="">
                            <div class="lookbook-description">
                                <h1>
                                    <span>Jane’s</span> lookbook
                                </h1>
                                <h3>
                                    get the look for under £200!
                                </h3>
                                <p>
                                    We invited actress Jane Marshall to join us for the day and choose her perfect outfit from our vast range of womens fashion.
                                    <span>This is of course not true as this is just a design for a website and this is simply filler text.</span>



                                </p>
                                <div class="item-btn">
                                    <a href="#">View now</a>

                                </div>
                            </div>
                        </div>
                        <div class="item item6" data-tags="all, lastest">
                            <img src="img/lookbook-items/photo4.png" alt="">
                            <div class="icons">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="item item7" data-tags="all, lastest">
                            <img src="img/lookbook-items/photo5.jpg" alt="">
                            <div class="icons">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>

                    </section>
                    <section class="bottom">

                        <div class="item item8" data-tags="all, most liked">
                            <article class="item8">
                                <div class="lookbook-description">
                                    <h1>
                                        <span>Win</span> a new look!
                                    </h1>
                                    <h3>
                                        add looks or items to your lookbook for a chance of winning
                                    </h3>
                                    <p>
                                        See an item or a complete look you like, click the  button to add it to your lookbook and you’ll be automatically entered to our monthly draw where one winner gets a £300 gift voucher to spend on our website!
                                        <span>
                                            Terms: No purchase necessary. Vouchers are non-transferable and no cash alternative is ofered. Competition is for members only.
                                        </span>
                                    </p>
                                    <div class="item-btn">
                                        <a href="#">Shop now</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item item9" data-tags="all, most liked">
                            <img src="img/lookbook-items/photo6.png" alt="">
                            <div class="icons">
                                <i class="fa fa-info" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
            <section class="lookbooks">
                <div class="lookbooks">

                    <div class="first-lookbook">
                        <div class="photo">

                        </div>
                        <div class="lookbook-content">
                            <div class="lookbook-header">
                                <p class="lookbook-header"><span>men’s</span> lookbook</p>
                            </div>
                            <div class="lookbook-text">
                                <p class="lookbook-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo alias, repellat natus officiis nam aut aperiam fugit quae earum nostrum nemo atque accusamus eligendi deleniti, repellendus quia. Vitae, adipisci?
                                </p>
                            </div>
                            <div class="viewNow-btn">
                                <a href="">View Now</a>
                            </div>

                        </div>

                    </div>
                    <div class="second-lookbook">
                        <div class="photo">
                            <!-- <img src="../src/img/lookbooks/lookbook2.png" alt=""> -->
                        </div>
                        <div class="lookbook-content">
                            <div class="lookbook-header">
                                <p class="lookbook-header"><span>women's</span> lookbook</p>
                            </div>
                            <div class="lookbook-text">
                                <p class="lookbook-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo alias, repellat natus officiis nam aut aperiam fugit quae earum nostrum nemo atque accusamus eligendi deleniti, repellendus quia. Vitae, adipisci?
                                </p>
                            </div>
                            <div class="viewNow-btn">
                                <a href="">View Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="third-lookbook">
                        <div class="photo">
                            <!-- <img src="../src/img/lookbooks/lookbook3.png" alt=""> -->
                        </div>
                        <div class="lookbook-content">
                            <div class="lookbook-header">
                                <p class="lookbook-header"><span>your</span> lookbook</p>
                            </div>
                            <div class="lookbook-text">
                                <p class="lookbook-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo alias, repellat natus officiis nam aut aperiam fugit quae earum nostrum nemo atque accusamus eligendi deleniti, repellendus quia. Vitae, adipisci?
                                </p>

                            </div>
                            <div class="viewNow-btn">
                                <a href="">View Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-qd52h8IFi-zMLorMTvybW0ZNmXx3ZHU&callback=initMap">
    </script>
    <script type="text/javascript" src="lookbook.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="js/lookbook.js"></script>
    <script src="http://localhost:8080/webpack-dev-server.js"></script>
</body>

</html>
