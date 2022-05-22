<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Admin Panel</title>
</head>
<body>
<div style="text-align:center">
<?php if(!empty($_SESSION["login"])) :?>
<?php echo "Добрый день, ".$_SESSION['login']; ?>
    <br> <br>
    <a href="./logout.php">Exit</a>
    <br> <br>
    <a href="./admin/contact.php">Edit contacts</a>
    <?php else:
    echo '<h2>Log in please</h2>';
    echo '<a href="./index.php">to main page</a>';
    ?>
    <?php endif ?>
</div>
</body>
</html>
