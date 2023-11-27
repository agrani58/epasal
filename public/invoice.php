<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal Table</title>
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

<body>
<?php
                include_once("./partials/header.php");
             ?>

    <!-- Table Start -->
    <div class="container">
        <div class="head-section">
            <div class="row">
                <div class="col-6">
                    <img  src ="/epasale/public/img/epasal-primary-logo.png" class="logo">
                </div>
                <div class="col-6">
                    <div class="head-detail">
                        <h1 class="text-white ">INVOICE</h1>
                        <p class="text-white">Invoice No.:00001</p>
                        <p class="text-white">Date: 2023-05-10</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="heading">Bill From:</h1>
                    <p class="sub-heading">e Pasale  </p>
                    <p class="sub-heading">Kathmandu  </p>
                    <p class="sub-heading">9874569878  </p> 
                </div>
                <div class="col-6">
                    <h1 class="heading text-right">Bill To:</h1>
                    <p class="sub-heading text-right">Ram Thapa  </p>
                    <p class="sub-heading text-right">Pokhara </p>
                    <p class="sub-heading text-right">9874521452  </p>
                </div>
            </div>
        </div>
        <div class="body-section">
            <table>
                <thead>
                    <tr>
                        <th class="right">Items</th>
                        <th class="right">Quantity</th>
                        <th class="right">Price</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="right"> Item 1</td>
                        <td class="right"> 1</td>
                        <td class="right"> Rs.0</td>
                        <td> Rs.000</td>     
                    </tr>
                    <tr>
                        <td class="right"> Item 2</td>
                        <td class="right"> 1</td>
                        <td class="right"> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td class="right"> Item 3</td>
                        <td class="right"> 1</td>
                        <td class="right"> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td class="right"> Item 4</td>
                        <td class="right"> 1</td>
                        <td class="right"> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td class="right"> Item 5</td>
                        <td class="right"> 1</td>
                        <td class="right"> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td colspan ="3" class="right"> Grand Total</td>
                        <td> Rs. 0000</td>
                    </tr>
                </tbody>
            </table>
            <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>
    </div>
    <!-- Table End -->

    <?php
                include_once("./partials/footer.php");
             ?>
</body>

</html>