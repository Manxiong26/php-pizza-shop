<?php
//constant 
// use caps to ensure you know it's a constant and not a variable
define('NAME', 'Wolfy');

//must have semi colons at the end or the next echo wont work
//echo "my pizza shop"

//variable 
    //must start with a letter 
    //$name = 'M@Neen@';
    //this is how you call the variable
     //---- echo $name; ----
     $age = '28';
     //$name = 'Wolfy';

//data strings
    $stringOne = 'my email is ';
    $stringTwo = 'xiong.maneena@gmail.com';

    //concatenating 
    //echo $stringOne . $stringTwo;

    $name = 'MaNeena';

    //echo 'Hey my name is ' . $name

    //difference is when we use "" can output the variable while '' cannot output the variable

    //echo "the MaNeena screamed \"ahhhh\"";
    //echo 'the MaNeena screamed "ahhhhh"';

    //echo $name[1]

    //function 

    //this will find the length of the string
        //echo strlen($name);
   //show the string in all uppercase 
        //echo strtoupper($name);
    //show the string in lower case 
        //echo strtolower($name);
    //replace certain things in a string 
    //everytime there's a M in the string $name it will be replaced by W
        //echo str_replace('M', 'W', $name);

//Numbers 
    //intergers are intergers 
    //float is decimals
    $radius = 25;
    $pi = 3.14;

    //basic operators
    // -, *, +, /, ** the power of

    //echo $pi * $radius**2;
    //order of operation ( B arracks I power or D ivison M ultiply A dd S ubtract )
    //echo 2 * (4 + 9 ) / 3;

    //increments & decrement operators
    //echo $radius++;
    //echo $radius;

    //shorthand operators
    $age *= 10;
    //echo $age;

    //number function 
    //brings to the closest number 
    //echo floor($pi);
    //move it up to the nearest interger 
    //echo ceil($pi);
    //built in pi
    echo pi();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MaNeena's Pizza Shoppe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>
        <?php 
    echo "MaNeena's Pizza Shoppe";
    ?> </h1>
    <div><?php echo NAME;  ?></div>
    <div>
    <?php echo $age; ?>    
    </div>
    </body>
</html>