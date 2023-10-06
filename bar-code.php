<?php
require_once 'connection.php';
require_once 'vendor/autoload.php';
$barcode = time().".png";
$barimage = time().".png";
$color = [255,0,0];
if (isset($_REQUEST['generate-btn'])) {
    $bartext = $_REQUEST['bartext'];
    $query = mysqli_query($connect, "insert into php-bar-code set bartext='$bartext', barimage='$barimage'");
    if ($query) {
        {
            ?>
            <script>
                alert("Data save successfully");
            </script>
            <?php
        }
    }
}

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents($barcode, $generator -> getBarcode($bartext, $generator ::TYPE_CODE_128, 3, 50, $color));
echo "<center><img src='".$barcode."'></center>";
?>