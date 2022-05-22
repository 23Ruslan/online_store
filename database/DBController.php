<?php
class DBController
{   public $user = 'root';
    protected $host = 'localhost';
    public $password = '';
    public $con = null;
    protected $database = "shopee";

    public function __destruct()  { $this->closeConnection(); }

    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){ echo "Fail ".$this->con->connect_error; }
    }

    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
?>