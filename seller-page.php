<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet" />
    <!-- CSS Stylesheets End -->
</head>

<body>
    <!-- Includes header partial from ./_header.php -->
    <?php include_once("_header.php"); ?>


    <div class="container">
        <div class="sellerfullpage">
            <div class="seller_detail">
                <div class="sp-detail">
                    <img src="/epasale/public/img/products/biryani.jpg" alt="logo">
                </div>
                <form action="" method="get">
                    <label for="name">name </label>
                    <input id="name" type="text">

                    <label for="address">address:</label>
                    <input id="address" type="text">

                    <label for="contact">contact:</label>
                    <input id="contact" type="text">

                    <button type="submit" name="Submit_name">SEE MORE</button>
                </form>
            </div>

            <div class="sellerpage">
                <div class="seller_content">
                    <img src="/epasale/public/img/products/veg_momo.jpg" alt="Productimage">
                    <h3>Chowmein</h3>
                    <p>NRs:100</p>

                    <div class="sp_quantity_buttons">Qty:
                        <button class="button1">-</button>
                        <div class="number">1</div>
                        <button class="button2">+</button>
                    </div>

                    <div class="sp_card__footer"><!-- div for card__footer-->

                        <button type="button">Add to Cart</button>
                    </div><!--action ends-->
                </div><!--div for card footer ends-->



            </div>
        </div>
    </div>

    <!-- Includes footer partial from ./_footer.php -->
    <?php include_once("_footer.php"); ?>
</body>

</html>