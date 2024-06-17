<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zalogowano</title>
</head>
<p>Zalogowano pomyślnie</p>
<body>
<p>
    <a href="logout.php">Wyloguj</a>
</p>
</body>
</html>
