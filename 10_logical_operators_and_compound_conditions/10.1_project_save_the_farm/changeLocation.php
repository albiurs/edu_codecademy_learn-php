<?php
// Change player location
function changeLocation(){

    global $location;
    $new_location = '';

    echo "Where do you want to go?\n";
    $new_location = readline(">> ");
    $new_location = strtolower($new_location);

    if($location === 'kitchen' && $new_location === 'bathroom') {
        echo "You go to: bathroom.\n";
        $location = 'bathroom';
    } elseif ($location === 'kitchen' && $new_location === 'woods') {
        echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
        $location = 'woods';
    } elseif ($location === 'bathroom' && $new_location === 'kitchen') {
        echo "You go to: kitchen.\n";
        $location = 'kitchen';
    } elseif ($location === 'woods' && $new_location === 'kitchen') {
        echo "You go to: kitchen.\n";
        $location = 'kitchen';
    } elseif ($new_location === 'woods' || $new_location === 'kitchen' || $new_location === 'bathroom') {
        echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
    } else {
        echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
    }
}