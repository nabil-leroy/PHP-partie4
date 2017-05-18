<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 6 Partie 4</title>
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
        <h1>Exercice 6 Partie 4</h1>
        <h2>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
            "Bonjour" + nom + prenom + ",tu as" + age + "ans".
        </h2>
        <p>
            <?php

            function present($name, $surname, $age) {
                $fin = 'Bonjour ' . $name . ' ' . $surname . ' tu as ' . $age . 'ans.';
                return $fin;
            }

            $name('Leroy');
            $surname('Nabil');
            $age(18);
            echo present($fin);
            ?>
        </p>
    </body>
</html>
