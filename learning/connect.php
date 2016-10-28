<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 10/28/16
 * Time: 9:05 PM
 */
$servername = "localhost";
$username = "zhang";
$password = "zhang";
// create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("connect failed: " .$conn->connect_error);
}
echo "connect ok";
mysqli_close($conn);
?>
