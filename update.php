<?php
    include('./db_connection.php');
    $id = $_REQUEST['id'];
    $sql = "SELECT username, password FROM
     users WHERE user_id = $id";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) ==1){
        $row = mysqli_fetch_assoc($query);
        $username = $row['username'];
        $password = $row['password'];
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update user</title>
</head>
<body>
<center>
    <form action="" method="post"> <br>
    <h4>UPDATE USER</h4> 
    <hr>
    <p>username</p>
<input type="text" name="username" placeholder="username" value = '<?php echo $username ?>'><br>
<p>password:</p>
<input type="password" name="password" placeholder="password" value=" <?php echo $password ?>" > <br>
<input type="submit" name="register" value="update">

    </form>

  <?php
 if(isset($_POST['register'])){
    $new_username = $_POST['username'];
    $new_paswword = $_POST['password'];

    $sql =  "UPDATE users SET username ='$new_username' , 
    password ='$new_paswword' WHERE user_id =$id";

    $query = mysqli_query($conn, $sql);
    if($query){
        header('location: ./table.php');
    } else {
        echo 'fail to update user';
    }
 }
  ?>
    </center>
</body>
</html>