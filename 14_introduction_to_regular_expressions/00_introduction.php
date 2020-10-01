<?php

//Introduction
//
//When registering an account for a new social media app or completing an order for a gift online, nearly every piece of information you enter into a web form is validated. Did you enter a properly formatted email including an @ symbol? Did you enter a phone number 10 digits long, with or without -s and parentheses? And then there’s the king of them all — did your new password meet the seemingly growing number of requirements for inclusion (and exclusion) of symbols, digits, and both upper and lower case letters?
//
//While correcting each field in our digital lives for proper format can be a pain, it’s integral to ensuring that our accounts are secure, our packages are successfully delivered, and that we can be contacted by phone and email.
//
//The technology that fuels this verification system on nearly every website and application is the ever reliable,
// often quirky language of regular expressions, commonly shortened to regex, as we will use here, or
// regexp (pronunciation is up for debate:
// https://english.stackexchange.com/questions/94371/what-is-the-correct-pronunciation-of-regex).
// A regular expression is a special sequence of characters that describe a
// pattern of text that should be found, or matched, in a string or document. By matching text, we can identify how
// often and where certain pieces of text occur, as well as have the opportunity to replace or update these pieces of
// text if needed.
//
//    Regular Expressions have a variety of use cases including:
//
//    validating user input in HTML forms
//    verifying and parsing text in files, code and applications
//    examining test results
//    finding keywords in emails and web pages
//
//While there are a variety of implementations of Regular Expressions across platforms
// (https://en.wikipedia.org/wiki/Regular_expression#History), in this lesson you will learn the basics that apply
// everywhere. By the lesson’s end, you’ll be empowered to use them in your own projects (and become a regex superhero:
// https://xkcd.com/208/)!
//
