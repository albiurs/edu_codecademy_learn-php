<html>
<body>

<h3>Addition</h3>
<form method="get" action="addition.php">
    First Number: <input type="number" name="add_first"><br>
    Second Number: <input type="number" name="add_second"><br>
    <button type="submit">Add</button>
</form>
<br>

<h3>Division</h3>
<form method="get" action="division.php">
    Numerator: <input type="number" name="div_num"><br>
    Denominator: <input type="number" name="div_den"><br>
    <button type="submit">Divide</button>
</form>
<br>

<h3>Combined Calculator</h3>
<form method="get" action="result_add.php">
    First Number: <input type="number" name="first"><br>
    Second Number: <input type="number" name="second"><br>
    <button type="submit">Add</button>
    <button type="submit" formaction="result_div.php">Divide</button>
</form>

<a href="07_project_html-php_calculator.php">Reset</a>
</body>
</html>