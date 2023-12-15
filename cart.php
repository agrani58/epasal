<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="/epasale/public/css/cart.css">
    <!-- CSS Stylesheets End -->
</head>

<body>
    <!-- Includes header partial from ./_header.php -->
    <?php include_once("_header.php"); ?>

    <!-- Cart Start -->
    <div class="cart__section">
        <h3 class="cart__sectiontitle">Cart Container</h3>
        <div class="cart__container">
            <div class="cart">
                <a class="cart__a" href="/epasale/product-detail.php?id=1">
                    <img class="cart_product__img" src="/epasale/public/img/products/Laddu.jpg" />
                </a>
                <div class="cart__info">
                    <a class="cart__a" href="/epasale/product-detail.php?id=1">
                        <h3 class="cart__h3">Laddu</h3>
                    </a>
                    <P class="cart__p">Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>

                    <div class="qtygroup">
                        <label>Qty: </label>
                        <button class="qtygroup__btn--dec">-</button>
                        <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                        <button class="qtygroup__btn--inc">+</button>
                    </div>

                    <p class="product-remove">
                        <button class="button icon"><i class="fa fa-trash"></i></button>
                    </p>
                    <p class="price">Rs.200</p>
                </div>
            </div>

            <div class="cart">
                <a class="cart__a" href="/epasale/product-detail.php?id=1">
                    <img class="cart_product__img" src="/epasale/public/img/products/Laddu.jpg" />
                </a>
                <div class="cart__info">
                    <a class="cart__a" href="/epasale/product-detail.php?id=1">
                        <h3 class="cart__h3">Laddu</h3>
                    </a>
                    <P class="cart__p">Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>

                    <div class="qtygroup">
                        <label>Qty: </label>
                        <button class="qtygroup__btn--dec">-</button>
                        <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                        <button class="qtygroup__btn--inc">+</button>
                    </div>

                    <p class="product-remove">
                        <button class="button icon"><i class="fa fa-trash"></i></button>
                    </p>
                    <p class="price">Rs.200</p>
                </div>
            </div>

            <div class="cart">
                <a class="cart__a" href="/epasale/product-detail.php?id=1">
                    <img class="cart_product__img" src="/epasale/public/img/products/Laddu.jpg" />
                </a>
                <div class="cart__info">
                    <a class="cart__a" href="/epasale/product-detail.php?id=1">
                        <h3 class="cart__h3">Laddu</h3>
                    </a>
                    <P class="cart__p">Lorem ipsum dolor sit amet consectetur adipisicing elit.</P>

                    <div class="qtygroup">
                        <label>Qty: </label>
                        <button class="qtygroup__btn--dec">-</button>
                        <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                        <button class="qtygroup__btn--inc">+</button>
                    </div>

                    <p class="product-remove">
                        <button class="button icon"><i class="fa fa-trash"></i></button>
                    </p>
                    <p class="price">Rs.200</p>
                </div>
            </div>
        </div>


        <div class="cart__btn">
            <a class="cart__a" href="/epasale/checkout.php?id=1">
                <button class="button info">Proceed to Checkout</button>
            </a>
            <button class="button">Cancel</button>
        </div>
    </div>

    <!-- Cart End -->

    <!-- Includes footer partial from ./_footer.php -->
    <?php include_once("_footer.php"); ?>
</body>

</html>