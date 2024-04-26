<?php
//connection variables

$servername = 'localhost';
$username = 'root';
$password ='';
$dbname = 'natcom-db';
$port = 3307;

// create varible to take connection
$conn = mysqli_connect($servername, $username,$password,$dbname,$port);
// connection with mysqli object oriented
// $conn = new mysqli($servername, $username,$password,$dbname,$port);
if(!$conn){
    echo 'error in connection' .mysqli_connect_error();
}



// PDO CONNECTION
// try{
//     $conn  =  new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
//     // set the PDO error mode exception
//     $connn -> setAttribute(PDO)
// }

?>