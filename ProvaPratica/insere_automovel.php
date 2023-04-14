<?php
include "conexao.php";

// Receber as informações do formulário de cadastro
$nome = $_POST["nome"];
$placa = $_POST["placa"];
$chassi = $_POST["chassi"];
$montadora = $_POST["montadora"];

// Inserir as informações na tabela "automoveis"
$sql = "INSERT INTO automoveis (nome, placa, chassi, montadora) VALUES ('$nome', '$placa', '$chassi', '$montadora')";
if (mysqli_query($conn, $sql)) {
    echo "Cadastro realizado com sucesso.";
} else {
    echo "Erro ao realizar cadastro: " . mysqli_error($conn);
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
