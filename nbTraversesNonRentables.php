<?php
$nbPassagersParTraversee = array(35, 10, 22, 52, 15, 58, 8, 73, );


$nbTraversesNonRentables = 0;

$liaisonNumero = 15;

$count = count($nbPassagersParTraversee);
for ($i = 0; $i < $count; $i++) {
    if ($nbPassagersParTraversee[$i] < 20) {
        $nbTraversesNonRentables++;
    }
}

echo $nbTraversesNonRentables . " traversées non rentables le 22/09/2022.\n";
?>
