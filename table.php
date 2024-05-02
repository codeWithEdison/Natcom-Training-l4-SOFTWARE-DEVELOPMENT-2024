include('./auth.php');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
<a href="form.php">new user</a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href="logout.php">logout</a>
        <tr>
            <th>user id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Created at</th>
            <th>ACTION</th>
        </tr>
        <?php

            include('./db_connection.php');
            $sql = "SELECT user_id, username, password, created_at FROM users";
            $query =  mysqli_query($conn, $sql);
            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_assoc($query)){
                    echo "
                    <tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['password']}</td>
                    <td>{$row['created_at']}</td>
                    <td><a href='delete.php?id={$row['user_id']}'>delete</a></td>
                    <td><a href='update.php?id={$row['user_id']}'>upate</a></td>
                </tr>
                    ";
                }
            }
            ?>
        <!-- <tr>
            <td>edsn</td>
            <td>123</td>
            <td>12/03/2023</td>
        </tr>
        <tr>
            <td>edsn</td>
            <td>123</td>
            <td>12/03/2023</td>
        </tr> -->
    </table>
</body>
</html>
