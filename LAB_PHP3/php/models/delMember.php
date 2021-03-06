<?php
require "../modules/conDB.php";

$email = $_GET['email'];

try {
    $sql = "DELETE FROM tb_member WHERE email = '$email' ";
    $myqsli->query($sql);
    header("Location:/views/member.php");
} catch (Exception $e) {
    echo $e->getMessage();
}
