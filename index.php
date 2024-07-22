<?php
// Show all information, defaults to INFO_ALL
$hostname = '127.0.0.1';
$username = 'root';
$password = '122334';
$database = 'td_db';
$port = 3307;

$conn = new mysqli($hostname, $username, $password, $database, $port);
if ($conn->connect_errno) {
    exit('Connection failed: '.$conn->connect_errno);
}
$sql = 'DROP TABLE IF EXISTS `users`';
if ($conn->query($sql) === true) {
    echo 'DROP TABLE SUCCESSFULL', PHP_EOL;
} else {
    echo 'DROP TABLE FAILED', PHP_EOL;
}
$sql = 'CREATE TABLE `users` (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci';
if ($conn->query($sql)===true) {
    echo ' ==> CREATE TABLE SUCCESSFULL', PHP_EOL;
} else {
    echo ' ==> CREATE TABLE FAILED', PHP_EOL;
}

echo "Connected Successfull";
exit();