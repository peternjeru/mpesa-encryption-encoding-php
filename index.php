<?php

require './vendor/autoload.php';

use App\ApiAuthenticationHeaderEncoding;
use App\StkPushPasskeyEncoding;

$stkPushEncoding = new StkPushPasskeyEncoding();
$stkEncoded = $stkPushEncoding->getPassword("174379", "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919");
echo $stkEncoded["password"].", ".$stkEncoded["timestamp"]."\n\n<br><br>";

$headerEncoding = new ApiAuthenticationHeaderEncoding();
$headerEncoded = $headerEncoding->getEncoded("mVjAxwuJd2xwtAFfaI6tjuffBNHCvVAi", "14HKuEbrj01psKRa");
echo $headerEncoded."\n\n<br><br>";
