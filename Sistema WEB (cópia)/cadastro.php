<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes </title>
    <link rel="stylesheet" href="css/cadastro.css">
    <script type="text/javascript" src="js/cadastro.js" defer></script>
</head>

<body background="imagens/officeSeven.jpg">
    <nav>
        <label class="logo"> Automatic Office</label>
            <ul>
                <li><a class="active" href="home1.php">Dashboard</a></li>
                <li><a href="cadastro.php">Clientes</a></li>
                <li><a href="oficios.php">Oficios</a></li>
                <li><a href="logout.php">Troca login</a></li>
                <li><a href="logout.php">Sair</a></li
            </ul>
    </nav>

    <div class="pescad1">
    <button class="pescad" type="submit">Pesquisar Cadastro</button>
    </div>

<div><button class="novocad" onclick="mostrar('seuformulario')">Novo Cadastro</button></div>
 
    <div method="post" id="onde-vai-mostrar">
        <form id="seuformulario">
        <fieldset><legend><h3>Dados Pessoais</h3></legend>
                <p><label for="nome">Nome Completo:</label><input type="text" class="dadPessoas" id="nome" placeholder="Nome completo" required></p>
                <p> <label for="cpf">CPF:</label><input type="number" id="cpf" class="dadPessoas" irequired></p>
                <p><label for="rg">RG:</label><input type="number" class="dadPessoas" id="rg" ></p>
                <p> <label for="dtnasc">Data de Nascimento: </label><input type="date" class="dadPessoas" id="dtnasc" required></p>
                <p> <label for="tel">Telefone:</label><input type="number" class="dadPessoas" id="tel" ><label for="cpf">Celular</label><input type="number" class="dadPessoas" id="cel"></p>
                <p><label for="email">Email:</label><input type="email" class="dadPessoas" id="email" placeholder="exemplo@email.com"></p>
                <label for="estcivil">Estado Civil:</label>
                <select id="estcivil">
                    <option value="Solteiro">Solteiro</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Separado">Separado</option>
                    <option value="Casado">Casado</option>
                    <option value="Viúvo">Viúvo</option>
                </select>

            <fieldset><legend><h4>Endereço</h4></legend>
                <p><label for="ende">Endereço:</label><input type="text" id="ende" class="dadPessoas" placeholder="Rua da fazenda">
                    <label for="num_ende">N:</label><input type="number" id="num_ende"  class="dadPessoas" placeholder="Nº"></p>
                <p><label for="cep">CEP:</label><input type="number" id="cep" class="dadPessoas" placeholder="01000-001"></p>
                <p><label for="complemento">Complemento:</label><input type="text" id="complemento" class="dadPessoas" placeholder="Bairro"> </p>
            </fieldset>
           <p><label class="enviar" for="file">Enviar Arquivos</label><input display="none" id="file"type="file" ></p>
            <p><input class="enviar" type="submit" value="Incluir"  ></p>
        </fieldset>
    </form>
    </div>

</body>
</html>