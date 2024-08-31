<?php
require_once 'vendor/autoload.php'; // Ensure this path is correct




session_start();

// Define your OAuth 2.0 configuration
$client = new Google_Client();
$client->setAuthConfig('client_secret.json'); // Ensure this path is correct
$client->addScope(Google_Service_Classroom::CLASSROOM_COURSES_READONLY);
$client->setRedirectUri('http://localhost/Personal-Project/oauth2callback');

// Check if we have an authorization code
if (!isset($_GET['code'])) {
    // Generate and redirect to Google's OAuth 2.0 authorization URL
    try {
        $authUrl = $client->createAuthUrl();
        header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
        exit();
    } catch (Exception $e) {
        echo 'Error creating authorization URL: ' . htmlspecialchars($e->getMessage());
    }
} else {
    // Exchange authorization code for an access token
    try {
        $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $accessToken;

        // Redirect to a different page or the original app URL
        header('Location: http://localhost/Personal-Project'); // Adjust as needed
        exit();
    } catch (Exception $e) {
        echo 'Error exchanging authorization code for access token: ' . htmlspecialchars($e->getMessage());
    }
}