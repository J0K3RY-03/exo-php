<?php
$countries = ['Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine'];

echo $countries[2]; //Germany

$familyMember = ['Clara', 'Djayze', 'Amënhaël', 'Kaëllya'];
echo '<pre>';
print_r($familyMember);
echo '</pre>';

$bestRecipe = ['Frites', 'Riz poulet coco', 'Pâtes moutarde'];
echo '<pre>';
print_r($bestRecipe);
echo '</pre>';

$bestMovies = ['The Mask', 'Time Out', 'Games of Thrones', 'La ligne verte'];
echo $bestMovies[1];

$me = [
    'age' => 26,
    'saison' => 'été',
    'football' => 'No',
    'favorite_movie' => $bestMovies
];

$me['hobbies'] = ['code', 'gaming', 'sport'];

$dad = [
    'age' => 46,
    'saison' => 'été',
    'football' => 'No',
    'favorite_movie' => 'rocky',
    'hobbies' => ['tv', 'travail']
];

$me['dad'] = $dad;

echo '<pre>';
print_r($me);
echo '</pre>';

echo 'Loisir de dad ' . count($dad['hobbies']);
echo '<br>';
echo 'Loisir de me ' . count($me['hobbies']);
echo '<br>';
echo 'Nombre total de passe temps ' . count($dad['hobbies']) + count($me['hobbies']);

$me['hobbies'][] = 'taxidermy';

//LE SOULMATE

$soulmate = [
    'age' => 28,
    'saison' => 'été',
    'football' => 'No',
    'favorite_movie' => 'La ligne verte',
    'hobbies' => ['gsm', 'Sortie en famille', 'sport']
];

$baby = array_intersect($me['hobbies'], $soulmate['hobbies']);
echo '<pre>';
echo 'Baby soulmate ';
print_r($baby);
echo '</pre>';