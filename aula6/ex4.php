<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">    
        digite numero
        <input type="text" name = "n1"><br>
        digite outro numero
        <input type="text" name="n2"><br>
        <input type="submit" value="calcule">
    
    </form>
    <?php 
        $n1=$_GET ["n1"];
        $n2=$_GET ["n2"];
            if($n1==$n2) {

                echo "os informados são iguais";
        
            }
            else {
                
                "os numeros informedos são diferentes";
            
            }


    
    
    
    ?>
</body>
</html>