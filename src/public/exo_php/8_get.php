<pre>
<?php
print_r($_GET);
/* Array
(
	[firstname] => Jean
    [lastname] => Fernand
Ceci serait renvoyer si l'input Prénom aurait Jean comme valeur et l'input Nom Fernand comme valeur.
) */
?>
</pre>
<!--Avec GET les élément mentionner dans les input seront dans l'url du navigateur, a ne pas utiliser pour envoyer des données sensibles mais peut être utiliser pour créer des filtres ou autre (pratique pour garder en cache et revenir plus vite sur la page voulue)-->
<form action="8_get.php" method="GET">
    <!--    action défini vers ou envoyer les données, ici dans 8_post.php-->
    <!--    method défini la façon dont nous allons envoyer les données GET ou POST-->
    <div>
        <label for="firstname">Prénom</label><br>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <label for="lastname">Nom</label><br>
        <input type="date" name="date" id="lastname">
    </div>
    <button type="submit">Submit</button>
</form>
