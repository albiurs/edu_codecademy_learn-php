<html>
<body>

<h3>Result of the division</h3>
<p>
    Numerator: <?= $_GET['div_num'];?><br>
    Denominator: <?= $_GET['div_den'];?>
</p>

<p>
    <?php
    $result = $_GET['div_num'] / $_GET['div_den'];
    echo "Result: " . $result . "<br>";
    ?>
</p>

<a href="07_project_html-php_calculator.php">Reset</a>

</body>
</html>