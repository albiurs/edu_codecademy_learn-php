<?php

class StringUtilities {

    // make second letter of the string upper case
    static function secondCase($string) {
        if (strlen($string) >= 2) {
            $string = strtolower($string);
            $string[1] = strtoupper($string[1]);
            return $string;
        } else {
            return strtolower($string);
        }
    }
}

//echo StringUtilities::secondCase("HaLLO");
//echo StringUtilities::secondCase("Q");
//echo StringUtilities::secondCase("");

class Pajamas {
    private $owner, $fit, $color;

    function __construct(
        $owner = "unclaimed",
        $fit = "fine",
        $color = "white") {

        $this->owner = StringUtilities::secondCase($owner);
        $this->fit = $fit;
        $this->color = $color;
    }

    public function describe() {
        return "$this->owner's $this->color pajamas fit $this->fit.\n";
    }

    public function setFit($new_fit) {
        $this->fit = $new_fit;
    }
}

$chicken_PJs = new Pajamas("CHICKEN", "just right", "purple");
echo $chicken_PJs->describe();

$chicken_PJs->setFit("a little tight");
echo $chicken_PJs->describe();


class ButtonablePajamas extends Pajamas {

    private $button_state = "unbuttoned";

    public function describe() {
        return parent::describe() . "They also have buttons which are currently $this->button_state.\n";
    }

    public function toggleButtons() {
        if ($this->button_state === "unbuttoned") {
            $this->button_state = "buttoned";
        } else {
            $this->button_state = "unbuttoned";
        }
    }
}

$moose_PJs = new ButtonablePajamas("moose", "kind of loose", "red");
echo "\n";
echo $moose_PJs->describe();

$moose_PJs->toggleButtons();
echo "\n";
echo $moose_PJs->describe();

$moose_PJs->toggleButtons();
echo "\n";
echo $moose_PJs->describe();
