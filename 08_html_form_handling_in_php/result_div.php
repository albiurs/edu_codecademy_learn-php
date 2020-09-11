<html>
<body>

<h3>Result</h3>
<p>
    First Number: <?= $_GET['first'];?><br>
    Second Number: <?= $_GET['second'];?>
</p>

<p>
    <?php
    $result = $_GET['first'] / $_GET['second'];
    echo "Result: " . $result . "<br>";
    ?>
</p>

<a href="07_project_html-php_calculator.php">Reset</a>

</body>
</html>