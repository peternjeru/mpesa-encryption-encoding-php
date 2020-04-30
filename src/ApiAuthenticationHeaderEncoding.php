<?php
namespace App;

class ApiAuthenticationHeaderEncoding
{
    public function getEncoded($consumerKey, $consumerSecret)
    {
        $fullString = $consumerKey.":".$consumerSecret;
        $encoded = base64_encode($fullString);
        return $encoded;
    }
}