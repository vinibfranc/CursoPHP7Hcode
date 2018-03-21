<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 21/03/2018
 * Time: 11:05
 */
header("Content-Type: image/png");
$image = imagecreate(256,256);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso PHP7",$red);
imagepng($image);
imagedestroy($image);
