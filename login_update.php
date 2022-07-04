<?php include "db.php";?>
<?php include "functions.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
        <form action="login_create.php" method="POST">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
        </div>
        <div class="form_group">
        <select name="" id="">
            <?php
            showAllData();
            ?>
        </select>
    </div><br>

        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

        </form>  
    </div>
</body>
</html>