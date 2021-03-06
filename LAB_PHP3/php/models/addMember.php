<?php
require "../modules/conDB.php";

$email = $_POST['email'];
$name = $_POST['name'];
$sname = $_POST['sname'];
$year = $_POST['year'];

try {
    $sql = "INSERT INTO tb_member
            VALUES('$email','$name','$sname',$year)
            ";
    $myqsli->query($sql);
    header("Location:/views/member.php");
} catch (Exception $e) {
    echo $e->getMessage();
}
