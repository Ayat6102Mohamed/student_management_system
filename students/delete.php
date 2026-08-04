<?php
require_once __DIR__ . "/../config/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM students WHERE id=$id";
    if (mysqli_query($connection, $query)) {
        echo "Student deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
header("Location: index.php");
?>