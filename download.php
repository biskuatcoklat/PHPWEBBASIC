<?php
if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition, attachment; filename="fileSKBK.pdf"');
    header('Content-Type: file/pdf');
    readfile(__DIR__ . '/file/fileSKBK.pdf');
    exit();
} else {
    echo "gagal";
}
