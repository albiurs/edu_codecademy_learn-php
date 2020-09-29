<!--Review-->
<!---->
<!--With the PHP shorthand you have just learned, you can now create more readable HTML files with embedded PHP loops.-->
<!---->
<!--Here are the key ideas from this lesson:-->
<!---->
<!--    The PHP shorthand for loops uses a colon (:) instead of a bracket ({) to open the code block.-->
<!--The shorthand uses keywords to close the code block instead of a bracket (}):-->
<!--        Use endfor to close a for loop-->
<!--        Use endforeach to close a foreach loop-->
<!--        Use endwhile to close a while loop-->
<!--The closing keyword needs to be followed by a semicolon (;).-->


<h1>Shoe Shop</h1>
<?php
$footwear = [
  "sandals" => 4,
  "sneakers" => 7,
	"boots" => 3
];
?>


<p>Our footwear:</p>

<h3>foreach</h3>
<?php
foreach ($footwear as $type => $brands):
?>
<p>We sell <?=$brands?> brands of <?=$type?></p>
<?php
endforeach;
?>
<h3>for</h3>
<?php
$types = [
  "sandals",
  "sneakers",
	"boots"
];
$quantities = [
  4,
  7,
	3
];


for ($i=0; $i<count($types); $i++):
?>
<p>We sell <?=$quantities[$i]?> brands of <?=$types[$i]?></p>
<?php
endfor;
?>
<h3>while</h3>
<?php
$types = [
  "sandals",
  "sneakers",
	"boots"
];
$quantities = [
  4,
  7,
	3
];
$i = 0;


while ($i<count($types)):
?>
<p>We sell <?=$quantities[$i]?> brands of <?=$types[$i]?></p>
<?php
$i++;
endwhile;
?>