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


    <div class="just">
        <div class="prddetail__wrapper">
            <div class="prddetail">
                <img src="/epasale/public/img/products/product.avif" class="prddetail__img" />
                <div class="prddetail__info">
                    <h3 class="prddetail__infotitle">Cheese Pizza with Tomato Sauce</h3>
                    <h4 class="prddetail__infodesc">Rs.300.00</h4>
                    <div class="qtygroup">
                        <button class="qtygroup__btn--dec">-</button>
                        <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                        <button class="qtygroup__btn--inc">+</button>
                    </div>
                    <div class="prddetail__btngroup">
                        <button class="button btn-primary">Buy Now</button>
                        <button class="button btn-primary">Add To Cart</button>
                    </div>
                    <div class="prddetail__desc">
                        <h3>Product Description</h3>
                        <p>1. Classic Cheese Pizza: A mouthwatering celebration of simplicity and flavor <br/>
2. Hand-tossed, golden-brown crust for the perfect crunch and chewy texture <br/>
3. Generously topped with premium, 100% real mozzarella cheese for a gooey, melty experience <br/>
4. Signature tomato sauce made from vine-ripened tomatoes and secret spices for a zesty kick <br/>
5. Timeless crowd-pleaser suitable for any occasion <br/>
6. Ideal for customization with your favorite toppings <br/>
7. Perfect for family gatherings, game nights, or solo pizza indulgence <br/>
8. A culinary experience that brings joy to every cheesy bite </p>
                    </div>
                </div>
            </div>

            <div class="prdrecom">
                <h3 class="prdrecom__title">Product Recommendations</h3>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/product.avif" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">Cheese Pizza</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/product.avif" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">Cheese Pizza</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/product.avif" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">Cheese Pizza</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/product.avif" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">Cheese Pizza</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/product.avif" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">Cheese Pizza</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/product.avif" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">Cheese Pizza</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/product.avif" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">Cheese Pizza</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Includes footer partial from ./_footer.php -->
    <?php include_once("_footer.php"); ?>
</body>

</html>