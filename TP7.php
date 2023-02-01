<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $a = $_POST ["login"];
        $b = $_POST ["password"];

        if ($a == "admin" && $b == "admin")
        {
            echo "Vous êtes bien connecte"."<br>";
            echo "Vous êtes connecte le " .date("d/m/Y")."<br>";
            echo "Vous êtes connecte le " .date("H:i:s")." Heures";
        }
        else{
            echo "Votre login et/ou votre mot de passe est 
            incorect";
        }
    ?>
</body>
</html>