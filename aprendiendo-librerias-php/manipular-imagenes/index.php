<?php
require_once '../vendor/autoload.php';

use PHPThumb\GD;

$foto_original = 'mifoto.jpg';

$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);