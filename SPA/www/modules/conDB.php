<?php
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);

$host = "db"; //localhost
$user = "root";
$pass = "1234";
$db = "db_test";

try {
    $mysqli = new mysqli($host, $user, $pass, $db);
    $mysqli->set_charset("utf8");
} catch (Exception $e) {
    echo $e->getMessage();
}
