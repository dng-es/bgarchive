<?php
function createBg($fileName){ 
$im = imagecreatetruecolor ( 140, 140 );
$bg = imagecolorallocate ( $im, 255, 0, 0 );
imagefill ( $im, 0, 0, $bg );
imagejpeg($im, PATH_PATTERNS_TEMP.'bg_custom.jpg');

$imagen_logo = new Imagick(PATH_PATTERNS.$fileName);
/* Set the opacity */
$imagen_logo->setImageOpacity(0.7);

// Esta imagen es el logo que se pondra.
$imagen_logo = imagecreatefrompng(PATH_PATTERNS.$fileName);
// Defino ancho, alto del logo.
$ancho_logo = imagesx($imagen_logo);
$alto_logo = imagesy($imagen_logo);

// Creo la imagen a cual se le pondra el logo.
$imagen_dest = imagecreatefromjpeg(PATH_PATTERNS_TEMP."bg_custom.jpg");
// Defino ancho, alto de la imagen que se le colocara el logo.
$ancho_dest = imagesx($imagen_logo);
$alto_dest = imagesy($imagen_logo);

// Defino la posicion donde se mostrara el logo dejando
// 10 pixeles de espacio. Se mostrara en la parte
// inferior derecho.
$ancho_muestra = ($ancho_dest - $ancho_logo) - 10;
$alto_muestra = ($alto_dest - $alto_logo) - 10;

//Envio la cabecera para mostrar la imagen.
header("Content-type: image/jpeg");

// Sobre pongo el logo a la imagen.
imagecopyresized($imagen_dest,$imagen_logo,$ancho_muestra,$alto_muestra,0,0,$ancho_logo,$alto_logo,$ancho_logo,$alto_logo);

// Guardo la imagen que ya tiene el logo.
imagejpeg($imagen_dest,"prueba.jpg",100);
// Muestro la imagen.
imagejpeg($imagen_dest,"",100);

// Destruyo las imagenes.
//imagedestroy($imagen_dest);
//imagedestroy($imagen_logo); 
}

function mm_type($filename) {
    $mime_types = array(
        // images
        'png' => 'image/png',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'gif' => 'image/gif',
    );

    $ext = strtolower(array_pop(explode('.',$filename)));
    if (array_key_exists($ext, $mime_types)) {
        return $mime_types[$ext];
    }
    elseif (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME);
        $mimetype = finfo_file($finfo, $filename);
        finfo_close($finfo);
        return $mimetype;
    }
    else {
        return 'application/octet-stream';
    }
}
?>