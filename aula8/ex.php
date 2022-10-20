<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nome = array ("eulalia","erika","mael","ana paula","dayane","carol","joão");
    $nota = array (10,9,8,7,6,5,4);
  
  
    $media=0;
    $soma=0 ;
    $contador=0;
     foreach ($nota as $n ); {
        $contador++;
        $soma+= $n;
     }

    echo "<br/>A soma das nota é:".$soma;
    echo "<br/> A qunatidade de aluno é:".$contador;
    $media = $soma / $contador;
    echo "<br/> a media da turma é:" .$media;
    
    


    ?>


</body>
</html>