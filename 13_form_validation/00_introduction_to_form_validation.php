<!--Introduction to Form Validation-->
<!--Introduction-->
<!---->
<!--Modern websites require a lot of information to function as intended. Information like our usernames, passwords, “friends”, “likes”, credit card information, and shopping orders all have to be provided by users on the front-end and sent to the web applications’ servers so they can be processed. This information is used to create a personalized experience for the user.-->
<!---->
<!--User information is traditionally collected using HTML forms. If you’ve ever entered text in a website, selected from options on a list, or checked boxes and then hit enter or pressed a button, you likely filled out and submitted an HTML form!-->
<!---->
<!--In order for the data submitted through forms to be useful, it’s essential that the information is valid—if you were allowed to accidentally submit your last name where your address was expected, your package would never show up!-->
<!---->
<!--The process of checking that the information submitted through a form adheres to expectations is called form validation. In this lesson, we’ll explore the different techniques for validating form inputs.-->


<!--Why Validate Forms?-->
<!---->
<!--Most data, once submitted, is stored by a website or web application. It’s stored in a database on the server side. There are important reasons for us to make sure the information that will be stored in the database is accurate.-->
<!---->
<!--We want operations that depend on the data to work: Allowing a user to enter an incorrectly formatted email address, either on purpose or by accident, means that we won’t be able to contact that user later. Allowing a user to sign up for an account with a username that is already in use could cause numerous errors down the line. Making sure we collect all the data we need and checking that the data are formatted correctly can save a web application and its users a lot of trouble.-->
<!---->
<!--We want to keep our site secure: Unprotected data leaves entry points for malicious actors to hurt our application or our users. Allowing a user to submit a non-secure password means that their account will not be protected. Unprotected forms can also allow bits of code to be injected into our servers. This can potentially leave our users’ sensitive information exposed. The malicious actor could even gain control of our site or corrupt our existing data!-->



<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
<h1>Welcome To This Form</h1>
<form action="" method="POST">

<!--    text-->
    <label for="text">You can enter text here:</label>
    <input type="text" name="text">
    <hr>

<!--    number-->
    <label for="num">You can enter a number here:</label>
    <input type="number" name="num">
    <hr>

<!--    slider-->
    <label for="slider">You can slide this:</label>
    <br>
    <span>Left</span>
    <input type="range" name="slider" value="3" min="1" max="5">
    <span>Right</span>
    <hr>

<!--    checkbox-->
    <label for="boxes">You can check these:</label>
    <input type="checkbox" name="boxes" value="first">
    <label for="first">First</label>
    <input type="checkbox" name="boxes"  value="second">
    <label for="second">Second</label>
    <input type="checkbox" name="boxes" value="third">
    <label for="third">Third</label>
    <hr>

<!--    radio-->
    <label for="radio">You can select one of these:</label>
    <input type="radio" name="radio" value="true">
    <label for="true">TRUE</label>
    <input type="radio" name="radio" value="false">
    <label for="false">FALSE</label>
    <hr>

<!--    dropdown-->
    <label for="dropdown">You can select one of these</label>
    <select name="dropdown">
        <option value="first">First</option>
        <option value="second">Second</option>
        <option value="third">Third</option>
    </select>
    <hr>
    <input type="submit" value="Submit to Reset">
</form>
</body>
</html>