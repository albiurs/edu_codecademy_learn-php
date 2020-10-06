<?php

//Constructor Method
//
//A constructor method is one of several magic methods (https://www.php.net/manual/en/language.oop5.magic.php)
// provided by PHP. This method is automatically called when an object is instantiated.
// A constructor method is defined with the special method name
// __construct.
//
//As an example, if we wanted to initialize the deserves_love property assigned to TRUE for every instance of the
// Pet class, we could use the following constructor:

class Pet {
    public $deserves_love;
    function __construct() {
        $this->deserves_love = TRUE;
    }
}
$my_dog = new Pet2();
if ($my_dog->deserves_love){
    echo "I love you!";
}
// Prints: I love you!

//Constructors can also have parameters. These correspond to arguments passed in when using the new keyword. For example, maybe we want to allow for setting the name of the Pet on instantiation:

class Pet2 {
    public $name;
    function __construct($name) {
        $this->name = $name;
    }
}
$dog = new Pet2("Lassie");
echo $dog->name; // Prints: Lassie

//In the code above, we instantiate a new Pet object, $dog with a name property assigned to the value "Lassie". Then we access the property and print it.
//
//    Keep in mind that the number of arguments used when instantiating the object must match the number of parameters in the constructor definition otherwise PHP will throw an error.
?>


<?php

class Beverage
{
    public $temperature, $color, $opacity;

    function __construct($temperature, $color) {
        $this->temperature = $temperature;
        $this->color = $color;
    }

    function getInfo() {
        return "This beverage is $this->temperature and $this->color.";
    }
}

$tea = new Beverage("cold", "black");

echo $tea->getInfo();