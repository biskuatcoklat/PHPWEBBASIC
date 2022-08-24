<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER</title>
</head>
<body>
    <h1>$_SERVER</h1>
    <Table border ="1">
        <?php foreach($_SERVER as $key=> $value) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
        <?php } ?>
    </Table>
    
</body>
</html>