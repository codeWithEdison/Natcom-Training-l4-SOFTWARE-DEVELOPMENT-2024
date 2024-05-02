<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<center>
    <form action="" method="post"> <br>
    <h4>LOGIN</h4> 
    <hr>
    <p>username</p>
<input type="text" name="username" placeholder="username"><br>
<p>password:</p>
<input type="password" name="password" placeholder="password"> <br>
<input type="submit" name="login" value="LOGIN">

    </form>
    <?php
include('./db_connection.php');
if(isset($_POST['login'])){
    $username = $_POST['username']; 
    $password = $_POST['password'];

    $sql =  "SELECT username, password FROM users
     WHERE username = '$username' AND  password = '$password'";
     $query = mysqli_query($conn, $sql);

     if(mysqli_num_rows($query) ==1)
{
    session_start();
    $_SESSION['username'] = $username;
    header('location: table.php');

} else {
    echo ' inavlid credentials';
}
}

?>
    </center>
</body>
</html>