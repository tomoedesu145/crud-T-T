<?php
require_once "connection.php";

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$query = "UPDATE student SET name='$name', email='$email',gender='$gender',phone='$phone', address='$address' WHERE id='$id'";
$response = mysqli_query($connection, $query);

if ($response) {
    $_SESSION['success'] = "Data was Updated";
    header('Location:index.php');
} else {
    $_SESSION['error'] = "Data was not Updated";
    header('Location:index.php');
}
?>