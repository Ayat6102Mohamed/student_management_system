<?php
require_once __DIR__ . "/../config/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM students WHERE id = $id");
    $student = mysqli_fetch_assoc($query);
    
        
}
?>

<h2>Edit Student</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $student['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?= $student['name']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $student['email']; ?>" required>
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="<?= $student['phone']; ?>" required>
    <br>
    <label for="age">Age:</label>
    <input type="number" name="age" id="age" value="<?= $student['age']; ?>" required>
    <br>
    <button type="submit">Update Student</button>
</form>