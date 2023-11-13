<?php

$sever = "localhost";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect($sever,$usuario,$senha);


?>
</div>


<!-- FIM TELA DE LOGIN -->

<!DOCTYPE html>
<html>
<head>
    <title>PUREFY - ADICIONAR RELATÓRIO DE QUALIDADE DA ÁGUA</title>
</head>
<body>

<style>
        body {
            background-color: #a7caff;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        .adicionarbg{
        background-image:
        linear-gradient(to top right, rgba(0, 74, 109, 0.3) 20%, rgba(9, 38, 82, 0.8) 80%),
        url(https://cdn.discordapp.com/attachments/918291776169717760/1172929940442849370/dvdsvds.png?ex=65621b21&is=654fa621&hm=8e5e25e5553edb7d20e71cc40d3fdee90416f49169c493b18a7cb21d97f6187a&);
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
        padding-bottom: 40px;
        width: 100%;
    }

        .adicionarcontainer {
        margin: auto;
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

        .adicionarcontainer h1{
        position: relative;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 30px;
        font-weight: 500;
        padding-top: 10%;
        color: #012d5e;
        align-items: center;
        text-align: center;
        }

        .adicionarcontainer h2{
        position: relative;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        font-weight: 300;
        margin-top: -10px;
        color: #012d5e;
        align-items: center;
        text-align: center;
        }

        form {
            width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #012d5e;
            text-transform: uppercase;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 50px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        input:hover, textarea:hover, input:focus, textarea:focus {
        border-color: #2a62a0;
        box-shadow: 5px 0px 9px #ebebe5;
        color: black;
        font-weight: bold;
        }

        input:focus{
        background-color: #f0f0f0;
        }
        


        input[type="submit"] {
            background: #3CB371;
            display: block;
            position: relative;
            margin-left: 23%;
            border: 0px solid #ffffff;
            margin-top: 50px;
            border-radius: 25px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 4px;
            width: 250px;
            padding: 1.2em 0;
            text-decoration: none;
            text-align: center;
            text-shadow: 1px 1px 3px rgba(0, 0, 1, 1);
            box-shadow: 2px 2px 3px rgb(73, 73, 73);
        }

        input[type="submit"]:hover {
            cursor: pointer;
            background: 	#2E8B57;
            border: none;
            text-align:center;
            font-weight: 300;
        }
        

        @media (max-width: 600px) {
        input[type="submit"]:hover {
            bottom: 25px;
        padding-top: 15px;
        padding-bottom: 15px;
        }

        input[type="submit"]:hover {
            bottom: 30px;
        }
    
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

            .delete {
            background-color: #ff1100;
        }

            .delete:hover {
            background-color: #740800;
        }


            .edit:hover {
            background-color: #012d5e;
        }

        .adicionar {
        background: linear-gradient(to left, #2a62a0, #00152f 100%);
        display: block;
        border: 0px solid #ffffff;
        margin-top: 50px;
        border-radius: 25px;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 4px;
        width: 250px;
        padding: 1.2em 0;
        text-decoration: none;
        text-align: center;
        text-shadow: 2px 2px 3px rgba(0, 0, 2, 3);
        box-shadow: 2px 2px 3px rgb(73, 73, 73);
    }    
        
    </style>    



    <div class="adicionarbg">

        <div class="adicionarcontainer">
        <h1>ADICIONAR RELATÓRIO DE QUALIDADE DA ÁGUA</h1>
        <h2> INSIRA OS DADOS MANUALMENTE </h2>

        <!-- Como da mesma maneira que fizemos no edita.php -->
        <!--o meotod POST solicita que o servidor web aceite os dados anexados no corpo da mensagem de requisição para armazenamento -->
        <!-- o required  torna o preenchimento desse campo obrigatório para que o formulário seja submetido -->

        <form action="salvar_relatorio.php" method="POST">
            <label for="pH">Nível de pH:</label>
            <input type="text" name="pH" required><br>

            <label for="qualidade">Nível de Qualidade da Água:</label>
            <input type="text" name="qualidade" required><br>

            <label for="residuos">Quantidade de Resíduos:</label>
            <input type="text" name="residuos" required><br>

            <label for="armazen">Quantidade de Armazenamento:</label>
            <input type="text" name="armazen" required><br>

            <input type="submit" value="Adicionar">
        </form>

        <!-- FIM FORM -->

</div>

    
        <div class="retorno">
        <a href="index.php">VOLTAR</a>
        </div>

</body>
</html>
