<?php 
function topbar() {


         echo '<div class="top-bar">
            <div class="currency">
                <p>
                    <span>Currency:</span>
                    <select name="languague" id="lng"> 
                            
                        <option value="GBP">GBP</option>
                        <option value="PL">PL</option>
                    </select>
                </p>

            </div>
            <div class="signin">
                <ul>
                    <li><a href="signUp.php">Register</a></li>
                    <li><a href="signUp.php">Sign In</a></li>
                    
                </ul>
            </div>
            <div class="cart">

                <p>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> empty
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </p>
            </div>
        </div>
        <!-- 
                *******
                SIDEBAR
                *******
             -->
        <div class="sidebar">

            <p class="sidebar-menu"><i class="fa fa-bars" aria-hidden="true"></i>menu</p>

            <div class="search-sidebar">
                <label for="search-sidebar">
                                                <input type="text" name="search-sidebar" id="search-sidebar" placeholder="Search..">
                                            </label><i class="fa fa-search" aria-hidden="true"></i>
            </div>

            <ul>
                <li><a href="#">Men\'s</a><i class="fa fa-angle-down subm" aria-hidden="true"></i>

                    <ol class="hide">
                        <li><a href="">Casuals</a></li>
                        <li><a href="">Jackets</a></li>
                        <li><a href="">Hoodies & Sweatshirts</a></li>
                        <li><a href="">Polo Shirts</a></li>
                        <li><a href="">Sportswear</a></li>
                        <li><a href="">Trousers & Chinos</a></li>
                        <li><a href="">T-Shirts</a></li>
                    </ol>
                    <ol class="hide">
                        <li><a href="">Formal</a></li>
                        <li><a href="">Jackets</a></li>
                        <li><a href="">Shirts</a></li>
                        <li><a href="">Suits</a></li>
                        <li><a href="">Trousers</a></li>

                    </ol>


                </li>
                <li><a href="#">Women\'s</a><i class="fa fa-angle-down subm" aria-hidden="true"></i>
                    <ol class="hide">
                        <li><a href="">Casuals</a></li>
                        <li><a href="">Jackets</a></li>
                        <li><a href="">Hoodies & Sweatshirts</a></li>
                        <li><a href="">Polo Shirts</a></li>
                        <li><a href="">Sportswear</a></li>
                        <li><a href="">Trousers & Chinos</a></li>
                        <li><a href="">T-Shirts</a></li>
                    </ol>
                    <ol class="hide">
                        <li><a href="">Formal</a></li>
                        <li><a href="">Jackets</a></li>
                        <li><a href="">Shirts</a></li>
                        <li><a href="">Suits</a></li>
                        <li><a href="">Trousers</a></li>

                    </ol>
                </li>
                <li><a href="brand.php">The Brand</a></li>
                <li><a href="localStores.php">Local stores</a></li>
                <li><a href="lookbook.php">look book</a><i class="fa fa-angle-down subm" aria-hidden="true"></i>
                    <ol class="hide">
                        <li class="lookbook"><a href="">Our lookbooks</a></li>
                        <li><a href="">Lasted Posts(mixed)</a></li>
                        <li><a href="">Men\'s Lookbook</a></li>
                        <li><a href="">Women\'s lookbook</a></li>

                    </ol>
                    <ol class="hide">
                        <li class="lookbook"><a href="">Your lookbook</a></li>
                        <li><a href="">View and Edit</a></li>
                        <li><a href="">Share</a></li>
                        <li><a href="">Delete</a></li>


                    </ol>
                </li>
            </ul>
        </div>';
}
?>