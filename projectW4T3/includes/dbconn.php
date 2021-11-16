<?php
$host = "localhost";
$user_name = "damelnig_project";
$pass_word = "hedNxq4eWT89czK";
$dbname = "damelnig_projectW4T3";

$conn = mysqli_connect($host, $user_name, $pass_word, $dbname);

if (!$conn) {
    echo "Connection failed!";
}
?>
