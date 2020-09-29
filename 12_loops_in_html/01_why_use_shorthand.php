
<!--Why Use Shorthand?-->
<!---->
<!--Using the traditional loop syntax in PHP with brackets ({}) to open and close code blocks can be used when embedding PHP code in HTML:-->

<ul>
    <?php
    for ($i = 0; $i < 2; $i++) {
        ?>
        <li>Duck</li>
        <?php
    }
    ?>
    <li>Goose</li>
</ul>

<!--However, when adding nested loops, the readability of the code can suffer. To determine where loops end, we have to count and match brackets.-->
<!---->
<!--Luckily, PHP offers an alternate syntax which is especially useful when working with HTML. Instead of using an
opening bracket ({), we use a colon (:) and instead of using a closing bracket (}), we use a closing keyword and
semicolon (;). For the for loop, the closing keyword is endfor. Our duck, duck, goose example becomes:-->

<ul>
    <?php
    for ($i = 0; $i < 2; $i++):
        ?>
        <li>Duck</li>
    <?php
    endfor;
    ?>
    <li>Goose</li>
</ul>

<!--Now, when reading this code, it becomes immediately apparent that the endfor keyword is closing the for loop.-->



<!--own code-->
<h1>Only Shoes Shoe Shop</h1>
<?php
for ($i = 0; $i < 5; $i++):
    ?>
    <p>We sell shoes</p>
<?php
endfor;
?>