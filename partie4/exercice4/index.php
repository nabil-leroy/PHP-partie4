<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 4 Partie 4</title>
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
        <h1>Exercice 4  Partie 4</h1>
        <h2>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br>
            - Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br>
            - Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br>
            - Les deux nombres sont identiques si les deux nombres sont égaux
        </h2>
        <p>
            <?php

            function calcul($number1, $number2) {
                // Si number1 est plus grand que number 2 sa retourne le résultats indique
                if ($number1 > $number2) { 
                    $result = ' ,num 1 est plus grand que num 2 ';
                    // Sinon sa retourne que number 1 est plus petit que number 2
                } elseif ($number1 < $number2) { 
                    $result = $number1 . ' est plus petit que ' . $number2;
                    //Si les deux nombres sont égaux sa retourne se résultats
                } else { 
                    $result = $number1 . ' est égale à ' . $number2;
                }
                return $result;
            }

            $num1 = 40;
            $num2 = 40;
            // affiche les variables indiqué
            echo calcul($num1, $num2);
            //Chiffre pour le calcul
            echo calcul(24, 32); 
            ?>
        </p>
    </body>
</html>
