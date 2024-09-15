<?php
// src/ServiceAccountService.php
require_once 'vendor/autoload.php';
require_once 'src/Config.php';

class ServiceAccountService
{
    private $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig(Config::getServiceAccountKeyPath());
        $this->client->addScope(Google_Service_Drive::DRIVE);
    }

    public function getClient()
    {
        return $this->client;
    }
}
