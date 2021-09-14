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
    //echo pi();

//Arrays
    //indexed arrays 
    //there are 2 different ways of creating an indexed array
    $peopleOne = ['MaNeena', 'Ellie', 'Ashi'];

    //echo $peopleOne[0];

    $peopleTwo = array('William', 'MaNeena', 'Ellie', 'Ashi');

    $ageOne = [20, 30, 40, 50];
    //if you want to see an array in a readable form
        //print_r($ageOne);

        //if you want to change the value of one the data
        $ageOne[1] = 25;
        //print_r($ageOne)
        //adding a new index
        $ageOne[] = 60;
        //print_r($ageOne);

        //another way to add to the end of an array 
        array_push($ageOne, 70);
        //print_r($ageOne);

        //how to count the element in an array 
        //echo count($ageOne);

        //merging two array 
        $peopleThree = array_merge($peopleOne, $peopleTwo);
       // print_r($peopleThree);

    //associative arrays 

    //uses keys instead of indexes
    //keys & value pairs
    $MaNeenaOne = ['Ellie'=>'cute', 'Ashi'=>'siberian', 'William'=>'Husband'];
   // echo $MaNeenaOne['Ellie'];
    //print_r($MaNeenaOne);

    $MaNeenaTwo = array('happy'=>'sad', 'Look'=>'Good');
    //print_r($MaNeenaTwo);

    //adding to the array 
    $MaNeenaTwo['Nice'] = 'mean';
    //print_r($MaNeenaTwo)

    //overriding an element 
    $MaNeenaTwo['Nice'] = 'bad';
    //print_r($MaNeenaTwo);

    //counting 
    //echo count($MaNeenaTwo);

    //merging 
    $MaNeenaThree = array_merge($MaNeenaOne, $MaNeenaTwo);
    //print_r($MaNeenaThree);

    //multi-dimensional arrays
        //using index array for blogs but inside of the blogs each individual array is an associative array
    $blogs = [

        ['title'=>'Ellie Party', 'author'=>'Ellie', 'content'=>'lorem', 'likes'=>30 ],
        ['title'=>'Ashi Life', 'author'=>'Ashi', 'content'=>'lorem', 'likes'=>25 ],
        ['title'=>'MaNeena happy', 'author'=>'MaNeena', 'content'=>'lorem', 'likes'=>50 ],
    ];
    //print_r($blogs[1][1]);
    //echo $blogs[2]['author'];
    //echo count($blogs)
    $blogs[] = ['title'=>'William life', 'author'=>'William', 'content'=>'lorem', 'likes'=>'2'];
    //print_r($blogs);

    //remove the last of the array 
    $popped = array_pop($blogs);
    print_r($popped);
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