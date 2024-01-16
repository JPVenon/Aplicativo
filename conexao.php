<?php
$host = 'usuarios';
$usuario = 'root';
$senha = 'WAlh,4484';
$bancoDados = 'BANCO';

$conexao = new mysqli($host, $usuario, $senha, $bancoDados);

if ($conexao->connect_error) {
    die('Erro na conexão: ' . $conexao->connect_error);
}
?>
