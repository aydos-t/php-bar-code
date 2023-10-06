<?php
require_once 'connection.php';
require_once 'vendor/autoload.php';
$barcode = time().".png";
$barimage = time().".png";
$color = [255,0,0];

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents('barcode.png', $generator->getBarcode('081231723897', $generator::TYPE_CODE_128, 3, 50, $redColor));
?>