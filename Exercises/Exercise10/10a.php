<?php

echo "</br><h2>Given lakes:</h2> </br>";
$greatlakes = array(" Lake Erie ", " Lake Huron ", " Lake Michigan ", " Lake Ontario" , " Lake Superior "); // creating a five element indexed array that stores the names of lakes
for($element = 0; $element < count($greatlakes); $element++) { 
echo $greatlakes[$element];
}

$greatlakes = array_merge(array_slice($greatlakes, 0, 2), array(" Lake Tahoe ", " Lliamna Lake "), array_slice($greatlakes, 2)); //adding lakes to the middle of an array
echo "</br></br><b>Array including Lake Tahoe and Lliamna Lake: </b></br>";
for($element = 0; $element < count($greatlakes); $element++) { //displays new array with the two lakes in the middle of an array
echo $greatlakes[$element];
}

unset($greatlakes[0]); // using unset to remove Lake Erie
unset($greatlakes[5]);  // using unset to remove Ontario

echo "</br></br><b> Displaying New Lakes array:</b></br>";
$greatlakes = array_values($greatlakes);
for($element = 0; $element < count($greatlakes); $element++) { // displays new lake array after removing the two lakes.
echo $greatlakes[$element];
}

echo "</br></br><b>My favourite lakes:</b></br>";
$favlakes = array_merge(array_slice($greatlakes,1,3), array_slice($greatlakes,5)); 
for($element = 0; $element < count($favlakes); $element++) { 
echo $favlakes[$element];
} 

?>