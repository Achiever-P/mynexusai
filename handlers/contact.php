<?php
// handlers/contact.php — Contact form processor
require_once __DIR__ . '/../config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/contact.php');
    exit;
}

$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$errors  = [];

// Validate
if (strlen($name) < 2)                        $errors[] = 'Please enter your full name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
if (strlen($subject) < 3)                      $errors[] = 'Please enter a subject.';
if (strlen($message) < 10)                     $errors[] = 'Message must be at least 10 characters.';

if ($errors) {
    $_SESSION['flash']      = implode(' ', $errors);
    $_SESSION['flash_type'] = 'error';
    $_SESSION['form_data']  = compact('name', 'email', 'subject', 'message');
    header('Location: ../pages/contact.php');
    exit;
}

// Save to file (production would send email here)
$log  = DATA_DIR . '/contact_messages.json';
$msgs = file_exists($log) ? (json_decode(file_get_contents($log), true) ?? []) : [];
$msgs[] = [
    'name'    => $name,
    'email'   => $email,
    'subject' => $subject,
    'message' => $message,
    'ip'      => $_SERVER['REMOTE_ADDR'] ?? '',
    'sent_at' => date('Y-m-d H:i:s'),
];
file_put_contents($log, json_encode($msgs, JSON_PRETTY_PRINT));

$_SESSION['flash']      = "Thanks {$name}! Your message has been received. We'll respond within 24 hours.";
$_SESSION['flash_type'] = 'success';
$_SESSION['form_data']  = [];

header('Location: ../pages/contact.php');
exit;
