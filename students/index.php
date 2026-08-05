<?php
require_once __DIR__ . "/../config/db.php";
if (isset($_POST['search'])&& !empty($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM students WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%'";

    $result = mysqli_query($connection, $query);
} else {
$result = mysqli_query($connection, "SELECT * FROM students");
}

$student = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Students</title>
</head>

<body>
    <h1>Students</h1>
    <a href="add.php">Add New Student</a>
    <form method="POST" action="index.php">
        <input type="text" name="search" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
        </tr>
        <?php foreach ($student as $s): ?>
            <tr>
                <td><?= $s['id']; ?></td>
                <td><?= $s['name']; ?></td>
                <td><?= $s['email']; ?></td>
                <td><?= $s['phone']; ?></td>
                <td><?= $s['age']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $s['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $s['id']; ?>">Delete</a>
                </td>
            <?php endforeach; ?>
            </tr>
    </table>
</body>

</html>