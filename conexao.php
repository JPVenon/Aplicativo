<?php
$host = 'seu_host_mysql';
$usuario = 'seu_usuario_mysql';
$senha = 'sua_senha_mysql';
$bancoDados = 'seu_banco_de_dados';

$conexao = new mysqli($host, $usuario, $senha, $bancoDados);

if ($conexao->connect_error) {
    die('Erro na conexão: ' . $conexao->connect_error);
}
?>