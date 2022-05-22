<?php session_start();?>
<?php require_once "../connect.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
<div style="text-align:center">
    <h1>Edit contacts</h1>
    <?php if(!empty($_SESSION["login"])) :?>
        <?php echo "Добрый день, ".$_SESSION['login']; ?>
        <br> <br>
        <a href="../logout.php">Exit</a>
    <br> <br>
    <?php
        $sql = $dbh->prepare("SELECT * FROM contacts;");
        $sql->execute();
        $res=$sql->fetch(PDO::FETCH_OBJ);
        ?>
    <form action="../admin/contact/contact.php" method="post">
        <input type="text" name="city" value="<?php echo $res->city ?>">
        <input type="text" name="telephone" value="<?php echo $res->telephone ?>">
        <input type="text" name="email" value="<?php echo $res->email ?>">
        <input type="submit" value="Save">
    </form>
    <?php else:
        echo '<h2>Log in please</h2>';
        echo '<a href="../index.php">Main page</a>';
        ?>
    <?php endif ?>
</div>
</body>
</html>