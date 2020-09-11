
<!--GET Form Handling-->
<!---->
<!--In HTML, setting a form’s method attribute to "get" specifies that you would like the form to be submitted using the GET method. When using this method, the form entries are passed as parameters in a URL query string.-->
<!---->
<!--For example, this is a request to www.codecademy.com with the URL parameters first (set to the value "ellen") and last (set to the value "richards"):-->

www.codecademy.com/?first=ellen&last=richards

<!--The parameter names (first and last) come from the name attribute of each form input.-->
<!---->
<!--For example, the following form could be used to collect an individual’s name using the GET method:-->

<form method="get">
    First name: <input type="text" name="first">
<br>
Last name: <input type="text" name="last">
<br>
<input type="submit" value="Submit Name">
</form>

<!--When the form is submitted, the form data is available in the $_GET superglobal array. (The data is also accessible using $_REQUEST if you do not care about which method was used by the client.)-->
<!---->
<!--In our example, if a user typed “ellen” into the first input and “richards” into the last input, then print_r($_GET) would look like this:-->

Array ( [first] => ellen [last] => richards )

<html>
<body>
<form method="get">
    Country:
    <input type="text" name="country">
    <br>
    Language:
    <input type="text" name="language">
    <br>
    <input type="submit" value="Submit">
</form>
<br>

<p>$_GET-Array: <?= print_r($_GET);?></p>

<p>Your language is: <?= $_GET['language'];?></p>
<p>Your country is: <?= $_GET['country'];?></p>
<a href="index.php">Reset</a>
</body>
</html>