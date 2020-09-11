<html>
<body>

<h3>Result of the addition</h3>
<p>
    First Number: <?= $_GET['add_first'];?><br>
    Second Number: <?= $_GET['add_second'];?>
</p>

<p>
    <?php
    $result = $_GET['add_first'] + $_GET['add_second'];
    echo "Result: " . $result . "<br>";
    ?>
</p>

<a href="07_project_html-php_calculator.php">Reset</a>

</body>
</html>