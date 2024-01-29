<?php

$db = mysqli_connect('localhost', 'root', '1234', 'sakila');

if(!$db) {
    echo "hubo un error";
    exit;
}


