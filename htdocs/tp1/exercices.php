<?php
/**
 * 1.
 * Calculer de la moyenne
*/
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_maths + $note_maths + $note_histoire_geo) / 3;
echo "La moyenne est de ".$moyenne." / 20.<br>";


/**
 * 2.
 * Calculer le prix ttc
 */
$prix_ht = 50;
$tva = 20;
$prix_ttc = $prix_ht * ($tva/100);
echo "Le prix TTC du produit est de " . $prix_ttc . " €.<br>";


/**
 * 3.
 * Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(),
 * faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42.
*/
$test = '42';
var_dump($test);
echo "<br>";



/**
 * 4.
 * Déclarer une variable $sexe qui contient une chaîne de caractères.
 * Créer une condition qui affiche un message différent en fonction de la valeur de la variable.
 */
$sexe ="Femme";
if($sexe == "Homme"){
    echo "C'est un homme. <br>";
}else{
    echo "C'est une femme. <br>";
}


/**
 * 5.
 * Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24.
 * Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
 */
$heure = 12;
if($heure >= 4 && $heure <= 12){
    echo "C'est le matin <br>";
}elseif ($heure > 12 && $heure < 20){
    echo "C'est l'après-midi <br>";
}else{
    echo "C'est la nuit <br>";
}

/**
 * 6.
 * En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
 */
for ($i = 0 ; $i <= 10 ; $i++){
    echo $i * 5 . " ";
}
echo "<br>";


/**
 * 7.
 * Déclarer une variable avec le nom de votre choix et avec la valeur 0.
 * Tant que cette variable n'atteint pas 20, il faut :
 *     . l'afficher ;
 *     . incrémenter sa valeur de 2 ;
 * Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.
 */
$compteur = 0;
while($compteur < 20){

    if($compteur == 10){
        echo "<b>" . $compteur . "</b> ";
    }else{
        echo $compteur . " ";
    }
    $compteur = $compteur + 2;
}
echo "<br>";


/**
 * 8.
 * Déclarer une variable de type array qui stocke les informations suivantes :
 *
 *   . France : Paris
 *   . Allemagne : Berlin
 *   . Italie : Rome
 *
 * Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach.
 */

$ar = array(
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
);

foreach ($ar as $value => $value2) {
    echo $value . ": " . $value2 . " ";
}
echo "<br>";


/**
 * 9.
 * En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.
 *
 */
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);

foreach ($pays_population as $item => $value) {
    if($value > 20000000){
        echo $item ." ";
    }
}
echo "<br>";

/**
 * 10.
 * En utilisant le tableau ci-dessous afficher la prase suivante pour chaque pays:
 *  #PAYS# : il y à #NOMBRE_HABITANT# d'habitants
 *
 * utiliser les functions de tableau exemple : array_map()
 */
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);

function affiche($p,$n){
   echo $n ." : Il y a " . $p . " d'habitants. <br>";
}

array_walk($pays_population, 'affiche');




/**
 * 11.
 * En utilisant le tableau de keys ci-dessous, reordonner le pour le ranger par taille de longueur de chaine de caractere
 *
 */
$keys = array(
    "aze",
    "poi45p",
    "p8333335p",
    "x24p"
);

function tri_taille_chaine($chaine1, $chaine2)
{
    $taille1 = strlen($chaine1);
    $taille2 = strlen($chaine2);
    return ($taille1 < $taille2) ? -1 : 1;
}
usort($keys, 'tri_taille_chaine');
var_dump($keys);

/* résultat une fois ordonné :
array(4) {
    [0]=>
    string(3) "aze"
    [1]=>
    string(4) "x24p"
    [2]=>
    string(6) "poi45p"
    [3]=>
    string(9) "p8333335p"
}*/