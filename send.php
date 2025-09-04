<?php
// Read JSON input
$input = json_decode(file_get_contents('php://input'), true);

$name = htmlspecialchars($input['name'] ?? '');
$email = htmlspecialchars($input['email'] ?? '');
$message = htmlspecialchars($input['message'] ?? '');

// TODO: send email or save to database
// For now, just echo back:
echo "Thanks $name! We received your message.";
?>
