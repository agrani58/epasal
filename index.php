<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <!-- CSS Stylesheets End -->
</head>

<body>

    <!-- Includes header partial from ./_header.php -->
    <?php include_once("_header.php"); ?>

    <!-- 
        Products Start
        .seller__container contains all .seller(s) sections
        .seller contains .seller__profile and all seller__card sections
     -->
    <div class="seller__container">
        <div class="seller">
            <div class="seller__info">
                <div class="seller__profile">
                    <a class="seller__a" href="/epasale/seller-page.php?id=1">
                        <img class="seller__profile-avatar" src="/epasale/public/img/epasal-primary-logo.png" width="40px" />
                    </a>
                    <div class="seller__profile-content">
                        <h3>Himalayan Java</h3>
                        <h4>Baneshowr, Kathmandu</h4>
                    </div>
                </div>
                <button class="button button-small btn-primary">See More</button>
            </div>

            <div class="seller__content">
                <div class="seller__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" >
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Chowmein</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" >
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Chowmein</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" >
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Chowmein</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" >
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Chowmein</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" >
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Chowmein</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>

                <div class="seller__card">
                    <a class="seller__a" href="/epasale/product-detail.php?id=1">
                        <img class="qtygroup__cardimg" src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" >
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="seller__cardtitle">Chowmein</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. 100.00</p>

                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>


                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Includes footer partial from ./_footer.php -->
    <?php include_once("_footer.php"); ?>
</body>

</html>