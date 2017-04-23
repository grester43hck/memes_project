<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23/04/17
 * Time: 18:57
 */

include_once "../header.php";


require_once '../../google/vendor/autoload.php';

// Get $id_token via HTTPS POST.
$id_token = $_GET["token"];
$client = new Google_Client(['client_id' => "440760096024-d7ai1dsjv219r8rb97e0iusts6hqca9s.apps.googleusercontent.com"]);
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    $userid = $payload['sub'];
    var_dump($payload);
    echo "<img src='".$payload["picture"]."' />";
    // If request specified a G Suite domain:
    //$domain = $payload['hd'];
} else {
    // Invalid ID token
}
