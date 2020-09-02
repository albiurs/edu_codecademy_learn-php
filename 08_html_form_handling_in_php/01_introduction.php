<?php

//Introduction
//Presenting and interacting with HTML is one of the primary uses of PHP. Our server takes each PHP file (in our examples, this is index.php), and translates them into HTML to present to the client in their web browser.
//This process allows for developers to create customized experiences for individual users.
//PHP also provides the capability to handle input from users through HTML forms in a straightforward manner. Before we cover working with forms, take a minute to review how PHP code can be embedded into HTML:

<p>This HTML will get delivered as is</p>
<?php echo "<p>PHP interprets this and turns it into HTML</p>";?>
<p>This HTML will get delivered as is</p>

<!--This example uses the PHP opening (--><?php)// and closing (?><!--) tags to insert PHP code. It uses echo to add text to the HTML. This practice is so common that PHP provides a shorthand syntax. Instead of using --><?php //echo to begin the statement, you can simply use <?=.

Our example becomes:

<p>This HTML will get delivered as is</p>
<?="<p>PHP interprets this and turns it into HTML</p>";?>
<p>This HTML will get delivered as is</p>

