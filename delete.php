<?php
include('./db_connection.php');
// echo 'deleted user ';
$id = $_REQUEST['id'];
// echo $id;
$sql = "DELETE FROM users WHERE user_id = $id";
$query = mysqli_query($conn, $sql);
if($query){
    header('location: table.php');
} else {
    echo 'fail to delete user' . mysqli_error($conn);
}

?>