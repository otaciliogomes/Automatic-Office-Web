<?php
session_start();

include('conexao.php');
//AQUI ESTA VEFICANDO SE O USUARIO NÃO DEIXOU EM BRANCO O FORMULARIO
if(empty($_POST['usuario']) || empty ($_POST['senha'])){
    header('Location: index.php');
    exit();
};

// AQUI BUSCAR NO BANCO DE DADOS SE ESSE USUARIO EXISTE
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$senha = md5($senha);
$query = "select id, usuario from usuarios where usuario = '$usuario' and senha = '$senha';" ;
echo $query;
$result = mysqli_query($conexao, $query);
var_dump($result);



$row = mysqli_num_rows($result);
var_dump($row);

// AQUI VERIFICA O CODIGO DE CIMA APONTAR UM USUARIO ELE REALIZA O LOGIN, CASO NÃO RETORNA DA PAGINA INDEX
if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: home1.php');
    exit();
}else{
    $_SESSION['nao_autenticado.php'] = true;
    header('Location: index.php');
    exit();
}
?>