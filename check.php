<?php
require_once ('functions.php');
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
if (mb_strlen($login) < 1 || mb_strlen($login) > 20) {
    exit("Login length must be from 1 to 20 characters");
    }
    elseif (mb_strlen($name) > 20)
    {
    exit("Name length must be from 0 to 20 characters");
    }
    elseif (mb_strlen($pass) < 1 || mb_strlen($pass) > 6)
    {
    exit("Password length must be from 1 to 6 characters");
    }
    $pass = md5($pass."hlgs33kqmxip7");
    $result = $db->con->query("SELECT * FROM `user2` WHERE `login`='$login';");
    $user=$result->fetch_assoc();
    if($user != null) {            // checking if this login is registered
        ?>
    <br><br>   <p><em><a href="login1.php">Go back</a></em></p>   <br><br>
    <?php exit("The username you entered is already being used by another user. Please create a new username.");
    }
    $db->con->query("INSERT `user2` (`login`,`pass`,`name`) VALUES ('$login','$pass','$name');");
    if ($db->con != null ){
    $db->con->close();
    $db->con = null;
    }
header('Location: login1.php');?>
