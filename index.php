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
    //print_r($popped);

//loops 
        //for($i=0; $i<5; $i++){
            //echo 'some template';
        //}
    //for each loop
        //foreach( $blogs as $blogs ){
            // echo 'some template';
        //}

    $Ellie = ['cute', 'small', 'adorable'];
    // for($i = 0; $i < count($Ellie); $i++){
    //     echo $Ellie[$i] . '<br />';
    // }
//For Loop
    // foreach($Ellie as $Ell ){
    //     echo $Ell . '<br />';
    // }

    $products = [
        ['name' => 'shiny star', 'price' => 20 ],
        ['name' => 'green shell', 'price' => 10 ],
        ['name' => 'red shell', 'price' => 15 ],
        ['name' => 'gold coin', 'price' => 5 ],
        ['name' => 'lightening bolt', 'price' => 40 ],
        ['name' => 'banana skin', 'price' => 2 ],
    ];
//foreach Loop
    // foreach($products as $product ){
    //     echo $product['name'] . ' - ' . $product['price'];
    //     echo '<br />';
    // }

//While Loop
// $i = 0;
//         while($i < count($products)){
//             echo $products[$i]['name'];
//             echo '<br />';
//             $i++;
//         }

//comparison booleans (true or false )
    //echo 5 > 10;
    //echo 5 == 10;
    //echo 10 == 10;
    //echo 5 != 10;
    //echo 5 <= 5;
    //echo 5 >= 5;

//strings
    //echo 'Ellie' < 'Ashi';
    //echo 'Ellie' > 'Ashi';
    //echo 'Ellie' > 'ellie';
    //echo 'Ellie' == 'Ellie';
    //echo 'ellie' == 'Ellie';

//loose vs strict equal comparison
//echo true; "1"
//echo false; ""

//loose equal comparison
//when comparing == we dont take into consideration any type of data type
    //this doesn't consider if data is a number or a string it will still 
    //come out true since they're technically both 5.    
        //echo 5 == '5';

//strict comparison 
//when comparing === we do take into consideration data type 
    //this does consider if data type is a number or a string so the answer
    //will come out false because one is a number and one is a string.
        //echo 5 === '5';

    // echo true == "1";
    // echo false == "";

//conditional statement
    //if else statement
        // $price = 20;
        // if($price < 10){
        //     echo 'the condition is met';
        // } elseif ($price < 30 ){
        //     echo 'elseif condition met';
        // }else {
        //     echo 'condition not met';
        // }
    // foreach loop with if else statement 
        // foreach( $products as $product){
            //this is using AND(&&)
            // if($product['price'] < 15 && $product['price'] > 2){
            //     echo $product['name'] . '<br />';
            // }
            //this is using OR(||)
        //     if($product['price'] > 20 || $product['price'] < 10){
        //         echo $product['name'] . '<br />';
        //     }
        // }

//Break 
    //when name hits lightening bolt it breaks and does not iterate the rest 
        foreach($products as $product){
            if($product['name'] === 'lightening bolt'){
                break;
            }
            //if the price is greater than 15 we'll jump up to the next one 
            if($product['price'] > 15 ){
                continue;
            }
            echo $product['name'] . '<br />';
        }



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
    <!-- <h1>
        <?php 
    echo "MaNeena's Pizza Shoppe";
    ?> </h1>
    <div><?php echo NAME;  ?></div>
    <div>
    <?php echo $age; ?>    
    </div> -->
    <h1>Products</h1>
    <!-- <ul>
        <?php
        foreach($products as $product ){ ?>
        <h3><?php echo $product['name']; ?></h3>
        <p>$ <?php echo $product['price']; ?></p>

    <?php } ?>
        
        
    </ul> -->

    <div>
        <ul>
            <?php foreach( $products as $product ){?>
            <?php if($product['price'] > 15){?> 
            <li><?php echo $product['name'] ?></li>
            <?php } ?>
            <?php } ?> 
        </ul>
    </div>
    </body>
</html>