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
    <link rel="stylesheet" href="localStores.bundle.css">
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
                        <p class="brand-header"><span>Local</span> stores</p>
                        <p class="brand-sentence">
                            company slogan goes here
                        </p>
                    </div>
                </div>
            </header>
            <section class="local-stores">
                <article class="stores">
                    <div class="store1">
                        <h2>London</h2>
                        <h5>180-182 regent street, london, w1b 5bt</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam libero doloribus recusandae beatae repellendus, fuga maxime ut quibusdam molestias minima. At quae rem voluptatibus, eius animi facere fugiat amet molestias.</p>
                        <button class="showMap btn-active" data-tags="0">View details</button>
                    </div>
                    <div class="store2">
                        <h2>New york</h2>
                        <h5>109 Columbus Circle, New York, NY 10023</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam rem mollitia asperiores quaerat laborum, qui vel, itaque aut ratione tempore et quibusdam modi voluptate, explicabo, vitae tenetur? Iusto, aspernatur labore.</p>
                        <button class="showMap" data-tags="1">View details</button>
                    </div>
                    <div class="store3">
                        <h2>Paris</h2>
                        <h5>2133 Rue Saint-Honoré, 75001 Paris</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quisquam quas commodi voluptatum, pariatur, eligendi veniam sit nobis non quasi voluptatibus dolorem. Sed voluptatem ipsum quaerat, ut asperiores neque aperiam.</p>
                        <button class="showMap" data-tags="2">View details</button>
                    </div>
                </article>
                <div class="storeMap storeLoc0 dispMap">
                    <div class="map"></div>
                    <article class="map-description">
                        <h2>London</h2>
                        <h5>180-182 Regent Street, London, W1B 5BT</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptates assumenda quibusdam ducimus nihil beatae obcaecati architecto optio debitis commodi? Dolorum quo quam magni nobis vero architecto deleniti voluptatibus.
                            Dignissimos.
                        </p>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>180-182 Regent Street, London, W1B 5BT </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> 0123-456-789
                            </li>
                            <li><i class="fa fa-desktop" aria-hidden="true"></i> www.yourwebsite.com
                            </li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> support@ourwebsite.com
                            </li>
                            <li>

                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>Monday-Friday 9am to 6pm</li>
                                    <li>Saturday 10am to 6pm</li>
                                    <li>Sunday 10am to 2pm</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="socials">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <div class="fb"></div>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </div>
                    </article>
                </div>
                <div class="storeMap storeLoc1 hide">
                    <div class="map"></div>
                    <article class="map-description">
                        <h2>New York</h2>
                        <h5>180-182 Regent Street, London, W1B 5BT</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptates assumenda quibusdam ducimus nihil beatae obcaecati architecto optio debitis commodi? Dolorum quo quam magni nobis vero architecto deleniti voluptatibus.
                            Dignissimos.
                        </p>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>180-182 Regent Street, London, W1B 5BT </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> 0123-456-789
                            </li>
                            <li><i class="fa fa-desktop" aria-hidden="true"></i> www.yourwebsite.com
                            </li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> support@ourwebsite.com
                            </li>
                            <li>
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>Monday-Friday 9am to 6pm</li>
                                    <li>Saturday 10am to 6pm</li>
                                    <li>Sunday 10am to 2pm</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="socials">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </div>
                    </article>
                </div>
                <div class="storeMap storeLoc2 hide">
                    <div class="map"></div>
                    <article class="map-description">
                        <h2>Paris</h2>
                        <h5>180-182 Regent Street, London, W1B 5BT</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptates assumenda quibusdam ducimus nihil beatae obcaecati architecto optio debitis commodi? Dolorum quo quam magni nobis vero architecto deleniti voluptatibus.
                            Dignissimos.
                        </p>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>180-182 Regent Street, London, W1B 5BT </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> 0123-456-789
                            </li>
                            <li><i class="fa fa-desktop" aria-hidden="true"></i> www.yourwebsite.com
                            </li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> support@ourwebsite.com
                            </li>
                            <li>
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>Monday-Friday 9am to 6pm</li>
                                    <li>Saturday 10am to 6pm</li>
                                    <li>Sunday 10am to 2pm</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="socials">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </div>
                    </article>
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
    <script type="text/javascript" src="localStores.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="js/localstore.js"></script>

    <script src="http://localhost:8080/webpack-dev-server.js"></script>
</body>

</html>