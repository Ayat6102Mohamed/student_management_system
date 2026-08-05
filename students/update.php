<?php
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../includes/functions.php";
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', age='$age' WHERE id=$id";
    if (mysqli_query($connection, $query)) {
        redirectWithMessage("success", "Student updated successfully.");
    } else {
        redirectWithMessage("error", mysqli_error($connection));
    }
}

?>
