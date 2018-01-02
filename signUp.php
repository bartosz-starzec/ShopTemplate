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
    <link rel="stylesheet" href="signUp.bundle.css">
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
                                <span>Welcome</span> to ave</p>
                            <p class="brand-sentence">
                                sign in or register
                            </p>
                        </div>
                    </div>
                </header>
                <!-- 
                specific content
             -->
                <section class="content">
                    <section class="sign-in">
                        <h1 class="sign-in__header">
                            sign in
                        </h1>
                        <article class="sign-in__inputs">

                            <input type="text" name="email" clas="inputs__input-email" placeholder="Your Email..">
                            <input type="password" name="password" class="inputs__input-password" placeholder="Your password..">
                        </article>
                        <article class="sign-in__button">
                            <button class="confirm">
                                sign in
                            </button>
                            <a href="#" class="sign-in__forget-passw">
                            Forgot your Password
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                        </article>
                        
                    </section>
                    <div class="line"></div>
                    <section class="register">
                        <h1 class="register__header">
                            register
                        </h1>
                        <article class="register__inputs">
                            <form action="" method="post">

                                <input type="text" name="email" clas="register__input-email" placeholder="Your Email..">
                                <input type="password" name="password" class="register__input-password" placeholder="Your password..">
                                <input type="password" name="password" class="register__input-confirm-password" placeholder="Confirm password..">
                            </form>

                        </article>
                        <article class="register__checkbox">
                            <form action="" method="post">
                                <input type="checkbox" name="newsletter" class="newsletter"> 
                            </form>
                            <p class="describtion">

                                Sign up for exclusive updates, discounts, new arrivals, contests, and more!
                            </p>
                        </article>
                        <article class="register__button">
                            <button class="create-account">
                                create account
                            </button>
                            <p class="privacy-policy">
                            By clicking ‘Create Account’, you agree to our
                            <a href="#" class="privacy-policy__link">
                                Privacy Policy <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </p>
                        </article>
                    </section>
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
            <script type="text/javascript" src="signUp.bundle.js"></script>
            <script src="js/main.js"></script>
            <script src="js/signUp.js"></script>
            <script src="http://localhost:8080/webpack-dev-server.js"></script>
</body>

</html>