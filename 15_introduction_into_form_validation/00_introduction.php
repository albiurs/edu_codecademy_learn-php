<?php

//Introduction to PHP Form Validation
//Introduction
//
//In this lesson, we’ll be using PHP to handle user input submitted through HTML forms. We’ll be performing form validations on the submitted data in order to protect our website and its users.
//
//Websites and applications in production nearly always use front-end validations (HTML and JavaScript validations done on the client-side), but these validations are designed to provide a better user experience—NOT for security. A user could circumvent front-end validation by intentionally or accidentally turning off JavaScript in their browser. We also need to protect against man-in-the-middle attacks, where a malicious actor changes data after it has been submitted by the client.
//
//The back-end should never trust the data it receives from the client. Either intentionally or not, bad data from the client has the potential to expose sensitive information, corrupt our data, or significantly slow down our server. In this lesson, we’ll be working with forms with no front-end validations in place; this will simulate the untrustworthy nature of client-side validation.
//
//We’ll be using PHP to handle the logic to receive POST requests, validate the data, store the data in the back-end, and display meaningful feedback to the user.

