<pre>
<?php
print_r($_POST);
?>
<!--Array-->
<!--(-->
<!--	[firstname] => Jean-->
<!--    [date] => 2021-04-25-->
<!--    [email] => Jean-->
<!--    [cgu] => on-->
<!--    [genre] => masculin-->
<!--    [firstname] => Jean-->
<!--    [favoris] => fibre-->
<!--Ceci serait renvoyer si les valeurs auraient été entrer dans les différents input-->
<!--)-->

</pre>
<!--Avec POST aucun élément ne sera dans URL du navigateur (utiliser pour les authentifications etc)-->
<form action="8_post.php" method="POST">
<!--    action défini vers ou envoyer les données, ici dans 8_post.php-->
<!--    method défini la façon dont nous allons envoyer les données GET ou POST-->
    <div>
        <label for="firstname">Prénom</label><br>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <label for="date">Date</label><br>
        <input type="date" name="date" id="date">
    </div>
    <div>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="cgu">CGU</label>
        <input type="checkbox" name="cgu" id="cgu">
    </div>
    <div>
        <label for="masculin">Homme</label>
        <input type="radio" name="genre" id="masculin" value="masculin">
        <label for="feminin">Femme</label>
        <input type="radio" name="genre" id="feminin" value="feminin">
    </div>
    <div>
        <label for="favoris">Favoris</label>
        <select name="favoris" id="favoris">
            <option value="wifi">Wifi</option>
            <option value="tv">TV</option>
            <option value="fibre">Fibre</option>
        </select>
    </div>

    <button type="submit">Submit</button>
</form>

<!--On peut également utiliser des tableaux de valeurs-->
<!--il suffit d'utiliser name="tableau[]-->
<!--<pre>-->
<!--    --><?php
//print_r($_POST);
//?>
<!--    Array-->
<!--(-->
<!--    [adresse] => Array-->
<!--        (-->
<!--            [0] => input1-->
<!--            [1] => input2-->
<!--        )-->
<!---->
<!--    [idendite] => Array-->
<!--        (-->
<!--            [0] => input1-->
<!--            [1] => input2-->
<!--        )-->
<!--)-->
<!--</pre>-->
<!---->
<!--<form action="" method="POST">-->
<!---->
<!---->
<!--    <input name="adresse[]" /><br>-->
<!--    <input name="adresse[]" /><br>-->
<!--    <input name="idendite[]" /><br>-->
<!--    <input name="idendite[]" /><br>-->
<!---->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->
<!--Les valeurs envoyées seront regroupées dans deux tableaux.-->

<!--On peut aussi en faire avec des tableaux associatifs-->
<!--<pre>-->
<?php
//print_r($_POST);
//Array
//(
//  [adresse] => Array
//    (
//      [rue] => x
//      [cp] => x
//      [ville] => x
//      [pays] => x
//    )
//)
//?>
<!--</pre>-->
<!---->
<!--<form action="" method="POST">-->
<!---->
<!--    <input name="adresse[rue]" /><br>-->
<!--    <input name="adresse[cp]" /><br>-->
<!--    <input name="adresse[ville]" /><br>-->
<!--    <input name="adresse[pays]" /><br>-->
<!---->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->

<!--Très utile aussi pour les choix multiples-->
<!--<pre>-->
<?php
//print_r($_POST);
//Array
//(
//  [choix] => Array
//    (
//      [0] => tennis
//      [1] => foot
//      [2] => echecs
//    )
//)
//?>
<!--</pre>-->
<!---->
<!--<form action="" method="POST">-->
<!--    <select name="choix[]" id="activites" multiple>-->
<!--        <option value="tennis">Tennis</option>-->
<!--        <option value="foot">Foot</option>-->
<!--        <option value="echecs">Echecs</option>-->
<!--        <option value="theatre">Théâtre</option>-->
<!--    </select>-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->