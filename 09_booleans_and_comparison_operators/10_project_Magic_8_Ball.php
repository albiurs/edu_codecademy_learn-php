<?php


// magic 8 ball


function magic8Ball() {

    echo "Tell me... What is your question?\n";
    $question = readline(">> ");

    echo "\nHmm I see.. Your question is ${question}... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: ";

    $choice = rand(0, 19);
//    echo $choice;

    switch ($choice) {
        case 0:
            echo "It is certain.";
            break;
        case 1:
            echo "It is decidedly so.";
            break;
        case 2:
            echo "Without a doubt.";
            break;
        case 3:
            echo "Yes - definitely.";
            break;
        case 4:
            echo "You may rely on it.";
            break;
        case 5:
            echo "Most likely.";
            break;
        case 6:
            echo "Outlook good.";
            break;
        case 7:
            echo "Yes.";
            break;
        case 8:
            echo "Signs point to yes.";
            break;
        case 9:
            echo "Reply hazy, try again.";
            break;
        case 10:
            echo "Ask again later.";
            break;
        case 11:
            echo "Better not tell you now.";
            break;
        case 12:
            echo "Cannot predict now.";
            break;
        case 13:
            echo "Concentrate and ask again.";
            break;
        case 14:
            echo "Don't count on it.";
            break;
        case 15:
            echo "My reply is no.";
            break;
        case 16:
            echo "My sources say no.";
            break;
        case 17:
            echo "Outlook not so good.";
            break;
        case 18:
            echo "Very doubtful.";
            break;
        case 19:
            echo "As I see it, yes.";
            break;
    }
}



magic8Ball();

