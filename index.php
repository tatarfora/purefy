<?php
    include_once('config.php');
?>


<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUREFY - ÁREA DO ADMINISTRADOR</title>
    <link rel="stylesheet" href="relatoriobasestyle.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>

  <body>
    <!-- ADMINISTRADOR DETALHES -->
        <div class="headerrel"> 
            <h1>DASHBOARD</h1>
        </div>
      
          <div class="containeradministrador">
            <div class="fotoadm">
                <img src="ico.png" width=300px height=300px alt="A imagem ilustra o desenho de uma página web com um olho no canto inferior direito, as linhas são azuis.">
            </div>
            <div class="infoadm">
              <br>
                <h3>NOME SOBRENOME UM SOBRENOME DOIS</h3>
                <p><b>ADMINISTRADOR</b> ESCRITÓRIO CENTRAL</p>
                <p><b>MATRICULA</b> 9843024832</p>
                <br>
                <h3>DADOS PESSOAIS</h3>
                <p><b> DATA DE NASCIMENTO</b><br> 07/11/1196</p>
                <p><b> RG </b> <br>XXX.XXX.XXX-XX</p>
                <p><b> CPF</b> <br>XXX.XXX.XXX-XX</p>
                <br>
            </div>

            <div class="infoadm">
                <br>
                <h3>ENDEREÇO COMERCIAL</h3>
                <p><b>BBC - BARIGUI BUSINESS CENTER</b></p>
                <p>R. GEN. MÁRIO TOURINHO, 1746 - 
                  3º ANDAR, SALA 301 <br>CAMPINA DO SIQUEIRA, CURITIBA - PR <br> 80740-000</p>
                <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
              </div>
          </div>
            
      
        </div>

    <!-- FIM DO ADMINISTRADOR -->

    <style>

       
/** O PROJETO A SEGUIR FOI DESENVOLVIDO COM MUITA AJUDA DO YOUTUBE, DO W3SCHOOLS, CODEACADEMY E DE PERGUNTAS À COLEGAS DE OUTRAS INSTITUIÇÕES **/

