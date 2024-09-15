<?php

require_once 'src/GoogleOAuthService.php';
require_once 'src/ServiceAccountService.php';
require_once 'src/GoogleDriveService.php';

session_start();

if (!isset($_SESSION['access_token'])) {
    header('Location: index.php');
    exit();
}

// Use OAuth to get Google Client for the logged-in user
$authService = new GoogleOAuthService();
$authService->setAccessToken($_SESSION['access_token']);
$client = $authService->getClient();

// Use the Service Account to get access to Google Drive
$serviceAccountService = new ServiceAccountService();
$serviceAccountClient = $serviceAccountService->getClient();
$driveService = new GoogleDriveService($serviceAccountClient);

$fileId = 'your-google-drive-file-id';  // Replace with your actual file ID
try {
    $file = $driveService->getFile($fileId);
    header('Content-Type: application/pdf');  // Assuming it's a PDF
    echo $file->getBody()->getContents();
} catch (Exception $e) {
    echo 'Error retrieving file: ' . $e->getMessage();
}