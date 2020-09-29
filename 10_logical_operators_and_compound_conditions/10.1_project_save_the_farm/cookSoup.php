<?php

function cookSoup(){

    global $location, $has_mushroom, $has_soup;

    if ($location != 'kitchen') {
        echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n";
    } else {
        echo "You made some mushroom soup. Mushroom is the queen of all soups!\n";
        $has_mushroom = FALSE;
        $has_soup = TRUE;
    }
}