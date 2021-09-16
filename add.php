<?php
//global array in php
//checking if there's a GET request set
//this is the GET method
//this method isn't as secure cause it shows info on the URL 
 //if (isset($_POST['submit'])){
 //    echo $_POST['email'];
//     echo $_POST['title'];
 //    echo $_POST['ingredients'];
// }
//initialize input values into empty strings
$title = $email = $ingredients = '';

//Associative array
//function for reusable errors 
$errors = array('email'=> '', 'title' => '', 'ingredients' => '');


//this is the POST method
//this method is more secure because it doesn't show on the URL 
if (isset($_POST['submit'])){
    //htmlspecialchars converts actual entities into html entities is a safe special characters which makes it safe 
    //this protects from malicious attacker and it doesn't redirect you to dangerous websites 
    
    //check email 
    if(empty($_POST['email'])){
        $errors['email'] = "An email is required <br />";
    } else {
         //echo htmlspecialchars($_POST['email']);
        $email = $_POST['email'];
        //built-in php filter --checking if it is a valid email 
        // ! reverse not true fire error
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    //check title
    if(empty($_POST['title'])){
        $errors['title'] = "A title is required <br />";
    } else {
        //echo htmlspecialchars($_POST['title']);
        $title = $_POST['title'];
        //checking for lowercase, uppercase expression or spaces as many times and atleast once 
        //checking the Title itself and that's what we're checking it with 
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Titles must be letters and spaces only';
        }
    }
    //check ingredient
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = "At-least one ingredient is required <br />";
    } else {
        //echo htmlspecialchars($_POST['ingredients']);
        $ingredients = $_POST['ingredients'];
        //this checks for a comma separated list of words 
        //these are called reject
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list';
        }
    }
}
//end Post and check 

?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('template/header.php'); ?>

<section class="container blue-text">
    <h4 class="center">Add Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <!-- the value leaves information already in inputs when there's an error -->
        <input type="text" name="email" value="<?php echo $email?>">
        <div class="red-text">
            <?php echo $errors['email']; ?>
        </div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo $title?>">
        <div class="red-text">
            <?php echo $errors['title']; ?>
        </div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo $ingredients?>">
        <div class="red-text">
            <?php echo $errors['ingredients']; ?>
        </div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('template/footer.php'); ?>

</html>