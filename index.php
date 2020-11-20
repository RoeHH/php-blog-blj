<?php
$bottles = 'bottles';
$beers;
for ($beers = 100; $beers >= 0 ; $beers--) {
    $bottles = getWords($bottles, $beers); 
    if ($beers == 0) {
        echo "No more bottles of beer on the wall, no more bottles of beer.<br />Go to the store and buy some more, 99 bottles of beer on the wall.";
    break;
    }
echo "$beers $bottles of beer on the wall, $beers $bottles of beer.<br />";
echo "Take one down and pass it around, $beers $bottles of beer on the wall.<br /><br />";
}

function getWords($bottles, $beers) {
    if ($beers == 1){
        $bottles = "bottle";
    }
    return $bottles;
}


?>