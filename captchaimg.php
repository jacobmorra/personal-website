<?php

session_start();

$capw=120;//width of captcha image
$caph=40; //height of captcha image

$code=rand(1000,99999);//generate random number between 1000 and 99999
$_SESSION["code"]=$code;//store code in session array
$im=imagecreatetruecolor($capw,$caph);//image with width $capw and height $caph
$bg=imagecolorallocate($im, 0, 130, 0);//set bg color green
$fg=imagecolorallocate($im,255,255,255);//set text color white
imagefill($im,0,0,$bg);//fills the image with given color starting at 0,0
imagestring($im,26,35,10,$code,$fg);//draw string at coordinates indicated
header("Cache-Control: no-cache, must-revalidate");
header("Content-type: image/png");
imagepng($im);
imagedestroy($im);//destroy image to reset when page is reset


?>