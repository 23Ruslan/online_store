<?php
require_once ('functions.php');
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = md5($pass."hlgs33kqmxip7");
$result = $db->con->query("SELECT * FROM `user2` WHERE `login`='$login' AND `pass`='$pass';");
$user=$result->fetch_assoc();
if($user == null) { 
    ?>
    <br><br> <p><em><a href="login1.php">Go back</a> </em></p><br><br>
    <?php exit("This user was not found. Please check the entered data.");
    }
setcookie('id', $user['id'], time() + 3600, "./*");
setcookie('user', $user['login'], time() + 3600, "./*");
if ($db->con != null ){
    $db->con->close();
    $db->con = null;
}
header('Location: login1.php');?>