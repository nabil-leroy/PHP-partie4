<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 7 Partie 4</title>
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
        <h1>Exercice 7  Partie 4</h1>
        <h2>Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur : <br>
            - Homme<br>
            - Femme<br>
            La fonction doit renvoyer en fonction des paramètres :<br>
            - Vous êtes un homme et vous êtes majeur<br>
            - Vous êtes un homme et vous êtes mineur<br>
            - Vous êtes une femme et vous êtes majeur<br>
            - Vous êtes une femme et vous êtes mineur<br>
            Gérer tous les cas.
        </h2>
        <p>
            <?php

            function age($age) {
                if ($age >= 18) {
                    $return = "Vous êtes majeur";
                } elseif ($age < 18) {
                    $return = "Vous êtes mineur";
                }
                return $return;
            }

            function gender($gender) {
                if ($gender == 'homme') {
                    $return = "Vous êtes un homme";
                } elseif ($gender == 'femme') {
                    $return = "Vous êtes une femme";
                }
                return $return;
            }

            $age = 20;
            $gender = 'femme';
            echo age($age) . ' ' . gender($gender);
            ?>

        </p>
    </body>
</html>