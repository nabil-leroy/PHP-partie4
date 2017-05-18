<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 5 Partie 4</title>
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
        <h1>Exercice 5  Partie 4</h1>
        <h2>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
        </h2>
        <p>
            <?php

            //déclaration de ma fonction
            function chain($letter, $number) {
                //concaténation des deux variables
                $result = $letter . $number;
                //retourne le résultat
                return $result;
            }

            //Déclaration des variables
            $letter = 'Je suis née en ';
            $number = 1998;
            //Affiche le résultat
            echo chain($letter, $number);
            ?>
        </p>
    </body>
</html>
