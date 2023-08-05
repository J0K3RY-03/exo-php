<?php
function mb_ucfirst($string) {
    return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
}

//Je crée la fonction mb_ucfirst
//j'utilise mb_strtoupper pour mettre tous les caractères en majuscule
//mb_substr est utilisée pour extraire une sous-chaîne du premier caractère de la chaîne d'origine $string. Le premier argument $string est la chaîne d'origine, le deuxième argument 0 est l'index de départ (le premier caractère), et le troisième argument 1 est la longueur de la sous-chaîne (dans ce cas, un seul caractère).

$word = "émile";
$result = mb_ucfirst($word);
echo $result; // Affichera : "Émile"
echo '<br>';
echo date('d M Y');
echo '<br>';
echo date('d M Y H i s');

function sum($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
        return $a + $b;
    } else {
        return "Error: argument is the not a number.";
    }
}
echo '<br>';
echo sum(1,2);

function acronyme($str) {
    $word = explode(' ', $str);
    foreach ($word as $string){
        $string .= ' ';
        $firstLetter =  strtoupper(substr($string, 0, 1));
        echo $firstLetter;
    }
}
echo '<br>';
acronyme('In code we trust!');

function replace($string) {
        $replaced = str_replace('ae','æ', $string);
        return $replaced;
}

function replaceReverse($string) {
    $replaced = str_replace('æ','ae', $string);
    return $replaced;
}

function replaceWithTable($arr) {
    $result = [];
    foreach ($arr as $value){
        $replacedMe = str_replace('æ', 'ae', $value);
        $result[] = $replacedMe;
    }
    return $result;
}

function notice($message, $classCss = 'info'){
    switch ($classCss) {
        case 'info':
            echo '<div class="info">' . $message . '</div>';
            break;
        case 'error':
            echo '<div class="error">' . $message .'</div>';
            break;
        case 'warning':
            echo '<div class="warning">' . $message .'</div>';
            break;
    }
}

echo '<br>';
echo replace('caecotrophie');
echo '<br>';
echo replaceReverse('cæcotrophie'), ' reversed';
echo '<br>';
$arr = ['cæcotrophie', 'chænichthys', 'microsphæra','sphærotheca'];
$newArr = replaceWithTable($arr);
print_r($newArr);
notice('Vous êtes idiot');