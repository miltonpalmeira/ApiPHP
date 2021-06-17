<?php
    header("Access-Control-Allow-Origin: *");
    include_once "conexao.php";

    $stmt = $con->prepare("SELECT * FROM USUARIOS");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_OBJ);

    echo json_encode($results);
?>