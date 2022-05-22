<?php
require_once "../../connect.php";

$city=$_POST["city"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$row="UPDATE contacts SET city=:city, telephone=:telephone, email=:email";
$query=$dbh->prepare($row);
$query->execute(["city"=>$city, "telephone"=>$telephone, "email"=>$email]);
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=../contact.php">';
?>