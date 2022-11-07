<! DOCTYPE html>

<html lang="en">

<>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<documento><>

</cabeça>

<>

<h3>Página Inicial</h3>

<>

<a href="cadastrar.php">Cadastrar Cliente</a><br/>

<a href="consultar.php">Consultar Cliente</a>

</corpo>

</html>





===============================================

<?php  

date_default_timezone_set ("América/Sao_Paulo");

resgate de dados da tela

$nome = $_POST["nome"];

$email = $_POST["email"];

$telefone = $_POST["telefone"];

$dtcadastro = dados ("Y-m-d"); padrão do banco

abrir conexão com o banco de dados.

include_once'conexao.php';

Montar o sql de gravação

(nulo,'ana','ana@gmail','1111-2222','2022-11-03');

$sql = "inserir nos valores do cliente

(nulo,'".$nome."','.$email.','.$telefone."','".$dtcadastro."";







se (mysqli_query($con,$sql){

    $msg = "Gravado com sucesso";

}else{

    $msg = "Erro ao Gravar!";

}

fechar a conexão com o banco

mysqli_close($con);

echo"<script> alerta ('".$msg.");

localização.href='índice.php';

</script>";









?>





