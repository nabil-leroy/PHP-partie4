<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 8 Partie 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie4/exercice1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie4/exercice2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie4/exercice3/'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie4/exercice4/'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie4/exercice5/'" />
            <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie4/exercice6/'" />
            <input type="button" value="Exercice 7" onClick="javascript:document.location.href = 'http://partie4/exercice7/'" />
            <input type="button" value="Exercice 8" onClick="javascript:document.location.href = 'http://partie4/exercice8/'" />
        </header>
        <h1>Exercice 8  Partie 4</h1>
        <h2>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
            Tous les paramètres doivent avoir une valeur par défaut.
        </h2>
        <p>
            <?php

            /**
             * Addition de tous les paramètres
             * @param int $number1
             * @param int $number2
             * @param int $number3
             * @return int
             */
            function calcul($number1 = 0, $number2 = 0, $number3 = 0) {
                $result = $number1 + $number2 + $number3;
                return $result;
            }

            echo calcul(24, 12, 35); //Chiffre pour le calcul
            ?>

        </p>
    </body>
</html>
