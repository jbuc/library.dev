<?php
/*
Credits: BitRepository
URL: http://www.bitrepository.com/web-programming/php/how-to-center-a-text-on-an-image-using-gd.html
*/
$text = $width . 'x' . $height;

$im = ImageCreate($width, $height);

// white background and blue text
$bg = ImageColorAllocateAlpha($im, 200, 200, 200, 100);

// grey border
// $border = ImageColorAllocate($im, 207, 199, 199);
// ImageRectangle($im, 0, 0, $width - 1, $height - 1, $border);



$textcolor = ImageColorAllocate($im, 200, 200, 200);

// Font Size
$font = 3;

$font_width = ImageFontWidth($font);
$font_height = ImageFontHeight($font);

/* 
-----------
Text Width 
-----------
*/

$text_width = $font_width * strlen($text);

// Position to align in center
$position_center = ceil(($width - $text_width) / 2);

/* 
-----------
Text Height 
-----------
*/

$text_height = $font_height;

// Position to align in abs middle
$position_middle = ceil(($height - $text_height) / 2);

/* 
-----------------
Write the string
-----------------
*/

$image_string = ImageString($im, $font, $position_center, $position_middle, $text, $textcolor);

/* 
--------------------------------------
Output our image (PNG in our example)
--------------------------------------
*/
// header("Content-type: image/png");
ImagePNG($im);
?>