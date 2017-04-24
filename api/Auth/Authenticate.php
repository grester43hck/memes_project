<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 20:41
 */
class Authenticate
{

    private $CLIENTID = "440760096024-d7ai1dsjv219r8rb97e0iusts6hqca9s.apps.googleusercontent.com";

    public function auth($token, $type){
        // Get $id_token via HTTPS POST.
        if($type=="google") {
            $client = new Google_Client(['client_id' => $this->CLIENTID]);
            $payload = $client->verifyIdToken($token);
            if ($payload) {
                $userid = $payload['sub'];
                return array("user_id" => $userid);
            } else {
                return false;
            }
        }
    }

}