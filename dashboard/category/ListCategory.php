<?php require_once("./../../utils/connection.php"); ?>
<?php include_once("./../../model/CategoryManager.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="stylesheet" href="/epasale/public/css/global.css" />
    <link rel="stylesheet" href="/epasale/public/css/dashboard.css" /> <!-- google font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        body {
            background: #eeeeee;
        }
    </style>
</head>


<body>
    <?php include_once("./../_sidenav.php"); ?>
    <div class="dashboard__content">
        <div class="alert-container"></div>
        <?php
        $categoryManager = new CategoryManager($conn);

        if (isset($_POST['submit']))
            $categoryManager->addCategory($_POST);

        if (isset($_POST['update']))
            $categoryManager->updateCategory($_POST);
        ?>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th align="left">Category ID</th>
                        <th align="left">Category Name</th>
                        <th align="center" width="100px">Action</th>

                </thead>

                <tbody>
                    <?php

                    $categoryList = $categoryManager->getAllCategories();

                    foreach ($categoryList as $row) {
                        $category_id = $row["category_id"];

                        echo "<tr>";
                        echo "<td width='150px'>{$row["category_id"]}</td>";
                        echo "<td>{$row["category_name"]}</td>";
                        echo "<td align='center'>
                                 <form method='POST'>
                                    <a class='button btn-primary' href='/epasale/dashboard/category/AddCategory.php?id={$category_id}'>Edit Info</a>
                                    <input type='text' name='category_id' value='{$category_id}'  hidden />
                                 </form>
                              </td>";
                        echo "</tr>";

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>