<?php
    include_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Relatório de Qualidade da Água</title>
</head>
<body>
    <h1>Editar Relatório de Qualidade da Água</h1>

    <style>
        body {
            background-color: #a7caff;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }

        h1 {
            text-align: center;
            color: #012d5e;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        label {
            display: block;
            margin: 10px 0 5px;
            color: #012d5e;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #012d5e;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #a7caff;
        }

        a {
            background-color: #5d9af5;
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
        }

        a:hover {
            text-decoration: underline;
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
        
    </style>

    <?php
    // o GET envia os dados de um formulário web para processamento atarves do PHP
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // definimos o $sql como uma variavel para recuperar informações da tb_relatorio do bd
        $sql = "SELECT * FROM relatorio WHERE id = $id";
        //A consulta SQL é executada usando a função que esta atribuida a result
        $result = $conexao->query($sql);

        // se a consulta retornar mais do que 0 resultas, é chamado o fetch_assoc
        if ($result->num_rows > 0) {
            //ele obtem os dados desse relatorio como um array associativo 
            //os daddos do relatorio sao armazenados na variavel row
            $row = $result->fetch_assoc();
        } else {
            echo "Relatório não encontrado.";
        }
    }
    ?>
    
<!--o meotod POST solicita que o servidor web aceite os dados anexados no corpo da mensagem de requisição para armazenamento -->
<!-- o $row permite que o usuário veja o valor atual do nível de pH e, se necessário, edite -->
<!-- o required  torna o preenchimento desse campo obrigatório para que o formulário seja submetido -->
    <form action="atualizar_relatorio.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="pH">Nível de pH:</label>
        <input type="text" name="pH" value="<?php echo $row['pH']; ?>" required><br>

        <label for="qualidade">Nível de Qualidade da Água:</label>
        <input type="text" name="qualidade" value="<?php echo $row['qualidade']; ?>" required><br>

        <label for="residuos">Quantidade de Resíduos:</label>
        <input type="text" name="residuos" value="<?php echo $row['residuos']; ?>" required><br>

        <label for="armazen">Quantidade de Armazenamento:</label>
        <input type="text" name="armazen" value="<?php echo $row['armazen']; ?>" required><br>

        <input type="submit" value="Atualizar">
    </form>

    <a href="index.php">Voltar para a lista de relatórios</a>
</body>
</html>
