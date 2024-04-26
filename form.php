<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form</title>
</head>
<body>
    <center>
    <form action="./form.php" method="post"> <br>
    <h4>USER REGISTRAION</h4> 
    <hr>
    <p>username</p>
<input type="text" name="username" placeholder="username"><br>
<p>password:</p>
<input type="password" name="password" placeholder="password"> <br>
<input type="submit" name="register" value="register">

    </form>
    </center>
    <?php

if(isset($_POST['register'])){
    include('./db_connection.php');
// define varibles to take input data

$username = $_POST['username'];
$password = $_POST['password'];
// include connection file
// sql command to inserrt data into databses
$sql = "INSERT  INTO users(username, password) 
VALUES ('$username', '$password')";
$query = mysqli_query($conn, $sql);
if($query){
    echo "user created successfully";
} else{
    echo "fail to register user" . mysqli_error($conn);
}

}

        ?>

</body>
</html>