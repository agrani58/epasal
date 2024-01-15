<?php
class ProductManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addProduct($postData) {

        echo "IM EXEC";
        $stmt = $this->conn->prepare("insert into tbl_products(product_name,product_photo_url, product_description,unit_Price,is_active,user_id)
        values(?,?,?,?,?,?);");

        try {

            $photo_url="public/img/products/product.jpg";
            $stmt->bind_param("sssiii", $postData['product_name'],$photo_url,$postData['product_description'], $postData['unit_price'], $postData['is_active'],$postData["user_id"]);

            if ($stmt->execute()) {
                $msg = 'Product added successfully.';
                echo "<script>alert('$msg')</script>";
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>alert('$msg')</script>";
        } finally {
            $stmt->close();
        }
    }


    public function updateProduct($postData) {
        $stmt = $this->conn->prepare("update tbl_products  set product_name=?, product_photo_url=?,product_description=?,unit_price=?,is_active=?, user_id=? where product_id=?;");

        try {
            $product_id = (int) $postData['product_id'];

            $photo_url="public/img/products/product.jpg";
            $stmt->bind_param("sssiiii", $postData['product_name'],$photo_url,$postData['product_description'], $postData['unit_price'], $postData['is_active'],$postData["user_id"], $postData["product_id"]);

            if ($stmt->execute()) {
                $msg = 'Product updated successfully.';
                echo "<script>addAlert('$msg.')</script>";
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>addAlert('$msg')</script>";
        } finally {
            $stmt->close();
        }
    }


    public function getAllProducts(){
        $products = array();
        $stmt = $this->conn->prepare(" SELECT *
        FROM 
            tbl_products p
        LEFT JOIN 
            tbl_prd_categories pc ON p.product_id = pc.product_id
        LEFT JOIN 
            tbl_categories c ON pc.category_id = c.category_id
        ");

        try {
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($product = $result->fetch_assoc()) {
                        $products[] = $product;
                    }
                }
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>addAlert('$msg')</script>";
        } finally {
            $stmt->close();
        }
        
        return $products;
    }


    public function getProducts($userId = null) {
        $items = array();
        $stmt = $this->conn->prepare("SELECT  product_id, tbl_users.user_id, tbl_users.is_active, fname, lname, province, city,
        product_name,  product_description, product_photo_url, unit_price, tbl_products.is_active, tbl_products.created_at
        FROM  tbl_products
        INNER JOIN tbl_users on tbl_products.user_id = tbl_users.user_id
        INNER JOIN tbl_addresses on tbl_addresses.address_id = tbl_users.address_id
        WHERE tbl_users.is_active = 1 AND (tbl_users.user_id = ? OR ? IS NULL)
        ORDER BY fname, lname;");

        try {
            $stmt->bind_param("ii", $userId, $userId);

            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($product = $result->fetch_assoc()) {
                        $items[] = $product;
                    }
                }
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>addAlert('$msg')</script>";
        } finally {
            $stmt->close();
        }

        return $items;
    }

    public function getProductsBySellers($userId = null, $limit) {
        $products = $this->getProducts($userId);
        $cat_products = array();

        foreach ($products as $product) {
            $temp_product = $product;
            unset($temp_product["user_id"]);
            unset($temp_product["fname"]);
            unset($temp_product["lname"]);
            unset($temp_product["province"]);
            unset($temp_product["is_active"]);

            if (isset($cat_products[$product["user_id"]])) {
                $cat_products[$product["user_id"]]["products"][] = $temp_product;
            } else {
                $seller = array("user_id" => $product["user_id"], "fname" => $product["fname"], "lname" => $product["lname"], "province" => $product["province"], "is_active" => $product["is_active"], "address" => $product["city"], "products" => array($temp_product));

                $cat_products[$product["user_id"]] = $seller;
            }
        }

        usort($cat_products, function ($a, $b) {
            $countA = count($a['products']);
            $countB = count($b['products']);

            if ($countA == $countB) {
                return 0;
            }

            return ($countA > $countB) ? -1 : 1;
        });

        return array_slice($cat_products, 0, $limit);
    }

    function getSeller($user_id) {
        $seller = null;

        $stmt = $this->conn->prepare("SELECT tbl_users.user_id, user_photo_url, tbl_users.is_active, fname, lname, province, city
        FROM  tbl_users
        INNER JOIN tbl_addresses on tbl_addresses.address_id = tbl_users.address_id
        WHERE tbl_users.is_active = 1 AND tbl_users.user_id = ?
        ORDER BY fname, lname;");

        try {
            $stmt->bind_param("i", $user_id);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $seller = $result->fetch_assoc();
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>addAlert('$msg')</script>";
        } finally {
            $stmt->close();
        }

        return $seller;
    }


    public function getProductById($product_id) {
        $record = array();

        $stmt = $this->conn->prepare("SELECT product_id, product_name,  product_description, 
        product_photo_url, unit_price, is_active, created_at
        FROM  tbl_products
        WHERE product_id=?");

        try {
            $stmt->bind_param("i", $product_id);

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
            echo "<script>addAlert('$msg')</script>";
        } finally {
            $stmt->close();
        }

        return $record;
    }

    function getSearchedProduct($query, $catname, $sort) {
        $seller = array();

        if($sort == "price") {
            $sort = "DESC";
        }else {
            $sort = "ASC";
        }

        $stmt = $this->conn->prepare("SELECT p.product_id, p.product_name, p.product_description, p.product_photo_url, p.unit_price, c.category_name
        FROM 
            tbl_products p
        JOIN 
            tbl_prd_categories pc ON p.product_id = pc.product_id
        JOIN 
            tbl_categories c ON pc.category_id = c.category_id
        WHERE 
            p.product_name LIKE ? AND c.category_name LIKE ? 
        ORDER BY unit_price " . $sort . " ;");

        

        try {
            $stmt->bind_param("ss", $query, $catname);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($product = $result->fetch_assoc()) {
                        $seller[] = $product;
                    }
                }
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>addAlert('$msg')</script>";
        } finally {
            $stmt->close();
        }

        return $seller;
    }
}

?>