<?php

if (isset($_SESSION['success'])) {
    echo "
    <div style='
        background:#d4edda;
        color:#155724;
        padding:10px;
        margin-bottom:15px;
        border:1px solid #c3e6cb;
    '>
        {$_SESSION['success']}
    </div>";

    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    echo "
    <div style='
        background:#f8d7da;
        color:#721c24;
        padding:10px;
        margin-bottom:15px;
        border:1px solid #f5c6cb;
    '>
        {$_SESSION['error']}
    </div>";

    unset($_SESSION['error']);
}