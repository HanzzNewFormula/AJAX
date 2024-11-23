<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');

    if (empty($name)) {
        echo "Error: Name cannot be empty!";
        http_response_code(400);
    } else {
        echo "Hello, " . htmlspecialchars($name) . "! Your input has been received.";
    }
} else {
    echo "Invalid request method!";
    http_response_code(405);
}
