<?php require_once("./../../config/db.config.php"); ?>
<?php require_once("./../../config/dashboard.auth.php"); ?>

<?php include_once("./../../model/CategoryManager.php"); ?>
<?php hasPermission(["Admin"]); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/public/css/style.css" />
    <link rel="stylesheet" href="/public/css/dashboard.css" />
</head>



<body>
    <?php include_once("./../../includes/_sidenav.php"); ?>

    <?php include_once("./../../includes/_header.dash.php"); ?>

    <div id="main-content">
        <div class="dashboard__content">
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
                            <th align="left">User ID</th>
                            <th align="left">User</th>
                            <th align="left">Email</th>
                            <th align="left">Contact No</th>
                            <th align="left">Gender</th>
                            <th align="left">Created At</th>
                            <th align="left">Is Active</th>
                        </tr>

                    </thead>

                    <tbody>
                        <?php

                        $adminList = $categoryManager->getAllUser(1);

                        foreach ($adminList as $row) {
                            $admin_id = $row["user_id"];
                            $active_status = $row["is_active"] ? "Active" : "Not Active";

                            echo "<tr>";
                            echo "<td>{$row["user_id"]}</td>";
                            echo "<td><img src='/" . $row["user_photo_url"] . "' width='50px' alt='User Profile'>&nbsp;{$row["fname"]} {$row["lname"]}</td>";
                            echo "<td>{$row["email"]}</td>";
                            echo "<td>{$row["contact_no"]}</td>";
                            echo "<td>{$row["gender"]}</td>";
                            echo "<td>{$row["created_at"]}</td>";
                            echo "<td><span class='table__badge'>{$active_status}</span></td>";
                            echo "</tr>";

                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="/public/js/dashboard.js"></script>
</body>

</html>