<?php

require_once 'src/GoogleOAuthService.php';

session_start();

$authService = new GoogleOAuthService();

if (!isset($_SESSION['access_token']) && !isset($_GET['code'])) {
    $authUrl = $authService->getLoginUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit();
}