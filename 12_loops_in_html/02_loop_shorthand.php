<!--Loop Shorthand-->
<!--We’ve already covered the shorthand for for loops in PHP. The versions for while and foreach loops are very similar.-->
<!--The only difference is the closing keywords. For a while loop, the closing keyword is endwhile, and for the foreach loop, the closing keyword is endforeach.-->
<!--Our duck, duck, goose example for the while loop becomes:-->

<ul>
    <?php
    $i = 0;
    while ($i < 2):
        ?>
        <li>Duck</li>
        <?php
        $i++;
    endwhile;
    ?>
    <li>Goose</li>
</ul>

<!--And the same example using foreach becomes:-->

<ul>
    <?php
    $array = [0, 1];
    foreach ($array as $i):
        ?>
        <li>Duck</li>
    <?php
    endforeach;
    ?>
    <li>Goose</li>
</ul>



<!--own code-->
<h1>Only Shoes Shoe Shop</h1>
<?php
$i = 0;
$repeats = [0, 1];
while ($i < 5) {
    ?>
    <p>We sell shoes</p>
    <?php
    foreach ($repeats as $value) {
        ?>
        <p>(only shoes)</p>
        <?php
    }
    ?>
    <?php
    $i++;
}
?>


<h1>Only Shoes Shoe Shop</h1>
<?php
$i = 0;
$repeats = [0, 1];
while ($i < 5):
    ?>
    <p>We sell shoes</p>
    <?php
    foreach ($repeats as $value):
        ?>
        <p>(only shoes)</p>
        <?php
    endforeach;
    ?>
    <?php
    $i++;
endwhile;
?>