/**INÍCIO DO BODY**/

        html, body {
            margin: 0;
            height: 100%;
        }

        /**FIM DO BODY**/


        a {
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .headerrel {
            background-color:  #f0f0f0;
            background-image:
            linear-gradient(to top right, rgba(0, 74, 109, 0.63) 20%, rgba(9, 38, 82, 0.8) 80%),
            url(https://i.imgur.com/TYkBz8U.png);
            margin-top: -52px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 10%;
            padding: 20px;
            width: 100%;
            margin-bottom: 2%;
        }

        .headerrel h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 45px;
            font-weight: 300;
            color: #fff;
            align-items: left;
            text-align: left;
            margin-top: 4%;
            padding: 30px;
        }

        /** INICIO DO ADM **/

        .containeradministrador{
            display:flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            padding: 90px;
            margin: auto;
            margin-top: 50px;
            width: 85%;
            height: auto;
            background-color: #f0f0f0;
            border-radius: 500px;
            padding: 10px;
            align-content: center;
            align-items: center;
        }
        
        .fotoadm img{
            display:flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            align-self: center;
            margin: auto;
            border: 3px #fff;
            border-radius: 500px;
            padding: 30px;
        }

        .infoadm{
            display:flex;
            flex-direction: column;
            width: 30%;
            margin: 50px;
            margin-top: 2%;
            text-align: left;
            align-items: left;
            margin-left: 50px;
        }

        .infoadm H3{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
            font-weight: 600;
            color: #012d5e;
            align-items: left;
            text-align: left;
            margin-top: -1.4%;
        }

        .infoadm p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
            font-weight: 400;
            color: #012d5e;
            align-items: left;
            text-align: left;
            margin-top: -1.4%;
        }

        .infoadm b {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: #012d5e;
            align-items: left;
            text-align: left;
            margin-top: -1.4%;
        }

        /** FIM DO ADM **/

        /** COMEÇO DO PHP **/

        table {
            position: relative;
            align-self: center;
            text-align: center;
            margin: auto;
            width: 80%;
            border: transparent;
            border-radius: 150px;
            border-collapse: collapse;
            margin-top: 20px;
            background-color:  #f0f0f0;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            
        }

        th {
            background-color: #2a62a0;
            color: white;
            background-image:
            linear-gradient(to top right, rgba(0, 74, 109, 0.63) 20%, rgba(9, 38, 82, 0.8) 80%),
            url(https://i.imgur.com/TYkBz8U.png);
            padding:20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;     
            font-size: 18px;    
            font-weight: 150;   
            text-transform: uppercase;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .edit a{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


        /** FIM DO PHP **/

        /** BOTÃO DE LOGOUT **/


        .logout {
            background: linear-gradient(to left, #FF0000, 	#B22222 100%);
            display: block;
            align-items: center;
            border: 0px solid #ffffff;
            margin-top: -10px;
            margin-left: 45%;
            border-radius: 25px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 4px;
            width: 250px;
            padding: 1.2em 0;
            text-decoration: none;
            text-align: center;
            align-content: center;
            text-shadow: 2px 2px 3px rgba(0, 0, 2, 3);
            box-shadow: 2px 2px 3px rgb(73, 73, 73);
        }
        
        .logout:hover{
            cursor: pointer;
            background: #800000;
            border: none;
            
        }
        
        @media (max-width: 600px) {
            .logout {
                    bottom: 25px;
                    padding-top: 15px;
                    padding-bottom: 15px;
                    margin-left: 20%;
            }

            .logout:hover {
                bottom: 30px;
            }
        
        }

        /** BOTAO ADICIONAR */

        .adicionar {
            background: 	#3CB371;
            display: block;
            align-items: center;
            border: 0px solid #ffffff;
            margin-left: 45%;
            margin-top: 50px;
            border-radius: 25px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 2px;
            width: 250px;
            padding: 1.2em 0;
            text-decoration: none;
            text-align: center;
            align-content: center;
            text-shadow: 2px 2px 3px rgba(0, 0, 2, 3);
            box-shadow: 2px 2px 3px rgb(73, 73, 73);
        }
        
        .adicionar:hover{
            cursor: pointer;
            background: #2E8B57;
            border: none;
            
        }
        
        @media (max-width: 600px) {
            .logout {
                    bottom: 25px;
                    padding-top: 15px;
                    padding-bottom: 15px;
                    margin-left: 20%;
            }

            .logout:hover {
                bottom: 30px;
            }
        
        }

/**FOOTER**/

        .footer{
            color:#fff;
            background-image:
            linear-gradient(to top right, rgba(0, 74, 109, 0.63) 20%, rgba(9, 38, 82, 0.8) 80%),
            url(https://i.imgur.com/TYkBz8U.png);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 100%;
            text-align: center;
        }

        .copyright{
            font-size: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

    </style>

 <!--CRUD 1 --> 

 <table>
        <tr class="TB">
            <th>Nível de pH</th>
            <th>Nível de Qualidade da Água</th>
            <th>Quantidade de Resíduos</th>
            <th>Quantidade de Armazenamento</th>
            <th>Ações</th>
        </tr>

        <?php
         // Consulta os relatórios
        $sql = "SELECT * FROM relatorio";
        $result = $conexao->query($sql);
        // usamos fetch_assoc() para obter cada linha de resultados como um array associativo
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['pH'] . "</td>";
            echo "<td>" . $row['qualidade'] . "</td>";
            echo "<td>" . $row['residuos'] . "</td>";
            echo "<td>" . $row['armazen'] . "</td>";
            echo "<td><a href='editar.php?id=" . $row['id'] . "'>Editar</a> | <a href='excluir.php?id=" . $row['id'] . "'>Excluir</a></td>";
            echo "</tr>";
        }
        //encerra conexão com bd
        $conexao->close();
        ?>
    </table>

    

    <!-- LOGOUT -->

    <div class = "logoutbotao">
        <a href="adicionar.php"><button class="adicionar">Adicionar Relatório</button></a><br><br>
        <a href="index.html"><button class="logout">Logout</button>
        </a>
    </div>

    <!-- FIM LOGOUT -->


    <!-- COMEÇO DO PSEUDOFOOTER -->

    <footer class="text-center footer text-center">

        <div class="footerbox">
            <div class="copyright"> <p>Copyright © 2023. Criado por Cainã Boza, Camila Araújo & Yasmin Carmona.</p> </div>
        </div>
      </footer>
    <!-- FIM DO FOOTER -->

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
    </body>

</body>

</html>
