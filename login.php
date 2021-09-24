<?php
$db_name = "gilievno_test_db";
$db_username = "mysqlu";
$db_password = "Mysql123.";
$db_host = "localhost";

$username = $_POST["username"];
$password = $_POST["password"];

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    die("Kon niet verbinden met de database: " . mysqli_connect_error());
}

$result = mysqli_query(
    $connection,
    "SELECT * FROM users WHERE username='$username' AND password='$password';"
);

if (mysqli_num_rows($result) < 0) {
    die("Geen rijen gevonden.<br/>");
} else if (mysqli_num_rows($result) > 1) {
    echo "Teveel rijen gevonden:<br/>";

    while ($row = mysqli_fetch_row($result)) {
        var_dump($row);
        echo "<br/>";
    }

    die();
}

header("Location: /?login=" . mysqli_num_rows($result), true, 301); exit;
