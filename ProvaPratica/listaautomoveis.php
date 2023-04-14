<?php
include "conexao.php";

// Imprimir a lista de automóveis
echo "<h2>Lista de Automóveis</h2>";
echo "<table>";
echo "<tr><th>Nome</th><th>Placa</th><th>Chassi</th><th>Montadora</th></tr>";
while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $linha["nome"] . "</td>";
    echo "<td>" . $linha["placa"] . "</td>";
    echo "<td>" . $linha["chassi"] . "</td>";
    echo "<td>" . $linha["nome_montadora"] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
