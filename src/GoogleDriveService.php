<?php

require_once 'vendor/autoload.php';
require_once 'src/Config.php';

class GoogleDriveService
{
    private $service;

    public function __construct(Google_Client $client)
    {
        $this->service = new Google_Service_Drive($client);
    }

    public function getFile($fileId)
    {
        return $this->service->files->get($fileId, array('alt' => 'media'));
    }
}
