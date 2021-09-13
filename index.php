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