<?php 
$id = $_GET ["id"]
include_once './conexao.php';
$sql = "delete from cliente whwre idcliente" .$id;
if (mysqli_query ($con,$sql)){
    $msg = "excluido com sucesso";
}
else { 
    $msg = "excluido no excluir!";
}
mysqli_close ($con);
echo "<script> alert('"$msg"');
location.href= 'consiltar.php;
</script>";

?>