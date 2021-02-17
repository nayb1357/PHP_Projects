<?php

$side_mom = array("Dimpal", "Kiran", "Sangita", "Puja", "Ruja", "Rejina"); // mom side family members.
echo "</br></br><b> Family members from my mother's side: </b></br>";
echo implode(', ', $side_mom);

$side_dad = array("Bidushi", "Keshav", "Yogesh", "Tara", "Chhabi", "Rishav"); //dad side family members.
echo "</br> </br><b> Family members from my father's side: </b> </br>";
echo implode(', ', $side_dad);

$allmembers = array_merge($side_mom, $side_dad); //merging two arrays.
sort($allmembers); //sorting in alphabetical order
echo "</br> <h3> Family members from my both parents' side in alphabetical order: </h3>";
$ordered_names = count($allmembers);
for($x = 0; $x < $ordered_names; $x++) {
    echo $allmembers[$x]. ', '; //displaying members name in alphabetical order.
}
?>