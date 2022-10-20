<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $dado = range (1,6);
    var_dump ($dado);
    
    echo "<br>===================================================================";
        
    $dado1 = range (1,100,2);
    var_dump ($dado1);

    $alfabetominusculalo = range ("a","z");
    var_dump($alfabetominusculalo);
    ?>
</body>
</html>