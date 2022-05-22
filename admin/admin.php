<?php session_start(); ?>
<?php require_once "../connect.php"; ?>
<?php
$password=$_POST["password"];
$login=$_POST["login"];
$sql = $dbh->prepare("SELECT id, login FROM user1 WHERE login=:login AND password=:password");
$sql->execute(array('login' => $login, 'password' => $password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
if ($array["id"]>0) {
    $_SESSION['login']=$array["login"];
    header('Location:../admin.php');
}
else{
    header('Location:../loginForAdmin.php');
}
?>