<?php
class Product
{
    public $db = null;
    public function __construct(DBController $db)
    {if (!isset($db->con)) return null;
        $this->db = $db;}
    
        public function getProduct($item_id = null, $table= 'product'){
            if (isset($item_id)){
                $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");
                $resultArray = array();
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $resultArray[] = $item;
                }
                while(mysqli_next_result($this->db->con)){;}
                return $resultArray;
            }
        }
    public function getData($table = 'product'){
        if ($table == "wishlist" || $table == "cart") { // option to display cart and wishlist tables only
            $required_id = $_COOKIE['id'] ?? 1;
            $result = $this->db->con->query("SELECT * FROM `$table` WHERE `user_id`='$required_id';");
        } else { $result = $this->db->con->query("SELECT * FROM `$table`;");}

        $resultArray = array();
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}
?>