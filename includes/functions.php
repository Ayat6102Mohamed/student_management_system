<?php

function redirectWithMessage($type, $message)
{
    $_SESSION[$type] = $message;
    header("Location: index.php");
    exit();
}