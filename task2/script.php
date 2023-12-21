<?php

$dom = new DOMDocument();

$html = file_get_contents('index.html');
$dom->loadHTMLFile('index.html');

$imgList = $dom->getElementsByTagName('img');
$btnPhp = $dom->getElementById('link_btn_php');
$btnJs = $dom->getElementById('link_btn_js');

foreach ($imgList as $image) {
    $hrefAttr = $image->getAttribute('src');
    $altAttr = $image->getAttribute('alt');
    $widthAttr = $image->getAttribute('width');

    $newImg = $dom->createElement('img');
    $newImg->setAttribute('src', $hrefAttr);
    $newImg->setAttribute('alt', $altAttr);
    $newImg->setAttribute('width', $widthAttr);

    $wrapper = $dom->createElement('a');
    $wrapper->setAttribute('href', $hrefAttr);
    $wrapper->setAttribute('target', '_blank');

    $wrapper->append($newImg);

    $image->replaceWith($wrapper);
}

$btnPhp->setAttribute('class', 'btn btn-outline-primary disabled');
$btnJs->setAttribute('disabled', '');

echo $dom->saveHTML();