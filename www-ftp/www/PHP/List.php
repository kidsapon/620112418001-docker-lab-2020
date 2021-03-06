<html>
  <title>LIST</title>
<body>
  <a href="../index.php">หน้าหลัก</a>
<?php
$ftp_host = "10.30.140.105";
$ftp_user = "Tora";
$ftp_password = 1234;

//Connect
echo "<br />Connecting to $ftp_host via FTP...";
$conn = ftp_connect($ftp_host);
$login = ftp_login($conn, $ftp_user, $ftp_password);

//
//Enable PASV ( Note: must be done after ftp_login() )
//
$mode = ftp_pasv($conn, TRUE);

//Login OK ?
if ((!$conn) || (!$login) || (!$mode)) {
  die("FTP connection has failed !");
}
echo "<br/>Login Ok.<br/>";
echo "<br/>if Size = -1 bytes is folder.<br/> ";

?>

<table border="1">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Size(bytes)</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $file_list = ftp_nlist($conn,".");
    $i = 0;
    foreach ($file_list as $file) {
      $fsize = ftp_size($conn, $file);
    ?>
      <tr>
        <td><?= $i+1 ?></td>
        <td><?= $file ?></td>
        <td><?= $fsize ?></td>
        <td>
          <a href="delete.php?name=<?= $file ?>">delete</a>
        </td>
      </tr>
    <?php
    $i++; 
    }
    ?>
  </tbody>
</table>
<?php

//close
ftp_close($conn); 
?>
</body>
</html>