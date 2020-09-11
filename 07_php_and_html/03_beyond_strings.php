<?php

/*Beyond Strings
We can also incorporate more complex PHP within our scripts.*/
$lucky_number = 5 * 2 - 1;
echo "<h1>Your lucky number is ${lucky_number}</h1>";

/*The code above will be translated into HTML with a header that reads: Your lucky number is 9.
We can incorporate all the language features we know about PHP, including functions:*/

function makeHeaderGreeting ($name){
  return "<h1>Hello, ${name}!</h1>";
}

echo makeHeaderGreeting("World");
//The code above will be translated into HTML with a header that reads: Hello, World!.



// write your own code:
$about_me = [
    "name" => "Aisle Nevertell",
    "birth_year" => 1902,
    "favorite_food" => "pizza"
];

function calculateAge ($person_arr){
    $current_year = date("Y");
    $age = $current_year - $person_arr["birth_year"];
    return $age;
}
?>
<h1>Welcome!</h1>
<h2>About me:</h2>
<?php
#Add your code here
echo "<h3>My name is {$about_me["name"]}</h3>";
echo "<p>My age is " . calculateAge($about_me) . "</p>";
echo "<div>My favorite food is {$about_me["favorite_food"]}</div>";
?>

<h2>Now tell me a little about you.</h2>
