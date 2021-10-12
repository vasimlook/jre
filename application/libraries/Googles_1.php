<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Google OAuth Library for CodeIgniter 3.x
 *
 * Library for Google+ login. It helps the user to login with their Google account
 * in CodeIgniter application.
 *
 * This library requires the Google API PHP client and it should be placed in third_party folder.
 *
 * It also requires google configuration file and it should be placed in the config directory.
 *
 * @package     CodeIgniter
 * @category    Libraries
 * @author      semicolonworld
 * @license     http://www.semicolonworld.com/license/
 * @link        http://www.semicolonworld.com
 * @version     2.0
 */
class Googles_1 {

    public function __construct() {
        $CI = & get_instance();
        require APPPATH . 'third_party/googlepeople/vendor/autoload.php';
//        if (php_sapi_name() != 'cli') {
//    throw new Exception('This application must be run on the command line.');
//}
//        require APPPATH . 'third_party/google-auth/contrib/Google_Oauth2Service.php';        
    }

    public function getClient() {
        $client = new Google_Client();
        $client->setApplicationName('linkpan');
        $client->setScopes(Google_Service_PeopleService::CONTACTS_READONLY);
        $client->setAuthConfig(APPPATH . 'third_party/googlepeople/vendor/credentials.json');      
        $client->setAccessType('offline');
        $client->setApprovalPrompt('force');
        // Load previously authorized token from a file, if it exists.
        // The file token.json stores the user's access and refresh tokens, and is
        // created automatically when the authorization flow completes for the first
        // time.
        $tokenPath = 'token.json';
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }
        // If there is no previous token or it's expired.
        else {
            // Refresh the token if possible, else fetch a new one.            
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
//                redirect(filter_var($authUrl,FILTER_SANITIZE_URL))
            header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));

            if (isset($_GET['code'])) {
                $authCode = $_GET['code'];
                // Exchange authorization code for an access token.
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                header('Location: ' . filter_var($client->getRedirectUri(), FILTER_SANITIZE_URL));
                if (!file_exists(dirname($this->tokenFile))) {
                    mkdir(dirname($this->tokenFile), 0700, true);
                }
                file_put_contents($tokenPath, json_encode($client->getAccessToken()));
                return $client;
            } else {
                exit('No code found');
            }
        }
    $client->setAccessToken($accessToken);

    // Refresh the token if it's expired.
    if ($client->isAccessTokenExpired()) {

        // save refresh token to some variable
        $refreshTokenSaved = $client->getRefreshToken();

        // update access token
        $client->fetchAccessTokenWithRefreshToken($refreshTokenSaved);

        // pass access token to some variable
        $accessTokenUpdated = $client->getAccessToken();

        // append refresh token
        $accessTokenUpdated['refresh_token'] = $refreshTokenSaved;

        //Set the new acces token
        $accessToken = $refreshTokenSaved;
        $client->setAccessToken($accessToken);

        // save to file
        file_put_contents($tokenPath,json_encode($accessTokenUpdated));
    }
    return $client;
    }  
}
