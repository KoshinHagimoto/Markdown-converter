<?php
namespace Convert;

require '../vendor/autoload.php';

$parsedown = new \Parsedown();
$htmlContent = $parsedown->text($_POST['markdownContent']);

if ($_POST['outputType'] === 'download') {
    header('Content-Type: text/html');
    header('Content-Disposition: attachment; filename="converted.html"');
    echo $htmlContent;
    exit;
} else {
    echo $htmlContent;
}
?>
