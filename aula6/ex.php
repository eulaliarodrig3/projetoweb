<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex.php" method="get">
        Digite o numero?
         <input type="text" name="num">
         <input type="submit" value= "calcule">
    </form>

    <?php
    $num = $_GET ["num"];
    if (num>10) 
    {
        echo "O numero é maior que 10";
    }
    
    
    ?>
</body>
</html>