<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
class Cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this -> db = $db;
    }

    public function getSum($arr){ //for subtotal
        if(isset($arr)){
            $s = 0;
            foreach ($arr as $i) { $s +=   floatval($i[0]);}
            return sprintf('%.2f' , $s);
        }
    }
    
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this -> db -> con != null){
            if ($params != null){
                $columns = implode(',', array_keys($params)); // get columns
                $values = implode(',' , array_values($params));
                $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                return $this->db->con->query($query);
            }
        }
    }

    public function deleteCart($item_id = null, $table = 'cart'){ //delete from cart
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function getCartId($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    public function addToCart($userrid, $itemmid){
        if (isset($userrid) && isset($itemmid)){
            $params = array(
                "user_id" => ($_COOKIE['id'] ?? $userrid),
                "item_id" => $itemmid
            );
            $result = $this->insertIntoCart($params);
            if ($result){ob_start();
                header("Refresh: 0");
                ob_end_flush();}
        }
    }

    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";
            $result = $this->db->con->multi_query($query);
            while(mysqli_more_results($this->db->con) ? mysqli_next_result($this->db->con) : false){;}
            if($result){
                header("Refresh: 0"); // reload page, because when adding in cart.php, _cart-template.php we have higher than _wishlist_template.php,
            } // and without reload, new _cart-template.php data will not appear
            return $result;
        }
    }
}
?>
</body>
</html>