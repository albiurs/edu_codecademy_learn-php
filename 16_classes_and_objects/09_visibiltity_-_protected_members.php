<?php

//    Visibility - Protected Members
//
//A class’s private members can only be accessed using methods within that class itself. This isn’t usually the desired
// effect when we have subclasses. For example, the following code will throw a Fatal Error, since healthScore is
// private to the Pet class and can’t be accessed from the Horse class:

class Pet {
    private $healthScore = 0;
}

class Horse extends Pet {
    function brushTeeth() {
//        this->healthScore++;    // causes a fatal error, as $healthScore is private in Pet class!
  }
}

$my_pet = new Horse();
$my_pet->brushTeeth(); // Error

//To allow members to be accessed from within child classes, we can set the visibility within the parent class to
// protected rather than private. This enables child classes to access these properties and methods internally while
// still preventing them from being accessed externally:

class Pet2 {
    protected $heathScore = 0;
}

class Horse2 extends Pet2 {
    function brushTeeth() {
        $this->heathScore++;
  }
}

$my_pet = new Horse2();
$my_pet->brushTeeth(); // Successfully increments healthScore
//$my_pet->healthScore; // Error

?>



<?php
class Beverage {
    private $temperature, $color;
    protected $opacity;
    function __construct($temperature, $color) {
        $this->temperature = $temperature;
        $this->color = $color;
    }
    function getInfo() {
        return "This beverage is $this->temperature and $this->color.";
    }
}
class Milk extends Beverage {
    function setOpacity($opacity) {
        $this->opacity = $opacity;
    }
}



