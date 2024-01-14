<?php 
require_once("./model/ProductManager.php");
require_once("./utils/connection.php"); ?>

<?php
        $productManager = new ProductManager($conn);
   

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['sort'])) {
            
        
            if ($sortOption === 'price' || $sortOption === '-price') {
                $orderBy = ($sortOption === 'price') ? 'DESC' : 'ASC';
        
                // Construct and execute the SQL query
                $sql = "SELECT p.product_id, p.product_name, p.product_description, p.product_photo_url, p.unit_price, c.category_name
                FROM 
                    tbl_products p
                JOIN 
                    tbl_prd_categories pc ON p.product_id = pc.product_id
                JOIN 
                    tbl_categories c ON pc.category_id = c.category_id ORDER BY unit_price $orderBy";
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                    echo "<ul>";
                    while($row = $result->fetch_assoc()) {
                        echo "<li>{$row['product_name']} - {$row['unit_price']}</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "No products found.";
                }
            } else {
                echo "Invalid sorting option.";
            }
        }
        
        $conn->close();
        ?>