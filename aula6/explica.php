<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<!--while -- enquanto---> 
<body>
  <?php 
  $contador = 1 
  while ($contador <= 10)
   {

     echo $contador;
   $contador = $contador + 1;  
  }
  echo "depois... final";
  ?>  
</body>
</html>