<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($username)
    $password = mysqli_real_escape_string($password)

    $result = mysql_query("SELECT * FROM user where username = '$username' and password '$password'")
                or die("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        echo "Login success!!! Welcome " $row['username'];
    }else{
        echo "Fialed to login"
    }

?>