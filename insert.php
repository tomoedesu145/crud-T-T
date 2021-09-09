<?php

require_once "connection.php";

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
//    insert  query
    $query = "INSERT INTO student(name,email,gender,phone,address)
            VALUES('$name','$email','$gender','$phone','$address')";
    $response = mysqli_query($connection, $query);
    if ($response) {
        $_SESSION['success'] = "Data was inserted";
        header('Location:index.php');
    } else {
        $_SESSION['error'] = "Data not inserted";
        header('Location:index.php');
    }
} else {
    $_SESSION['error'] = "Invalid access";
    header('Location:index.php');

}