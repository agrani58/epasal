<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orders</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
        <!-- google font start -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
            rel="stylesheet" />
        <!-- google font end -->
    </head>
    <body >

    <?php
                include_once("./partials/header.php");
             ?>
        <div class="order">
           
            <div class="order-container">
                <p><b>Orders</b></p>
                <table class=order_table>
                    <tr>
                        <td class="order_heading__color order_td"><b> Order Id</b></td>
                        <td class="order_heading__color order_td"><b> No. of products</b></td>
                        <td class="order_heading__color order_td"><b> Address</b></td>
                        <td class="order_heading__color order_td"><b> Order Date</b></td>
                        <td class="order_heading__color order_td"><b> Amount</b></td>
                        <td class="order_heading__color order_td"><b> Order Status</b></td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    <tr>
                        <td class="order_td">18</td>
                        <td class="order_td">2</td>
                        <td class="order_td">Samakhushi, Kathmandu</td>
                        <td class="order_td"> 2023-10-9 (11:23 AM)</td>
                        <td class="order_td">Rs. 150</td>
                        <td class="order_td">Delivered</td>
                    </tr>
                    
                </table>
            </div>
             <?php
                include_once("./partials/footer.php");
             ?>

        </div>
    </body>
</html>