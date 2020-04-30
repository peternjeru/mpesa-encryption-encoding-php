<?php
namespace App;

class ApiAuthenticationHeaderEncoding
{
    public function getEncoded($consumerKey, $consumeSecret)
    {
        $fullString = $consumerKey.":".$consumeSecret;
        $encoded = base64_encode($fullString);
        return $encoded;
    }
}