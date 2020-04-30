<?php

require './vendor/autoload.php';

use App\ApiAuthenticationHeaderEncoding;
use App\StkPushPasskeyEncoding;
use App\InitiatorPasswordEncryption;

//how to get STK Push encoded password
$stkPushEncoding = new StkPushPasskeyEncoding();
$stkEncoded = $stkPushEncoding->getPassword("174379", "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919");
echo "STK Password (note the timestamp): "
    .$stkEncoded["password"] ."; <strong>"
    .$stkEncoded["timestamp"]."</strong>\n\n<br><br>";

//how to get API Authentication header
$headerEncoding = new ApiAuthenticationHeaderEncoding();
$headerEncoded = $headerEncoding->getEncoded("mVjAxwuJd2xwtAFfaI6tjuffBNHCvVAi", "14HKuEbrj01psKRa");
echo "Encoded header: ".$headerEncoded."\n\n<br><br>";

//how to get MPesa encrypted password
$initiatorEnc = new InitiatorPasswordEncryption();
$encrypted = $initiatorEnc->getEncryptedPasswd("Test#2018");
echo "Encrypted password: ".$encrypted."\n\n<br><br>";
