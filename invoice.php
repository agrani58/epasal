<?php require_once("./utils/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePasal Table</title>
    <!-- CSS Stylesheets Start -->
    <link rel="stylesheet" href="/epasale/public/css/style.css">
    <link rel="stylesheet" href="/epasale/public/css/order.css">
    <!-- CSS Stylesheets End -->
</head>

<body>
 <!-- Includes header partial from ./_header.php -->
 <?php include_once("_header.php"); ?>

    <!-- Table Start -->
    <div class="invoice__container">
        <div class="invoice__header">
            <div class="row">
                <div class="col-6">
                    <img  class="invoice__brand" src ="/epasale/public/img/epasal-primary-logo.png">
                </div>
                <div class="col-6">
                    <div class="invoice__headertext">
                        <h1 class="text-white ">INVOICE</h1>
                        <p class="text-white">Invoice No.:00001</p>
                        <p class="text-white">Date: 2023-05-10</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="invoice__body">
            <div class="row">
                <div class="col-6">
                    <h1 class="invoice__title">Bill From:</h1>
                    <p class="invoice__subtitle">e Pasale  </p>
                    <p class="invoice__subtitle">Kathmandu  </p>
                    <p class="invoice__subtitle">9874569878  </p> 
                </div>
                <div class="col-6">
                    <h1 class="invoice__title text-right">Bill To:</h1>
                    <p class="invoice__subtitle text-right">Ram Thapa  </p>
                    <p class="invoice__subtitle text-right">Pokhara </p>
                    <p class="invoice__subtitle text-right">9874521452  </p>
                </div>
            </div>
        </div>
        <div class="invoice__body">
            <table class="invoice__table">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Item 1</td>
                        <td> 1</td>
                        <td> Rs.0</td>
                        <td> Rs.000</td>     
                    </tr>
                    <tr>
                        <td> Item 2</td>
                        <td> 1</td>
                        <td> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td> Item 3</td>
                        <td> 1</td>
                        <td> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td> Item 4</td>
                        <td> 1</td>
                        <td> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td> Item 5</td>
                        <td> 1</td>
                        <td> Rs.0</td>
                        <td> Rs.000</td>
                    </tr>
                    <tr>
                        <td colspan ="3"> Grand Total</td>
                        <td> Rs. 0000</td>
                    </tr>
                </tbody>
            </table>
            <h3 class="invoice__title">Payment Status: Paid</h3>
            <h3 class="invoice__title">Payment Mode: Cash on Delivery</h3>
        </div>
    </div>
    <!-- Table End -->

   <!-- Includes footer partial from ./_footer.php -->
   <?php include_once("_footer.php"); ?> 
</body>

</html>