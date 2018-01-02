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
    <link rel="stylesheet" href="productView.bundle.css">
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
                                    avenue<span>fashion</span>
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
                    </div>
                    <div class="wrapper">
                        <div class="brand-text">
                            <p class="brand-header">
                                <span>Product</span> view</p>
                            <p class="brand-sentence">
                                mens - casuals - hoodies & sweatshirts -
                                <span> ave classic sweatshirts</span>
                            </p>
                        </div>
                    </div>
                </header>
                <!-- 
                specific content
             -->
                <section class="product-overview">
                    <section class="product-photo">
                        <!-- <img src="img/product view/product.png" alt=""> -->
                        <img src="img/productView/product.png" alt="">
                        <div class="arrows">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                    </section>
                    <section class="product-details">
                        <article class="product-name">
                            <p>
                                ave classic sweatshirt
                            </p>
                        </article>
                        <article class="product-reviews">
                            <i class="stars fa fa-star" aria-hidden="true"></i>
                            <i class="stars fa fa-star" aria-hidden="true"></i>
                            <i class="stars fa fa-star" aria-hidden="true"></i>
                            <i class="stars fa fa-star" aria-hidden="true"></i>
                            <i class="stars fa fa-star" aria-hidden="true"></i>
                            <p class="stars number-of-reviews">
                                3 Review(s)
                            </p>
                            <p>
                                |
                            </p>
                            <p class="add-a-review">
                                <a href="#">
                                    Add a review
                                </a>
                            </p>
                            <p>
                                |
                            </p>
                            <p class="share">
                                Share:
                            </p>
                            <i class="socials fa fa-facebook" aria-hidden="true"></i>
                            <i class="socials fa fa-twitter" aria-hidden="true"></i>
                            <i class="socials fa fa-google-plus" aria-hidden="true"></i>
                            <i class="socials fa fa-pinterest-p" aria-hidden="true"></i>
                            <i class="socials fa fa-instagram" aria-hidden="true"></i>
                            <i class="socials fa fa-envelope-o" aria-hidden="true"></i>
                        </article>
                        <article class="product-price">
                            <p class="old-price">

                                107
                            </p>
                            <p class="current-price">

                                89.99
                            </p>
                        </article>
                        <article class="features">
                            <p class="availability">
                                <span>
                                    Availability:
                                </span>
                                In stock
                            </p>
                            <p class="product-code">
                                <span>
                                    product code:
                                </span>
                                #499577
                            </p>
                            <p class="tags">
                                <span>

                                    tags:
                                </span>
                                <a href="#">Classic, </a>
                                <a href="#">Casual, </a>
                                <a href="#">V-neck, </a>
                                <a href="#">Loose</a>
                            </p>

                        </article>
                        <article class="product-short-description">
                            <p>

                                Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse est congue metus nunc, id viverra elit loreti
                                rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.

                            </p>
                            <ul>
                                <li>

                                    Elasticated cuffs

                                </li>
                                <li>

                                    Casual fit

                                </li>
                                <li>

                                    100% Cotton

                                </li>
                                <li>

                                    Free shipping with 4 days delivery
                                </li>

                            </ul>
                        </article>
                        <article class="customsize">
                            <div class="colour">

                                <select name="colour" class="colour">
                                    <option selected value="Choose" selected>Select Colour</option>
                                    <option value="red">Red</option>
                                    <option value="white">White</option>
                                    <option value="black">Black</option>
                                </select>

                            </div>
                            <div class="size">

                                <select name="size" class="colour">
                                    <option selected value="Choose" selected>Select Size</option>
                                    <option value="red">S</option>
                                    <option value="white">M</option>
                                    <option value="black">L</option>
                                </select>
                            </div>
                            <div class="qty">
                                <input type="text" name="amount" value="1" id="qty">
                                <i class="fa fa-angle-up plus" aria-hidden="true"></i>
                                <i class="fa fa-angle-down minus" aria-hidden="true"></i>

                            </div>

                        </article>
                        <article class="page-buttons">
                            <button class="shop-cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                add to cart
                            </button>
                            <button class="lookbook">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                add to lookbook
                            </button>
                            <button class="compare">
                                <i class="fa fa-compress" aria-hidden="true"></i>
                                add to compare
                            </button>
                        </article>
                    </section>
                </section>

                <section class="product-features">
                    <article class="list-of-features">

                        <ul>
                            <li>
                                <button class="feature active-feat" data-tag="description">description</button>
                            </li>
                            <li>
                                <button class="feature" data-tag="video">video</button>
                            </li>
                            <li>
                                <button class="feature" data-tag="size-specs">size & specs</button>
                            </li>
                            <li>
                                <button class="feature" data-tag="delivery-returns">delivery & returns</button>
                            </li>
                            <li>
                                <button class="feature" data-tag="reviews">reviews</button>
                            </li>
                        </ul>
                    </article>
                    <article class="specific-features">
                        <article class="description show-feature">
                            <h3>
                                Nunc egestas posuere enim, eu maximus erat posuere eget
                            </h3>
                            <p>
                                Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis.
                                ec efficitur mi. Nam sit amet
                                pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac
                                malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.

                                <span>
                                    Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis
                                    urnelit, tristique eget sollicitudin eget, placerat at metus. Proin dictum
                                    lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat
                                    justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis
                                    ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl
                                    dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida
                                    lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor
                                    vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam
                                    varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget
                                    neque.
                                </span>
                            </p>
                        </article>
                        <article class="video hide-feature">
                            <h3>
                                Nunc posuere enim, eu maximus erat posuere eget
                            </h3>
                            <p>
                                Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis.
                                
                                imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet
                                pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac
                                malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.

                                <span>

                                    Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis
                                    urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi.
                                    Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum
                                    lobortis velit, id suscipit orci 
                                    dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida
                                    lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor
                                    vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam
                                    varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget
                                    neque.
                                </span>
                            </p>
                        </article>
                        <article class="size-specs hide-feature">
                            <h3>
                                Nunc egestas enim, eu maximus erat posuere eget
                            </h3>
                            <p>
                                Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, m sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed
                                imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet
                                pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac
                                malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.

                                <span>

                                    Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis
                                    urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi.
                                    Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum
                                    lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat
                                    justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis
                                    ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl
                                    dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida
                                    lorem eu viverra. Praesent rhoncus que a convallis diam commodo eget diam id, eleifend dictum libero. Etiam
                                    varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget
                                    neque.
                                </span>
                            </p>
                        </article>
                        <article class="delivery-returns hide-feature">
                            <h3>
                                Nunc egestas posuere enim, eu erat posuere eget
                            </h3>
                            <p>
                                 pharetra at felis.
                                Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed
                                imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet
                                pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac
                                malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.

                                <span>

                                    Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis
                                    urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi.
                                    Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum
                                    lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat
                                    justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis
                                    ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl
                                    dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida
                                    lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor
                                    vulputgnissim sodales, enim dui posuere mauris, in aliquet lorem eros eget
                                    neque.
                                </span>
                            </p>
                        </article>
                        <article class="reviews hide-feature">
                            <h3>
                                Nunc egestas posuere enim, eu maximus erat posuere
                            </h3>
                            <p>
                                Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis.
                                Curabitur dictum sapien est, eget u
                                pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac
                                malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.

                                <span>

                                    Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis
                                    urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi.
                                    Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum
                                    lsuscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl
                                    dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida
                                    lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor
                                    vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam
                                    varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget
                                    neque.
                                </span>
                            </p>
                        </article>
                    </article>
                </section>

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
            <script type="text/javascript" src="productView.bundle.js"></script>
            <script src="js/main.js"></script>
            <script src="js/productView.js"></script>
            <script src="http://localhost:8080/webpack-dev-server.js"></script>
</body>
</html>