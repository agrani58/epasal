<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include_once("./partials/header.php");
    ?>

    <!-- Products Start -->
    <div class="container">

        <div class="seller-group">
            <div class="seller-profile">
                <div class="seller-info">
                    <h3>Hymalayan Java</h3>
                    <h5>Baneshowr, Kathmandu</h5>
                </div>
                <button class="seller-info__button-seemore">See More</button>
            </div>

            <div class="card--gallery">
                <div class="card">

                    <img src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" class="card--img">
                    <div class="card--body">
                        <h3 class="card__title">Chowmein</h3>
                        <p class="card__subtitle">NRs:100</p>

                        <div class="group--quantity">Qty:
                            <button class="quantity__button--decrease">-</button>
                            <input value="1" class="quantity__input" />
                            <button class="quantity__button--increase">+</button>
                        </div>


                        <div class="button--card"><!-- div for card__footer-->
                            <div class="card__action"><!-- action includes color changing while hovering-->
                                <button class="button--cart" type="button">Add to Cart</button>
                            </div><!--action ends-->
                        </div><!--div for card footer ends-->
                    </div>


                    <div class="card">
                        <img src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage" class="card--img">
                        <div class="card--body">
                            <h3 class="card__title">Chowmein</h3>
                            <p class="card__subtitle">NRs:100</p>

                            <div class="group--quantity">Qty:
                                <button class="quantity__button--decrease">-</button>
                                <input value="1" class="quantity__button--number" />
                                <button class="quantity__button--increase">+</button>
                            </div>


                            <div class="button--card"><!-- div for card__footer-->
                                <div class="card__action"><!-- action includes color changing while hovering-->
                                    <button class="card__group--add-to-cart" type="button">Add to Cart</button>
                                </div><!--action ends-->
                            </div><!--div for card footer ends-->
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <?php
        include_once("./partials/footer.php");
        ?>
</body>

</html>