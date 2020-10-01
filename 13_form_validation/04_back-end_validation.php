<?php

//Back-end Validation
//
//No matter how complete the front-end validation of a website or application seems, validations must also be completed on the back-end or server-side. Front-end validations are easy to bypass—a malicious user can simply turn off JavaScript on their browser, for example. There’s also the potential for middleman attacks in which data is changed after the request is submitted by a user but before it arrives at the server. As a rule, the back-end should never trust the data it receives.
//
//As the developer, once data is in the back-end, we have complete control over it, luckily. Back-end validation has several advantages:
//
//    It enables us to use validation code often on machines with more computing power.
//It allows us to write validation code that a user can’t see—if malicious users can’t see exactly how we validate the data, it’s much more difficult for them to find ways around it.
//We can validate the information against other data the front-end doesn’t have access to—for example, we can check our database to see if a given username is already in use.
//
//There are two main ways to validate inputs on the server-side. The first takes place while the user is still inputting data into the form on the front-end. We can make asynchronous requests to the server with pieces of their data and send feedback directly to the user before they’ve submitted. This is slower than front-end validation and can be a design challenge from a user-experience perspective.
//
//The second is once the form has been submitted. Back-end form validation is our application’s last defense against problematic data, and it’s essential to verify the validity and safety of data before adding it to a database. This is also an opportunity to “sanitize” the data: in order for our database to be useful, it’s important that all data within it is formatted consistently. This means that while we may want to be flexible about the formatting we require from a user, we likely want to transform inputs into a strict format before entering them in the database.
