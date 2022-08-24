<?php
function getData(int $a, int $b): int
{
    $total = $a += $b;
    return $total;
}
$hasil = getData(10, 10);
var_dump($hasil);
