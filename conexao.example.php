<?php
// Renomeie este arquivo para conexao.php apenas no seu computador.
// NÃO publique a versão com sua senha real no GitHub.

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "smartdev";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados.");
}

$conexao->set_charset("utf8mb4");
?>
