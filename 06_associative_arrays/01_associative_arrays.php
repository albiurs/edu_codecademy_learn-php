<?php

/*
 * Associative Arrays

Associative arrays are collections of key=>value pairs. The key in an associative array must be either a string or an
integer. The values held can be any type. We use the => operator to associate a key with its value. key/value pairs
We can think of keys as pointing to their values since the key points the computer to the space in memory where the
value is stored.
 */
$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];

print_r($my_array);

/*
 * In the code above, we created an associative array using short array syntax. $my_array has three key=>value pairs:

    The key "panda" points to the value "very cute".
    The key "lizard" points to the value "cute".
    The key "cockroach" points to the value "not very cute".

We can also build associative arrays using the PHP array() function.
 */

$about_me = array(
    "fullname" => "Aisle Nevertell",
    "social" => 123456789
);

print_r($about_me);



// Write your code below:
$php_array = array(
    "language" => "PHP",
    "creator" => "Rasmus Lerdorf",
    "year_created" => 1995,
    "filename_extensions" => ["fizzBuzz.php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", "fizzBuzz.php-s", ".pht", ".phar"]
);

$php_short = [
    "language" => "PHP",
    "creator" => "Rasmus Lerdorf",
    "year_created" => 1995,
    "filename_extensions" => ["fizzBuzz.php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", "fizzBuzz.php-s", ".pht", ".phar"]
];