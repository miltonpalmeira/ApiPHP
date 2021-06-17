<?php
    header("Access-Control-Allow-Origin: *");
    $con = new PDO("mysql:dbhost=localhost;dbname=testeapi",
        "root", "senac@sjc");
?>