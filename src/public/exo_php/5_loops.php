<?php
$pronouns = ['I', 'You', 'He/She','We', 'You', 'They'];
//Création d'un tableau

$conjugations = [
    'I' => 'code',
    'You' => 'code',
    'He/She' => 'codes',
    'We' => 'code',
    'They' => 'code'
];
//Création d'un tableau associatif avec une clé assigné à une valeur

foreach ($pronouns as $elem) {
    echo $elem . ' ' . $conjugations[$elem] . '<br>';
}

//foreach pour boucler sur le tableau pour chaque élément.

//Exo boucle while
$number = 1;

while ($number <= 120) {
    echo 'WHILE ' . $number;
    $number++;
}
echo '<br>';
for ($numbers = 1; $numbers <= 120; $numbers++){
    echo 'FOR ' . $numbers;
}

echo '<br>';

$hamilton8 = ['manon', 'jerome','lucie','nathan', 'jason','pietro','robin', 'youcef','pauline'];

foreach ($hamilton8 as $promo){
    echo $promo . '<br>';
}

echo '<br>';

$pays = [
    'AF' => 'afrique',
    'BE' => 'belgique',
    'FR' => 'france',
    'CA' => 'canada',
    'RS' => 'russie',
    'PK' => 'pakistan',
    'MC' => 'maroc',
    'AR' => 'argentine',
    'GC' => 'greece',
    'IT' => 'italie'];

echo '<select><option>Choisi un pays</option>';
foreach ($pays as $key => $value) {
       echo '<option value="' .$key. '">' . $value . '</option>';
}
echo '</select>';