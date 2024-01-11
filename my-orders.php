<?php require_once("./utils/connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="/epasale/public/css/order.css">
    <!-- CSS Stylesheets End -->
</head>

<body>
    <!-- Includes header partial from ./_header.php -->
    <?php include_once("_header.php"); ?>


    <br/>
    <div class="order__section">
        <div class="order__container">
            <h3 class="order__h3">My Orders</h3>
            <table class="order__table">
                <tr>
                    <td class="color"><b> Order Id</b></td>
                    <td class="color"><b> No. of products</b></td>
                    <td class="color"><b> Address</b></td>
                    <td class="color"><b> Order Date</b></td>
                    <td class="color"><b> Amount</b></td>
                    <td class="color"><b> Order Status</b></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>2</td>
                    <td>Samakhushi, Kathmandu</td>
                    <td> 2023-10-9 (11:23 AM)</td>
                    <td>Rs. 150</td>
                    <td>Delivered</td>
                </tr>

            </table>
        </div>

        <br/>
        
       <!-- Includes footer partial from ./_footer.php -->
        <?php include_once("_footer.php"); ?> 

    </div>
</body>

</html>