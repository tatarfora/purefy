<?php

include_once('config.php');

//o POST envia dados de um formulário HTML para um servidor para processamento
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // coleta os dados do formulário
    $pH = $_POST['pH'];
    $qualidade = $_POST['qualidade'];
    $residuos = $_POST['residuos'];
    $armazen = $_POST['armazen'];
    // insere os dados no bd
    $sql = "INSERT INTO relatorio (pH, qualidade, residuos, armazen) VALUES ('$pH', '$qualidade', '$residuos', '$armazen')";
    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $conexao->error;
    }
    //Encerra conexão com o bd
    $conexao->close();
}
?>