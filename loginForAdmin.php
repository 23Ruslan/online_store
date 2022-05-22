<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Admin panel login</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include('header.php'); ?>
   <h2 style="text-align:center; padding-top:100px">Admin panel login</h2>
   <form action="admin/admin.php" method="post" style="text-align:center; padding-top:100px">
   <div class="form-group">
   <input type="text" placeholder="Enter login" name="login">
   </div>
       <div class="form-group">
       <input type="text" placeholder="Enter password" name="password">
       </div>
       <button type="submit" class="btn btn-primary">Log in</button>
   </form>
   <br><br><br><br><br><br><br><br>
<?php include('footer.php');?>
</body>
</html>


