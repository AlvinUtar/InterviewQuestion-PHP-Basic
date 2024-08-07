<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username from the POST request
    $username = trim($_POST['username']);

    // Check if the username is 'abc'
    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
} else {
    echo 'Error: Invalid request method.';
}
?>
