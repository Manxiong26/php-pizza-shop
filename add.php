<?php
//global array in php
//checking if there's a GET request set
//this is the GET method
//this method isn't as secure cause it shows info on the URL 
// if (isset($_POST['submit'])){
//     echo $_POST['email'];
//     echo $_POST['title'];
//     echo $_POST['ingredients'];
// }

//this is the POST method
//this method is more secure because it doesn't show on the URL 
if (isset($_POST['submit'])){
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['ingredients'];
}

?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('template/header.php'); ?>

<section class="container blue-text">
    <h4 class="center">Add Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('template/footer.php'); ?>

</html>