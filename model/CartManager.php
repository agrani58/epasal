<?php
class CartManager {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getProductsFromCarts($cartJson) {
        $carts = array();
    
        // Decode the JSON string to get the cart variable as an associative array
        $cart = json_decode($cartJson, true);
    
        // Create a string for the product IDs in the cart to be used in the SQL query
        $productIds = implode(",", array_keys($cart));

        if($productIds === "") $productIds = "NULL";
    
        $stmt = $this->conn->prepare("SELECT product_id, product_name, unit_price, product_photo_url  
            FROM tbl_products 
            WHERE product_id IN ($productIds)");
    
        try {
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($product = $result->fetch_assoc()) {
                        // Add quantity information from the cart variable to each product
                        $product['quantity'] = $cart[$product['product_id']];
                        $carts[] = $product;
                    }
                }
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>alert('$msg')</script>";
        } finally {
            $stmt->close();
        }
    
        return $carts;
    }

    public function getAllCartQuantity($user_id) {
        $record = array();
        $stmt = $this->conn->prepare("SELECT sum(quantity) as total_quantity  FROM tbl_carts where user_id = ?");

        try {
            $stmt->bind_param("i", $user_id);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $record = $result->fetch_assoc();
                }
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>alert('$msg')</script>";
        } finally {
            $stmt->close();
        }

        return $record;
    }
}

?>