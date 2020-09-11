
<!--Introduction-->
<!--Presenting and interacting with HTML is one of the primary uses of PHP. Our server takes each PHP file (in our examples, this is index.php), and translates them into HTML to present to the client in their web browser.-->
<!--This process allows for developers to create customized experiences for individual users.-->
<!--PHP also provides the capability to handle input from users through HTML forms in a straightforward manner. Before we cover working with forms, take a minute to review how PHP code can be embedded into HTML:-->

<p>This HTML will get delivered as is</p>
<?php echo "<p>PHP interprets this and turns it into HTML</p>";?>
<p>This HTML will get delivered as is</p>

<!-- short syntax -->
<p>This HTML will get delivered as is</p>
<?="<p>PHP interprets this and turns it into HTML</p>";?>
<p>This HTML will get delivered as is</p>



<h1>Learning PHP and HTML</h1>
<p>This first paragraph is standard HTML</p>
<?php echo "<p>Let's insert some text into our HTML using PHP!</p>";?>
<p>This last paragraph is also standard HTML</p>

<!-- short syntax -->
<h1>Learning PHP and HTML</h1>
<p>This first paragraph is standard HTML</p>
<?= "<p>Let's insert some text into our HTML using PHP!</p>";?>
<p>This last paragraph is also standard HTML</p>