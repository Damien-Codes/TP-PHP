<html>
    <body>
        Nous sommes le <?php echo Date("j/m/V"); ?><br>
        <?php echo "il est ".Date("H: i:s"). "‹<br>›";
        echo "il est ".Date("H: i:s"). "‹br›";
        if ( Date("H") < 12 ){
            echo "Bon matin ..";
        }else{
            echo "Bonne aprils midi..";
        }
        ?>
    </body>
</html›