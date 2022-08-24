<?php
if (!isset($_GET['nama']) || $_GET['nama'] == "") {
    http_response_code(400);
    echo "nama is required";
    exit();
}
$say = "hai" . htmlspecialchars($_GET['nama']);
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
    <h1><?= $say; ?></h1>
</body>

</html>