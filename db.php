<?php
$connection = mysqli_connect('localhost', 'root', '', 'product');
if(!$connection) {
    echo "we could not connect";
    die();
}
?>