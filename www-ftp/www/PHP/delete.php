<?php
session_start();
require('Connect.php');

if(isset($_GET['name'])){
    $file = $_GET['name'];

if (ftp_delete($conn, $file))
  {
  echo "$file deleted";
  }
else
  {
  echo "Could not delete $file";
  }
}
// close connection
ftp_close($conn);
?>