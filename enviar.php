<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $mensagem = trim($_POST["mensagem"]);

    $sql = "INSERT INTO contatos (nome, email, mensagem)
            VALUES (?, ?, ?)";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("sss", $nome, $email, $mensagem);

    if ($stmt->execute()) {

        header("Location: index.php?sucesso=1");
        exit();

    } else {

        echo "Erro ao salvar: " . $stmt->error;

    }

    $stmt->close();
}

$conexao->close();

?>