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
    <link rel="stylesheet" href="home.bundle.css">
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

                <!-- 
            *****************

                HEADER

            ******************
         -->
                <header>
                    <div class="logo">
                        <p class="logo">
                            <span>Avenue</span> Fashion</p>
                    </div>

                    <div class="shortName">
                        <p class="short">
                            <span>a</span>
                            <span>v</span>
                            <span>e</span>
                        </p>
                    </div>
                    <div class="btn-collection">
                        <a href="">shop men's collection</a>
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
                                        <p>Autumn sale!
                                            <span> up to 50% off</span>
                                        </p>
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
                                        <p>Autumn sale!
                                            <span> up to 50% off</span>
                                        </p>
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
                                        <p>Autumn sale!
                                            <span> up to 50% off</span>
                                        </p>
                                    </div>
                                </div>


                            </div>
                            <label for="search" class="navigation-search">
                            <input type="text" name="search" id="search" placeholder="Search..">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <p class="menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>menu</p>
                    </nav>

                </header>
                <hr>

                <!--
                ***********
                PRODUCTS
                **********
             -->
                <div class="buttons"></div>
                <div class="products">
                    <div class="left-side">
                        <div class="photo1 gallery" data-tags="popular, new arrivals">
                            <a href="productView.php">
                            <img src="img/products/photo1.png" alt="">
                            <div class="description-photo">
                                <p class="product-name">Men casual shirt
                                    <span class="value">£</span>89.99
                                    <span class="about">
                                        Classic casual t-shirt for men on the move. 100% cotton.
                                    </span>
                                </p>
                                <div class="icons">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <i class="fa fa-compress" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p class="price">
                                <span>£</span>89.99</p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="photo2 gallery" data-tags="popular, new arrivals">
                            <a href="productView.php">
                            <img src="img/products/photo2.png" alt="">
                            <div class="description-photo">
                                <p class="product-name">Men casual shirt
                                    <span class="value">£</span>89.99
                                    <span class="about">
                                        Classic casual t-shirt for men on the move. 100% cotton.
                                    </span>
                                </p>
                                <div class="icons">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <i class="fa fa-compress" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p class="price">
                                <span>£</span>89.99</p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="photo3 gallery" data-tags="popular, new arrivals">
                            <a href="productView.php">
                            <img src="img/products/photo3.png" alt="">
                            <div class="description-photo">
                                <p class="product-name">Men casual shirt
                                    <span class="value">£</span>89.99
                                    <span class="about">
                                        Classic casual t-shirt for men on the move. 100% cotton.
                                    </span>
                                </p>
                                <div class="icons">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <i class="fa fa-compress" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p class="price">
                                <span>£</span>89.99</p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="photo4 gallery" data-tags="popular, best sellers, special offers">
                            <a href="productView.php">
                            <a href="productView.php">
                            <img src="img/products/photo4.png" alt="">
                            <div class="description-photo">
                                <p class="product-name">Men casual shirt
                                    <span class="value">£</span>89.99
                                    <span class="about">
                                        Classic casual t-shirt for men on the move. 100% cotton.
                                    </span>
                                </p>
                                <div class="icons">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <i class="fa fa-compress" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p class="price">
                                <span class="currency">£</span>
                                <span class="old-price">107</span>
                                <span class="currency">£</span>89.99</p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="photo5 gallery" data-tags="popular, best sellers">
                            <img src="img/products/photo5.png" alt="">
                            <div class="description-photo">
                                <p class="product-name">Men casual shirt
                                    <span class="value">£</span>89.99
                                    <span class="about">
                                        Classic casual t-shirt for men on the move. 100% cotton.
                                    </span>
                                </p>
                                <div class="icons">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <i class="fa fa-compress" aria-hidden="true"></i>
                                </div>
                            </div>
                            <p class="price">
                                <span>£</span>89.99</p>

                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="photo6 gallery" data-tags="popular, best sellers, new arrivals">
                            <a href="productView.php">
                            <img src="img/products/photo6.png" alt="">
                            <div class="description-photo">
                                <p class="product-name">Men casual shirt
                                    <span class="value">£</span>89.99
                                    <span class="about">
                                        Classic casual t-shirt for men on the move. 100% cotton.
                                    </span>
                                </p>
                                <div class="icons">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <i class="fa fa-compress" aria-hidden="true"></i>
                                </div>

                            </div>
                            <p class="price">
                                <span>£</span>89.99</p>
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="lookbooks">
                    <div class="first-lookbook">
                        <div class="photo">
                        </div>
                        <div class="lookbook-content">
                            <div class="lookbook-header">
                                <p class="lookbook-header">
                                    <span>men’s</span> lookbook</p>
                            </div>
                            <div class="lookbook-text">
                                <p class="lookbook-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo alias, repellat natus officiis nam aut aperiam
                                    fugit quae earum nostrum nemo atque accusamus eligendi deleniti, repellendus quia. Vitae,
                                    adipisci?
                                </p>
                            </div>
                            <div class="viewNow-btn">
                                <a href="">View Now</a>
                            </div>
                        </div>

                    </div>
                    <div class="second-lookbook">
                        <div class="photo">           
                        </div>
                        <div class="lookbook-content">
                            <div class="lookbook-header">
                                <p class="lookbook-header">
                                    <span>women's</span> lookbook</p>
                            </div>
                            <div class="lookbook-text">
                                <p class="lookbook-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo alias, repellat natus officiis nam aut aperiam
                                    fugit quae earum nostrum nemo atque accusamus eligendi deleniti, repellendus quia. Vitae,
                                    adipisci?
                                </p>
                            </div>
                            <div class="viewNow-btn">
                                <a href="">View Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="third-lookbook">
                        <div class="photo">                           
                        </div>
                        <div class="lookbook-content">
                            <div class="lookbook-header">
                                <p class="lookbook-header">
                                    <span>your</span> lookbook</p>
                            </div>
                            <div class="lookbook-text">
                                <p class="lookbook-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor explicabo alias, repellat natus officiis nam aut aperiam
                                    fugit quae earum nostrum nemo atque accusamus eligendi deleniti, repellendus quia. Vitae,
                                    adipisci?
                                </p>

                            </div>
                            <div class="viewNow-btn">
                                <a href="">View Now</a>
                            </div>

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

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="home.bundle.js"></script>

    <script src="js/main.js"></script>
    <script src="js/home.js"></script>
    <script src="http://localhost:8080/webpack-dev-server.js"></script>
</body>

</html>