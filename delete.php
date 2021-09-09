<?php
require_once "connection.php";

$id=$_GET['id'];

$query = "DELETE FROM student WHERE id=$id";
$response = mysqli_query($connection, $query);

if ($response) {
    $_SESSION['success'] = "Data was Deleted";
    header('Location:index.php');
} else {
    $_SESSION['error'] = "Data was not Deleted";
    header('Location:index.php');
}

?>