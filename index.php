<?php
// Connect to Db
//MySQLi 
$conn = mysqli_connect('localhost', 'maneena', 'manxiong', 'maneena_pizza');

//check connection 
//if not connected show error if connected dont show error 
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('template/header.php'); ?>

<?php include('template/footer.php'); ?>

</html>