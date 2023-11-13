<?php
include_once('config.php');

// o GET envia os dados de um formulário web para processamento atarves do PHP
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // atribuimos a sql a intrução delete que tem o objetivo de excluir uma info da tb_relatorio
    $sql = "DELETE FROM relatorio WHERE id = $id";
    // verifica se a instrução foi executada com sucesso ou não
    if ($conexao->query($sql) === TRUE) {
        echo "Relatório excluído com sucesso.";
    } else {
        echo "Erro ao excluir o relatório: " . $conexao->error;
    }
} else {
    echo "ID do relatório não especificado.";
}
// encerramos conexao com o bd
$conexao->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>EXCLUIR</title>
</head>
<body>

<style>
        body {
            background-color: #a7caff;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        .excluirbg{
        background-image:
        linear-gradient(to top right, rgba(0, 74, 109, 0.3) 20%, rgba(9, 38, 82, 0.8) 80%),
        url(https://cdn.discordapp.com/attachments/918291776169717760/1172929940442849370/dvdsvds.png?ex=65621b21&is=654fa621&hm=8e5e25e5553edb7d20e71cc40d3fdee90416f49169c493b18a7cb21d97f6187a&);
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
        }

        .voltarcontainer {
        margin-top: 19%;
        margin-bottom: 19%;
        display: flex;
        justify-content: center;
        flex-flow: wrap;
        background-color: #fff;
        width: 500px;
        padding: 20px 40px 40px 40px;
        -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        border-radius: 150px;
        position: relative;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

        .voltarcontainer h1{
        position: relative;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 30px;
        font-weight: 500;
        padding-top: 5%;
        color: #012d5e;
        align-items: center;
        text-align: center;
        }

        .voltarcontainer h2{
        position: relative;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        font-weight: 300;
        margin-top: -10px;
        color: #012d5e;
        align-items: center;
        text-align: center;
        }


        .retorno {
        display: block;
        justify-content: center;
        flex-flow: wrap;
        width: 500px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
        margin: auto;
        }

        a {
            background: linear-gradient(to left, #2a62a0, #00152f 100%);
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            border: 0px solid #ffffff;
            margin:auto;
            border-radius: 25px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 4px;
            width: 150px;
            padding: 1.2em 0;
            text-decoration: none;
            text-align: center;
            text-shadow: 2px 2px 3px rgba(0, 0, 2, 3);
            box-shadow: 2px 2px 3px rgb(73, 73, 73);
            font-size: 15px;
        }

        a:hover {
            text-decoration: NONE;
            cursor: pointer;
            background: linear-gradient(to left, #a7caff, #5d9af5 100%);
            border: none;
        }
</style>

<div class="excluirbg">
<div class="voltarcontainer">
        <h1>REMOÇÃO REALIZADA</h1>
<br>
        <a href="index.php">Voltar</a>
    </div>
    </body>