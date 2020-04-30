<?php
namespace App;

class StkPushPasskeyEncoding
{
    public function getPassword($shortcode, $plainPasskey)
    {
        $timestamp = (new \DateTime())->format("YmdHis");
        $fullString = $shortcode.$plainPasskey.$timestamp;
        $encoded = base64_encode($fullString);
        return array(
            "password" => $encoded,
            "timestamp" => $timestamp
        );
    }
}
