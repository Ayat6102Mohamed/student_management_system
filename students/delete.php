<?php
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../include/functions.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM students WHERE id=$id";
    if (mysqli_query($connection, $query)) {
        redirectWithMessage("success", "Student deleted successfully.");
    } else {
        redirectWithMessage("error", mysqli_error($connection));
    }

}?>