<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost','root','','loginapp');

    if($connection){
        echo "We are connected";
    }else{
        die("Database Connection Failed");
    }

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUE ('$username','$password')";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Query Failed');
    }

    // if($username && $password){
    //     echo $username." ".$password;
    // }else{
    //     echo "NO";
    // }

}
?>

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

                <input class="btn btn-primary" type="submit" name="submit" value=" Submit">

            </form>
        </div>
    </div>
</body>
</html>