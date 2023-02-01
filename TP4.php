<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Affichage des données saisies</h1>

        <?php
            $a = $_POST['prenom'];
            $b = $_POST['nom'];
            echo $a+$b;
        ?>

        <a href="javascript:history.back()">Essayer à nouveau</a>
    </body>
</html>