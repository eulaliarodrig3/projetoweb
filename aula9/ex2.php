=======================

mysql -u raiz



criar banco de dados projeto2;



usar projeto2;



criar cliente de tabela(

idcliente int chave primária auto_increment,

nome varchar(30) não é nulo,

e-mail varchar(30) não nulo,

telefone varchar(20) não nulo,

data dtcadastro

);



inserir em valores cliente

(nulo,'ana','ana@gmail','1111-2222','2022-11-03');



selecionar * do cliente;     





============================================

<!DOCTYPE html>



<html>



    <head>



        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title></title>

    </head>

    <body>      



        <h3>Lista de Clientes</h3>       



        <?php   
            include_once "./conexao.php";  

            $con = mysqli_connect("localhost","root","","projeto2"); //abre a conexao 

            $sql = "select * from cliente";



            $result = mysqli_query($con,$sql); //executa a consulta no mysql



            $totalregistro = mysqli_num_rows($result);

            if($totalregistro > 0){

                //encontrou



                echo "<table width='800px' border='1px'>

                        <tr>

                            <th>Nome</th>

                            <th>E-mail</th>

                            <th>Telefone</th>
                            
                            <th>Data de Cadastro</th>

                            <th> editar <th>

                            <th> exculir <th>
                        </tr>";       

                while($row = mysqli_fetch_array($result)){

                    echo "<tr>";

                    echo "<td>".$row["nome"]."</td>";

                    echo "<td>".$row["email"]."</td>";

                    echo "<td>".$row["telefone"]."</td>";

                    echo "<td>".$row["dtcadastro"]."</td>";

                    echo "</tr>";                   



                }   

                echo "</table> Total de Registros: ".$totalregistro;



            }else{

                echo "Nenhum cliente cadastrado!";

            }    

            mysqli_close($con);



        ?>



    </body>



</html>

