<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
</head>
<body>
<h1>FTP TIGER</h1>
<a href="/PHP/List.php">รายละเอียดข้อมูลที่เก็บไว้</a>
<hr width="1500" color="red">

    <h2>upload file</h2>
        <form  action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit" name="submit">upload</button>
    </form>
<br>
    <h3>Create Folder</h3>
    <form  action ="/PHP/mkdir.php" method="post">
        <label for="name"> New Folder: </label><input type="text" name="name"><br><br>
        <input type="submit" value="Create">
    </form>
    
</body>
</html>