<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In / Sign Up form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style_switchable_sidebar_navigation.css">
</head>
<body>
<?php include('header.php'); ?>
    <div class="container mt-3">
        <div class="row">
            <?php
            if(isset($_COOKIE['user']) == false):
            ?>
            <div class="col">
                <br><br>
                <h1>Registration form</h1><br>
                <form style="width: 500px;" action="check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Enter your login"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your password"><br>
                    <button type="submit" class="btn btn-success">Sign Up</button>
                </form>
            </div>
            <div class="col">
                <br><br>
                <h1>Authorization form</h1><br>
                <form style="width: 500px;" action="authorization.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Enter your login"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your password"><br>
                    <button type="submit" class="btn btn-success">Sign In</button>
                </form>
            </div>
            <?php else: ?>
            <br><br><p>   <em>Hello, <?php echo $_COOKIE['user'];?></em>   </p><br><br><br>
            <br><br><p><em>  <br><br> <a href="logout.php">Exit</a>   </em></p>
            <?php endif; ?>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
<?php include('footer.php');?>
</body>
</html>