<?php
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function createAlert($message, $type = 'info') {
    return "<div class='alert alert-{$type}'>{$message}</div>";
}
?>
