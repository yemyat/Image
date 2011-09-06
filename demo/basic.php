<?php
require_once('../Image.php');

use Gregwar\Image\Image;

Image::open('img/test.png')
    ->resize(100, 100)
    ->negate()
    ->save('out.jpg');
