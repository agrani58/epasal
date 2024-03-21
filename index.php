<?php 
require_once("./config/db.config.php"); 
require_once("./model/ProductManager.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal - Home Page</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/public/css/style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- CSS Stylesheets End -->
</head>
<?php


// Performs logout action
if (isset($_GET["action"]) && $_GET["action"] === "logout") {
    session_destroy();
    unset($_SESSION["user_id"]);
    unset($_SESSION["email"]);
    unset($_SESSION["fullname"]);
    header("Location: ");
}

if (isset($_POST["submit"])) {
    $_SESSION["latitude"] = $_POST["latitude"];
    $_SESSION["longitude"] = $_POST["longitude"];
}


function getDistance($lat, $lon) {
    if (isset($_SESSION["latitude"]) && isset($_SESSION["longitude"])) {
        $source = new GeoLocation($_SESSION["latitude"], $_SESSION["longitude"]);
        $target = new GeoLocation($lat, $lon);

        $locator = new Locator($source, $target);
        return $locator->showDistance();
    }
}
?>

<body>

    <!-- Includes header partial from ./includes/_header.php -->
    <?php include_once("includes/_header.php"); ?>

    <!-- 
        Products Start
        .seller__container contains all .seller(s) sections
        .seller contains .seller__profile and all seller__card product__card sections
     -->


    <div class="seller__container">
        <?php
        $productManager = new ProductManager($conn);
        $sellers =$productManager->getProductsBySellers(null, 50);

        foreach($sellers as $seller) {
            $productsHTML = "";

            foreach($seller["products"] as $product) {
                $productsHTML .= '  
                <div class="seller__card product__card animate__animated animate__fadeIn" data-pid="'. $product["product_id"] .'">
                    <a class="seller__a" href="/product-detail.php?id='. $product["product_id"] .'">
                        <img class="qtygroup__cardimg" src="'. $product["product_photo_url"] .'" alt="Productimage">
                    </a>
                    <div class="seller__cardbody">
                        <a class="seller__a" href="/product-detail.php?id='. $product["product_id"] .'">
                            <h3 class="seller__cardtitle">'. $product["product_name"] .'</h3>
                        </a>
                        <p class="seller__cardsubtitle">NRs. '. $product["unit_price"] .'</p>
                        <div class="qtygroup">
                            <label>Qty: </label>
                            <button class="qtygroup__btn--dec">-</button>
                            <input type="number" min="1" max="10" class="qtygroup__input" value="1" size="5" disabled />
                            <button class="qtygroup__btn--inc">+</button>
                        </div>
                        <button class="seller__btn--cart" type="button">Add to Cart</button>
                    </div>
                </div>';
            }

            echo '
            <div class="seller animate__animated animate__fadeIn">
                <div class="seller__info ">
                    <div class="seller__profile">
                        <a class="seller__a" href="/seller-page.php?id='. $seller["user_id"] .'">
                            <img class="seller__profile__avatar" src="' . $seller["shop_photo_url"] . '" width="40px" />
                        </a>
                        <div class="seller__profile-content">
                            <h3><a class="seller__a" href="/seller-page.php?id='. $seller["user_id"] .'">'. $seller["shop_name"] . ' </a></h3>
                            <h4>'. $seller["shop_address"] . ', ' . $seller["shop_city"]  .' '. getDistance($seller["shop_lat"], $seller["shop_lon"]) .'</h4>
                        </div>
                    </div>
                    <a href="/seller-page.php?id='. $seller["user_id"] .'" class="seller__a">
                        <button class="button button-small btn-primary">See More</button>
                    </a>

                    <div class="act-btn">
                        <button class="btn-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223"/>
                        </svg>
                        </button>
                        <button class="btn-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671"/>
                        </svg>
                        </button>
                    </div>
                </div>
        
                <div class="seller__content"> '. $productsHTML .' </div>
            </div>';
        }
        ?>


    </div>
    <!-- Includes footer partial from ./includes/_footer.php -->
    <?php include_once("includes/_footer.php"); ?>
    <script src="/public/js/prdx-scroll.js"></script>
    <script>
        function getUserLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        // Successful retrieval of user's location
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;

                        var formData = new FormData();

                        formData.append("latitude", latitude);
                        formData.append("longitude", longitude);
                        formData.append("submit", "location");

                        fetch("/index.php", {
                            method: "POST",
                            body: formData,
                            headers: {
                                // "Content-Type": "application/x-www-form-urlencoded",
                            }
                        }).then(response => {
                            if (!response.ok) {
                                throw new Error("Network response not ok");
                            }
                            return response.text();
                        })
                            .then((data) => {
                                window.location = "/index.php";
                            }).catch(error => {
                                console.error("Fetch error:", error);
                            })

                        console.log("Latitude: " + latitude + ", Longitude: " + longitude);

                        // You can use the coordinates in your application
                    },
                    function (error) {
                        // Handle errors (e.g., user denied permission)
                        console.error("Error getting user location:", error.message);
                    }
                );
            } else {
                // Geolocation is not supported by the browser
                console.error("Geolocation is not supported by your browser.");
            }
        }

        // Call the function to get the user's location
        <?php if (!isset($_SESSION["latitude"]) || !isset($_SESSION["longitude"])) {
            echo ("getUserLocation();");
        } ?>
    </script>
</body>

</html>