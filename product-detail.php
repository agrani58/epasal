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
                <img src="/epasale/public/img/products/biryani.jpg" class="prddetail__img" />
                <div class="prddetail__info">
                    <h3 class="prddetail__infotitle">Chicken Biryani Served with Tomato Sauce</h3>
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
                    <div class="desc">
                        <h3>Product Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>

            <div class="prdrecom">
                <h3 class="prdrecom__title">Product Recommendations</h3>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">MoMo</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">MoMo</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">MoMo</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">MoMo</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">MoMo</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">MoMo</h3>
                        </a>
                        <P class="prdthumb__desctext">Rs. 200</P>
                    </div>
                </div>

                <div class="prdthumb">
                    <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                        <img src="/epasale/public/img/products/C Momo.jpeg" class="prdthumb__img" />
                    </a>

                    <div class="prdthumb__desc">
                        <a class="prdthumb__a" href="/epasale/product-detail.php?id=1">
                            <h3 class="prdthumb__desctitle">MoMo</h3>
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