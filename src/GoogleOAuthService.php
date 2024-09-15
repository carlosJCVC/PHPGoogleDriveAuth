<?php

require_once 'vendor/autoload.php';
require_once 'src/Config.php';

class GoogleOAuthService
{
    private $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        // echo "<pre>";
        // var_dump(Config::getOAuthCredentialsPath());
        // echo "</pre>";
        // die();
        $this->client->setAuthConfig(Config::getOAuthCredentialsPath());
        $this->client->setRedirectUri(Config::getRedirectUri());
        $this->client->addScope(Google_Service_Drive::DRIVE_READONLY);
        $this->client->setAccessType('offline');
        $this->client->setIncludeGrantedScopes(true);
    }

    public function getLoginUrl()
    {
        return $this->client->createAuthUrl();
    }

    public function handleCallback($code)
    {
        return $this->client->fetchAccessTokenWithAuthCode($code);
    }

    public function setAccessToken($token)
    {
        echo $token;

        $this->client->setAccessToken($token);
    }

    public function getClient()
    {
        return $this->client;
    }
}
