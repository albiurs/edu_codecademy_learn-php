<!--Code Block Considerations-->
<!--One frequent pattern that we encounter is iterating over an array using a foreach loop and creating HTML elements using the items from the array. The following approach does not work as one might hope:-->

<?php
//$array = ["Alice", "Bob", "Charlie"];
//foreach($array as $name): ?>
<!--<p>$name</p>-->
<?php //endforeach; ?>

<!--Since we are in HTML mode and not PHP mode when using $name here, it will simply print $name, instead of the corresponding item from the array.-->
<!--Because of this behavior, it’s important to remember to re-enter PHP mode before using PHP variables. This can be done using the php opening and closing tags. If you are going to simply be printing the variable using echo, you can also use the echo shorthand opening tag.-->
<!--With this, our example can be fixed like this:-->

<?php
$array = ["Alice", "Bob", "Charlie"];
foreach($array as $name): ?>
<p><?=$name?></p>
<?php endforeach; ?>


<!--own code-->
<h1>Shoe Shop</h1>
<?php
$footwear = [
    "sandals" => 4,
    "sneakers" => 7,
    "boots" => 3
];
?>
<p>Our footwear:</p>
<?php
foreach ($footwear as $type => $brands):
    ?>
    <p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
endforeach;
?>