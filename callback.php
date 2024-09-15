<?php

require_once 'src/GoogleOAuthService.php';

session_start();

$authService = new GoogleOAuthService();

if (isset($_GET['code'])) {
    $token = $authService->handleCallback($_GET['code']);
    $_SESSION['access_token'] = $token;

    header('Location: readfile.php');
    exit();
}
