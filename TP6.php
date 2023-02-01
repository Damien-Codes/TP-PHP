<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $a = $_POST["chiffre_1"];
        $b = $_POST["chiffre_1"];
        $c = $_POST["operateur"];

        if ($c == '+')
        {
            echo $a + $b;
        }

        else if ($c == '-')
        {
            echo $a - $b;
        }

        else if ($c == '/')
        {
            echo $a / $b;
        }

        else if ($c == '*')
        {
            echo $a * $b;
        }
        
        else
        {
            echo "ERREUR";
        }
    ?>
</body>
</html>