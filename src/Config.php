<?php

class Config
{
    public static function getOAuthCredentialsPath()
    {
        return 'path/to/client_secret.json';
    }

    public static function getServiceAccountKeyPath()
    {
        return 'path/to/service_account_key.json';
    }

    public static function getRedirectUri()
    {
        return 'https://yourdomain.com/callback.php';
    }
}
