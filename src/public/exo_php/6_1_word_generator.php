<?php
function generateRandomWord($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomWord = '';
    $charCount = strlen($characters); //=> retourne le nombre de caractères

    for ($i = 0; $i < $length; $i++) {
        $randomWord .= $characters[rand(0, $charCount - 1)];
    }

    return $randomWord;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length1 = $_POST["word1"]; //=>  Récupère les valeurs du formulaire de => <input type="number" name="word1" min="1" max="5">
    $length2 = $_POST["word2"]; //=>  Récupère les valeurs du formulaire => <input type="number" name="word2" min="1" max="5">

    $word1 = generateRandomWord($length1); //=> génère le mot aléatoire
    $word2 = generateRandomWord($length2); //=> génère le mot aléatoire
}
?>

<!--$_SERVER est un tableau contenant des informations telles que les en-têtes, les chemins et les emplacements de script. Les entrées de cet array sont créées par le serveur web, il n'y a donc aucune garantie que chaque serveur web fournira chacune de ces informations ; les serveurs peuvent en omettre certaines ou en fournir d'autres qui ne sont pas répertoriées ici. Cependant, la plupart de ces variables sont prises en compte dans la spécification » CGI/1.1 et sont susceptibles d'être définies.-->

<!--'REQUEST_METHOD'-->
<!--Méthode de requête utilisée pour accéder à la page ; par exemple GET, HEAD, POST, PUT.-->

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Random Word Generator</title>
        </head>
        <body>
        <h1>Word Générator</h1>
        <form method="post" action="6_1_word_generator.php">
<!--            action="6_1_word_generator.php" là ou seront envoyer les données du formulaire-->
<!--            method="post" Cet attribut method spécifie la méthode HTTP utilisée pour soumettre les données du formulaire au serveur. Si la méthode POST est utilisée. Les données saisies seront incluses dans une requête POST et envoyées au fichier 6_1_word_generator.php.-->
            <label for="length1">Longueur mot 1 (entre 1 et 5) :</label>
            <input type="number" name="word1" min="1" max="5">
            <br>
            <label for="length2">Longueur mot 2 (entre 7 et 15) :</label>
            <input type="number" name="word2" min="7" max="15">
            <br>
            <button type="submit">Générer</button>
        </form>

            <?php
                if (isset($word1) && isset($word2)) { // => isset() Détermine si une variable est déclarée et est différente de null
                    echo "<h3>Mot 1 : $word1</h3>";
                    echo "<h3>Mot 2 : $word2</h3>";
                }
            ?>
        </body>
    </html>