<?php
// Connect to Db
//MySQLi 
$conn = mysqli_connect('localhost', 'maneena', 'manxiong', 'maneena_pizza');

//check connection 
//if not connected show error if connected dont show error 
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}

//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas';

//make query & get result
//this is the variable we stored the result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array 
//this is where we store the array 
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($pizzas)

?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('template/header.php'); ?>

<?php include('template/footer.php'); ?>

</html>