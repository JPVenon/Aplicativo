<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Adicione aqui a lógica para inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo 'Formulário enviado com sucesso!';
    } else {
        echo 'Erro ao enviar o formulário: ' . $conexao->error;
    }
} else {
    echo 'Método de requisição inválido.';
}

$conexao->close();
?>