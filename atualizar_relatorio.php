<?php

include_once('config.php');


//o POST envia dados de um formulário HTML para um servidor para processamento
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //O código verifica se as variáveis POST estão definidas usando isset
    if (isset($_POST['id']) && isset($_POST['pH']) && isset($_POST['qualidade']) && isset($_POST['residuos']) && isset($_POST['armazen'])) {
        // se todas as variaves estiverem definidas sao atrbuidas logo abaixo
        $id = $_POST['id'];
        $pH = $_POST['pH'];
        $qualidade = $_POST['qualidade'];
        $residuos = $_POST['residuos'];
        $armazen = $_POST['armazen'];

        // aqui a variavel sql recebe a intrução de atualizar a variavel definida anteriormente na tb_relatorio
        $sql = "UPDATE relatorio SET pH = '$pH', qualidade = '$qualidade', residuos = '$residuos', armazen = '$armazen' WHERE id = $id";
        //se a consulta for executada com sucesso a mensagem "Relatório atualizado com sucesso." é exibida, se não, aparece uma mensagem de erro.
        if ($conexao->query($sql) === TRUE) {
            echo "Relatório atualizado com sucesso.";
        } else {
            echo "Erro ao atualizar o relatório: " . $conexao->error;
        }
    } else {
        echo "Campos do formulário não preenchidos corretamente.";
    }
}

//encerra conexão com bd
$conexao->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ATUALIZAR</title>
</head>
<body>

<style>
        body {
            background-color: #a7caff;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        .atualizarbg{
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

<div class="atualizarbg">
<div class="voltarcontainer">
        <h1>ATUALIZAÇÃO REALIZADA</h1>
<br>
        <a href="index.php">Voltar</a>
    </div>
    </body>

