<!-- Header Start -->
<header class="header">
    <div class="header__container">
        <a class="header_logo" href="/epasale/">
            <img src="/epasale/public/img/epasal-primary-logo.png" alt="ePasal - Online Food App" width="120px">
        </a>

        <div class="header__searchbar">
            <input type="text" placeholder="Search for products and categories" />
            <div class="search_icon_background">
                <span class="search_icon"><i class="fas fa-search"></i></span>
            </div>
        </div>

        <div class="header__nav">
            <ul>
                <li class="header_nav-links">
                    <a href="/epasale/cart.php">
                        <span class="cart_icon"><i class="fas fa-shopping-cart"></i></span>
                    </a>
                </li>
                <?php

                if (isset($_SESSION) && isset($_SESSION["user_id"])) {
                    echo '
                    <button class="profile-container">
                        <div class="profile-description">
                            <h4>' . $_SESSION["fullname"] . '</h4>
                            <p>Customer <svg height="1em" viewBox="0 0 512 512" fill="currentColor"> <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg></p>
                        </div>

                        <div class="profile-menu">
                            <a href="/epasale/my-orders.php">My Orders</a>
                            <a href="/epasale/?action=logout">Logout</a>
                        </div>
                    </button>';
                } else {
                    echo '
                        <li class="header_nav-links">
                            <a href="/epasale/login.php">Sign in</a>
                        </li>
                        <li class="header_nav-links">
                            <a href="/epasale/signup.php">Sign up </a>
                        </li>';
                }

                ?>
            </ul>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Category Start -->
<section id="nav-category">
    <div class="container">
        <nav>
            <ul>
                <li><a href="" class="category">Chicken</a>
                <li><a href="" class="category">Beef</a>
                <li><a href="" class="category">Veg</a>
                <li><a href="" class="category">Sweets & Deserts</a>
                <li><a href="" class="category">Snacks</a>
                <li><a href="" class="category">Juice</a>
                <li><a href="" class="category">Soft Drinks</a>
            </ul>
        </nav>
    </div>
</section>
<!-- Category End -->