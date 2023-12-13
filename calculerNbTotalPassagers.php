<?php
$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);


$totalPassagers = 0;

$count = count($nbPassagers);
for ($i = 0; $i < $count; $i++) {
    $totalPassagers += $nbPassagers[$i];
}


echo $totalPassagers . " passagers transportés le 22/09/2022.\n";
?>
