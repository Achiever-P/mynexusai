<?php
// handlers/subscribe.php — AJAX early-access email capture
require_once __DIR__ . '/../config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$email = trim($_POST['email'] ?? '');

// Validate
if (empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Please enter your email address.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

// Load existing leads
$leads = [];
if (file_exists(LEADS_FILE)) {
    $leads = json_decode(file_get_contents(LEADS_FILE), true) ?? [];
}

// Check for duplicate
foreach ($leads as $lead) {
    if (strtolower($lead['email']) === strtolower($email)) {
        echo json_encode(['success' => true, 'message' => "You're already on the list! We'll be in touch."]); 
        exit;
    }
}

// Store
$leads[] = [
    'email'   => $email,
    'ip'      => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    'created' => date('Y-m-d H:i:s'),
];

file_put_contents(LEADS_FILE, json_encode($leads, JSON_PRETTY_PRINT));

echo json_encode([
    'success' => true,
    'message' => "You're on the list! 🎉 We'll reach out soon.",
]);
exit;
