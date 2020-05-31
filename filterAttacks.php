<?php

function filterAttacks ($texte, $retour, $balisePhp) {

    if ($retour) {
        $texte = str_replace(array("\n","\r",PHP_EOL),'',$texte);
    }
    if ($balisePhp) {
        $texte = str_replace(".php",'',$texte);
    }

    $aBannir = array("../", ";", "%");

    $texte = str_replace($aBannir,'',$texte);

    $texte = htmlspecialchars($texte);

    return $texte;

}

?>