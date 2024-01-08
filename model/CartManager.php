<?php
class CartManager {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addCart($postData) {
        $stmt = $this->conn->prepare("INSERT INTO tbl_carts (user_id, product_id, quantity) VALUES (?, ?, ?);");

        try {
            $stmt->bind_param("iii", $_SESSION["user_id"], $postData["product_id"], $postData["quantity"]);

            if ($stmt->execute()) {
                $msg = 'Item added successfully with ' . $postData["quantity"] . ' qty.';
                echo "<script>alert('$msg')</script>";
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>alert('$msg')</script>";
        }

        try {
            $updateStmt = $this->conn->prepare("UPDATE tbl_carts SET quantity = quantity + ? WHERE user_id = ? AND product_id = ?;");
            $updateStmt->bind_param("iii", $postData["quantity"], $_SESSION["user_id"], $postData["product_id"]);

            if ($stmt->errno == 1062) {
                // Duplicate key error
                if ($updateStmt->execute()) {
                    $msg = 'Item added successfully with ' . $postData["quantity"] . ' qty.';
                    echo "<script>alert('$msg')</script>";
                } else {
                    throw new \Exception($updateStmt->error);
                }
            } else {
                throw new \Exception($stmt->error);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            echo "<script>alert('$msg')</script>";
        } finally {
            $updateStmt->close();
            $stmt->close();
        }

    }

    public function updateCart($postData) {
        $stmt = $this->conn->prepare("UPDATE tbl_carts SET quantity=? WHERE cartDetailID=?");

        try {
            $cartDetailID = (int) $postData['cartDetailID'];
            $stmt->bind_param("ii", $postData["quantity"], $cartDetailID);

            if ($stmt->execute()) {
                $msg = 'Cart updated successfully.';
                echo "<script>alert('$msg.')</script>";
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

    public function deleteCart($postData) {
        $stmt = $this->conn->prepare("DELETE FROM tbl_carts WHERE cartDetailID=?");

        try {
            $cartDetailID = (int) $postData['cartDetailID'];
            $stmt->bind_param("i", $cartDetailID);

            if ($stmt->execute()) {
                $msg = "Cart deleted successfully";
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

    public function getAllCarts($user_id) {
        $carts = array();
        $stmt = $this->conn->prepare("SELECT cartDetailID, user_id, products.product_id, quantity, sellerID, product_name, unit_price, photo_url  FROM tbl_carts
        inner join products on tbl_carts.product_id = products.product_id where user_id = ?");

        try {
            $stmt->bind_param("i", $user_id);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($cart = $result->fetch_assoc()) {
                        $carts[] = $cart;
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