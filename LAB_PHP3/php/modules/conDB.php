<?php
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);

$host = "db";
$user = "root";
$pass = "1234";
$db = "db_test";

try {
    $myqsli = new mysqli($host, $user, $pass, $db);
    $myqsli->query("SET NAMES utf8");
    $myqsli->set_charset("utf8");
} catch (Exception $e) {
    echo $e->getMessage();
    echo $e->getCode();
}
