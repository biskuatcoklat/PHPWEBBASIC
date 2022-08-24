<?php
require_once "download.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];
    move_uploaded_file($file_tmp_name, __DIR__ . '/file' . $file_name);
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>upload file</h1>
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
        <table>
            <tr>
                <td>file name</td>
                <td><?= $file_name; ?></td>
            </tr>
            <tr>
                <td>file type</td>
                <td><?= $file_type; ?></td>
            </tr>
            <tr>
                <td>file size</td>
                <td><?= $file_size; ?></td>
            </tr>
            <tr>
                <td>file tmp name</td>
                <td><?= $file_tmp_name; ?></td>
            </tr>
            <tr>
                <td>error</td>
                <td><?= $file_error; ?></td>
            </tr>
        </table>

    <?php } ?>
    <h1>form upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>
            file
            <input type="file" name="upload_file">
        </label>
        <input type="submit" value="upload">
        <a href="download.php"><input type="submit" value="download"></a>
    </form>
</body>

</html>