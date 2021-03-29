<?php

$connect = mysqli_connect('localhost', 'root', 'mysql','test');

if (!$connect) {
    die('error connect db');
}
?>