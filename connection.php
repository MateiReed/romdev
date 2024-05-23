<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

$conn = new mysqli('localhost', 'admin', 'test', "romdev");

if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}
}
?>

