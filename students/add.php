<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Add Student</h2>
    <form action="add.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
        <br>
        <button type="submit">add Student</button>
    </form>
</body>
</html>

<?php
require_once __DIR__ . "/../config/db.php";
if(isset($_POST['name']) && isset($_POST['email']) 
    && isset($_POST['phone']) && isset($_POST['age'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    $query = "INSERT INTO students (name, email, phone, age) VALUES ('$name', '$email', '$phone', '$age')";
    if(mysqli_query($connection, $query)){
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
