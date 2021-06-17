<?php
    include_once "conexao.php";

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];

    $sql = "INSERT INTO USUARIOS(NOME, EMAIL, SENHA)
        VALUES (:nome, :email, :senha)";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    echo json_encode("Usuário cadastrado com sucesso!");
?>