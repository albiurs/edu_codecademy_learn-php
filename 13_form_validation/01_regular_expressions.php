<?php

//Regular Expressions
//
//Data submitted through forms are stored as strings. Strings are a fundamental data type in computer science
// representing a series of characters “strung” together. As humans, we can intuitively recognize patterns within
// strings, and this allows us to catch errors. Try to notice what’s wrong in the following examples:
//
//    ABCDEF2GHIJKLMNOPQRSTUVWXYZ
//    My zip code is 9021
//    The ct meowed
//    <h1> Hello, World! </h2>
//
//In the first example, we had the letters of the alphabet presented in order but interrupted by an out of place 2.
// In the second, we left off the 5th digit of a famous zip code. In the third, we omitted the “a” from the word cat.
// In the final example, we wrote some HTML with an <h1> opening tag but an unmatching </h2> closing tag.
// If you picked up on these mistakes, it’s because your brain has been trained to expect patterns in certain types of
// data.
//
//Unlike humans, who can get this training passively over time, computers have to be precisely programmed to recognize
// patterns. To specify patterns for the computer to recognize, we use a special language called _regular expressions_
//—also known as regex or regexp. A regular expression is a sequence of characters representing a pattern. W
//e can use that pattern to match a string, match parts of a string, confirm that data is formatted acceptably,
// or even replace parts of strings with different characters.
//


// patterns to be matched:
//🚫hello
//🚫hello world
//🚫Hello, world!
//🚫Hello, Friend!
//🚫coolEmail@blorglax.com
//🚫P@55w0rd!
//🚫(617) 222-1247
//🚫+1-341-554-3910
//🚫1630 Revello Drive, Sunnydale, California
//🚫3170 West 53 Road, #35, Annapolis, Maryland

//Try entering some patterns in the applet provided. If you enter ello, you’ll notice how many of the examples include
// those characters.
// We could fully match all of the expressions with the pattern [^]*. [^] matches the first letter, * everything to the end.
// To match the first four expressions, we could use a pattern like [hH]ello[^]*.
// The pattern [^]*\d{3}[^]*\d{3}-\d{4} will match the two example phone numbers.