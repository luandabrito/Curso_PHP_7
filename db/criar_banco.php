<div class="titulo">Criar Banco</div>

<?php

require_once 'conexao.php';

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

echo $resultado ? 'Sucesso' : "Erro: " . $conexao->error;

$conexao->close();



?>