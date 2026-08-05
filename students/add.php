<?php
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../includes/functions.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age   = $_POST['age'];

    $query = "INSERT INTO students (name, email, phone, age)
              VALUES ('$name', '$email', '$phone', '$age')";

    if (mysqli_query($connection, $query)) {
        redirectWithMessage("success", "Student added successfully.");
    } else {
        redirectWithMessage("error", mysqli_error($connection));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form action="" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Phone:</label>
    <input type="text" name="phone" required><br>

    <label>Age:</label>
    <input type="number" name="age" required><br>

    <button type="submit">Add Student</button>
</form>

</body>
</html>